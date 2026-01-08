<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActivitiesController extends Controller
{
    private string $baseUrl = 'https://news.rbru.ac.th/newsrb_json';
    private string $galleryUser = 'law';
    private int $minYear = 2560;
    private int $limit = 500;
    private int $perPage = 8;

    private function getThaiYear(): int
    {
        return (int) date('Y') + 543;
    }

    private function fetchGalleryList(int $year, int $limit): array
    {
        $response = Http::timeout(12)->get($this->baseUrl . '/gallery_json.php', [
            'limitImg' => $limit,
            'User_login' => $this->galleryUser,
            'year' => $year,
        ]);
        if (!$response->successful()) {
            return [];
        }
        $data = $response->json();
        return is_array($data) ? $data : [];
    }

    private function fetchGalleryDetail(string $no): array
    {
        $response = Http::timeout(12)->get($this->baseUrl . '/gallery_detail_json.php', [
            'no' => $no,
        ]);
        if (!$response->successful()) {
            return [];
        }
        $data = $response->json();
        return is_array($data) ? $data : [];
    }

    private function fetchGalleryImages(string $no): array
    {
        $response = Http::timeout(12)->get($this->baseUrl . '/img_json.php', [
            'no' => $no,
        ]);
        if (!$response->successful()) {
            return [];
        }
        $data = $response->json();
        return is_array($data) ? $data : [];
    }

    private function fetchGalleryImage(string $no): ?string
    {
        $images = $this->fetchGalleryImages($no);
        if (count($images) === 0) {
            return null;
        }
        return $images[0]['name_photo'] ?? null;
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

    private function stripHtml(string $value): string
    {
        $clean = preg_replace('/<[^>]+>/', ' ', $value);
        return trim(preg_replace('/\s+/', ' ', $clean ?? ''));
    }

    public function index(Request $request)
    {
        $currentYear = $this->getThaiYear();
        $requestedYear = (int) $request->query('year', $currentYear);
        $year = $requestedYear > 0 ? $requestedYear : $currentYear;
        $query = trim((string) $request->query('q', ''));
        $page = max(1, (int) $request->query('page', 1));

        $items = [];
        $probeYear = $year;
        while ($probeYear >= $this->minYear) {
            $items = $this->fetchGalleryList($probeYear, $this->limit);
            if (count($items) > 0) {
                $year = $probeYear;
                break;
            }
            $probeYear -= 1;
        }

        $years = [];
        for ($probe = $currentYear; $probe >= $this->minYear; $probe -= 1) {
            if (count($this->fetchGalleryList($probe, 1)) > 0) {
                $years[] = $probe;
            }
        }

        $items = array_map(function ($item) {
            $item['topic'] = $this->decodeDeep($item['topic'] ?? '');
            $item['topic_en'] = $this->decodeDeep($item['topic_en'] ?? '');
            return $item;
        }, $items);

        if ($query !== '') {
            $items = array_filter($items, function ($item) use ($query) {
                $title = $item['topic'] ?? '';
                return mb_stripos($title, $query) !== false;
            });
        }

        $items = array_values($items);
        $total = count($items);
        $totalPages = max(1, (int) ceil($total / $this->perPage));
        $page = min($page, $totalPages);
        $offset = ($page - 1) * $this->perPage;
        $pagedItems = array_slice($items, $offset, $this->perPage);

        $pagedItems = array_map(function ($item) {
            $item['image'] = $this->fetchGalleryImage((string) ($item['no'] ?? ''));
            return $item;
        }, $pagedItems);

        return view('activities.index', [
            'items' => $pagedItems,
            'year' => $year,
            'years' => $years,
            'query' => $query,
            'page' => $page,
            'totalPages' => $totalPages,
        ]);
    }

    public function show(string $no)
    {
        $detail = $this->fetchGalleryDetail($no);
        $detail = is_array($detail) && count($detail) > 0 ? $detail[0] : null;
        $images = $this->fetchGalleryImages($no);

        if ($detail) {
            $detail['topic'] = $this->decodeDeep($detail['topic'] ?? '');
            $detail['topic_en'] = $this->decodeDeep($detail['topic_en'] ?? '');
            $detailText = $this->decodeDeep($detail['detail_en'] ?? $detail['name'] ?? '');
            $detail['detail_text'] = $this->stripHtml($detailText);
        }

        return view('activities.detail', [
            'detail' => $detail,
            'images' => $images,
        ]);
    }
}
