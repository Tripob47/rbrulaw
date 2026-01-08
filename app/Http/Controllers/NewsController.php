<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    private string $baseUrl = 'https://news.rbru.ac.th/newsrb_json';
    private string $newsTable = 'news_law';
    private int $perPage = 8;

    private function fetchNews(array $params): array
    {
        $response = Http::timeout(12)->get($this->baseUrl . '/news_json.php', $params);
        if (!$response->successful()) {
            return [];
        }
        $data = $response->json();
        return is_array($data) ? $data : [];
    }

    private function decodeDeep(?string $value, int $passes = 2): string
    {
        $output = $value ?? '';
        for ($i = 0; $i < $passes; $i += 1) {
            $decoded = html_entity_decode($output, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            if ($decoded === $output) {
                break;
            }
            $output = $decoded;
        }
        return $output;
    }

    private function extractYearBE(?string $orgNo): ?string
    {
        if (!$orgNo) {
            return null;
        }
        if (preg_match('/(20\d{2})/', $orgNo, $matches)) {
            return (string) ((int) $matches[1] + 543);
        }
        return null;
    }

    private function normalizeNews(array $items): array
    {
        $seenTitles = [];
        $normalized = [];
        foreach ($items as $item) {
            $title = $this->decodeDeep($item['headline'] ?? '');
            $normalizedTitle = mb_strtolower(trim(preg_replace('/\s+/', ' ', $title)));
            if (!$normalizedTitle || isset($seenTitles[$normalizedTitle])) {
                continue;
            }
            $seenTitles[$normalizedTitle] = true;
            $item['headline'] = $title;
            $item['headline_en'] = $this->decodeDeep($item['headline_en'] ?? '');
            $item['detail'] = $this->decodeDeep($item['detail'] ?? '');
            $item['detail_en'] = $this->decodeDeep($item['detail_en'] ?? '');
            $item['year_be'] = $this->extractYearBE($item['org_no'] ?? null);
            $normalized[] = $item;
        }
        return $normalized;
    }

    public function index(Request $request)
    {
        $category = $request->query('category', 'general');
        $query = trim((string) $request->query('q', ''));
        $year = $request->query('year', 'all');
        $page = max(1, (int) $request->query('page', 1));

        if ($category === 'training') {
            $items = array_merge(
                $this->fetchNews(['table' => $this->newsTable, 'type' => 1, 'sub_type' => 2]),
                $this->fetchNews(['table' => $this->newsTable, 'type' => 46, 'sub_type' => 2])
            );
        } elseif ($category === 'awards') {
            $items = $this->fetchNews(['table' => $this->newsTable, 'type' => 7]);
        } elseif ($category === 'awards_teachers') {
            $items = $this->fetchNews(['table' => $this->newsTable, 'type' => 7, 'sub_type' => 201]);
        } elseif ($category === 'awards_students') {
            $items = $this->fetchNews(['table' => $this->newsTable, 'type' => 7, 'sub_type' => 202]);
        } else {
            $items = $this->fetchNews(['table' => $this->newsTable, 'type' => 1]);
        }

        $items = $this->normalizeNews($items);

        if ($query !== '') {
            $items = array_filter($items, function ($item) use ($query) {
                $title = $item['headline'] ?? '';
                return mb_stripos($title, $query) !== false;
            });
        }

        if ($year !== 'all') {
            $items = array_filter($items, function ($item) use ($year) {
                return ($item['year_be'] ?? null) === $year;
            });
        }

        $items = array_values($items);
        $years = array_values(array_unique(array_filter(array_map(function ($item) {
            return $item['year_be'] ?? null;
        }, $items))));
        rsort($years);

        $total = count($items);
        $totalPages = max(1, (int) ceil($total / $this->perPage));
        $page = min($page, $totalPages);
        $offset = ($page - 1) * $this->perPage;
        $pagedItems = array_slice($items, $offset, $this->perPage);

        return view('news.index', [
            'items' => $pagedItems,
            'category' => $category,
            'query' => $query,
            'year' => $year,
            'years' => $years,
            'page' => $page,
            'totalPages' => $totalPages,
        ]);
    }

    public function show(string $orgNo)
    {
        $year = $this->extractYearBE($orgNo);
        $params = ['table' => $this->newsTable, 'org_no' => $orgNo];
        if ($year) {
            $params['year'] = (int) $year - 543;
        }

        $detailResponse = Http::timeout(12)->get($this->baseUrl . '/detail_json.php', $params);
        $detail = $detailResponse->successful() ? $detailResponse->json() : [];
        $detail = is_array($detail) && count($detail) > 0 ? $detail[0] : null;

        $attachmentsResponse = Http::timeout(12)->get($this->baseUrl . '/news_attach.php', [
            'table' => $this->newsTable,
            'org_no' => $orgNo,
        ]);
        $attachments = $attachmentsResponse->successful() ? $attachmentsResponse->json() : [];
        $attachments = is_array($attachments) ? $attachments : [];

        if ($detail) {
            $detail['headline'] = $this->decodeDeep($detail['headline'] ?? '');
            $detail['headline_en'] = $this->decodeDeep($detail['headline_en'] ?? '');
            $detail['detail'] = $this->decodeDeep($detail['detail'] ?? '');
            $detail['detail_en'] = $this->decodeDeep($detail['detail_en'] ?? '');
        }

        return view('news.detail', [
            'detail' => $detail,
            'attachments' => $attachments,
        ]);
    }
}
