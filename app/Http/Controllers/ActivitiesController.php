<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ActivitiesController extends Controller
{
    private string $baseUrl = 'https://news.rbru.ac.th/newsrb_json';
    private string $galleryUser = 'law';
    private int $minYear = 2560;
    private int $limit = 500;
    private function getThaiYear(): int
    {
        return (int) date('Y') + 543;
    }

    private function httpClient()
    {
        $client = Http::timeout(12)->withHeaders([
            'User-Agent' => 'Mozilla/5.0',
        ]);
        if (app()->environment('local')) {
            $client = $client->withoutVerifying();
        }
        return $client;
    }

    private function fetchJson(string $endpoint, array $params): array
    {
        $response = $this->httpClient()->get($this->baseUrl . '/' . $endpoint, $params);
        if ($response->successful()) {
            $data = $response->json();
            if (is_array($data)) {
                return $data;
            }
            $raw = (string) $response->body();
            if ($raw !== '') {
                $data = json_decode($raw, true);
                if (!is_array($data)) {
                    $data = json_decode($this->repairJson($raw), true);
                }
                if (is_array($data)) {
                    return $data;
                }
            }
        }

        if (!app()->environment('local')) {
            return [];
        }

        $url = $this->baseUrl . '/' . $endpoint . '?' . http_build_query($params);
        $context = stream_context_create([
            'http' => [
                'timeout' => 12,
                'header' => "User-Agent: Mozilla/5.0\r\n",
            ],
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);
        $raw = @file_get_contents($url, false, $context);
        if ($raw === false) {
            $cmd = 'curl -sS ' . escapeshellarg($url);
            $raw = trim((string) @shell_exec($cmd));
        }
        if ($raw === '') {
            Log::warning('Gallery fetch failed', ['url' => $url]);
            return [];
        }
        $data = json_decode($raw, true);
        if (!is_array($data)) {
            $fixed = $this->repairJson($raw);
            $data = json_decode($fixed, true);
        }
        return is_array($data) ? $data : [];
    }

    private function repairJson(string $raw): string
    {
        $raw = $this->repairJsonField($raw, 'topic', ['detail', 'topic_en', 'detail_en', 'year', 'from', 'img_title', 'image']);
        $raw = $this->repairJsonField($raw, 'detail', ['topic_en', 'detail_en', 'year', 'from', 'img_title', 'image']);
        $raw = $this->repairJsonField($raw, 'topic_en', ['detail_en', 'year', 'from', 'img_title', 'image']);
        $raw = $this->repairJsonField($raw, 'detail_en', ['year', 'from', 'img_title', 'image']);
        return $raw;
    }

    private function repairJsonField(string $raw, string $key, array $nextKeys): string
    {
        $next = implode('|', array_map(function ($item) {
            return preg_quote($item, '/');
        }, $nextKeys));
        $pattern = '/("' . preg_quote($key, '/') . '"\\s*:\\s*)"(.*)"(?=,\\s*"(?:' . $next . ')"\\s*:)/s';
        return preg_replace_callback($pattern, function ($matches) {
            return $matches[1] . json_encode($matches[2], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }, $raw);
    }

    private function fetchGalleryList(int $year, int $limit): array
    {
        return $this->fetchJson('gallery_json.php', [
            'limitImg' => $limit,
            'User_login' => $this->galleryUser,
            'year' => $year,
        ]);
    }

    private function fetchGalleryDetail(string $no): array
    {
        return $this->fetchJson('gallery_detail_json.php', [
            'no' => $no,
        ]);
    }

    private function fetchGalleryImages(string $no): array
    {
        $data = $this->fetchJson('img_json.php', [
            'no' => $no,
        ]);
        return array_map(function ($item) {
            if (!is_array($item)) {
                return [];
            }
            $item['name_photo'] = $this->normalizeImageUrl($item['name_photo'] ?? null);
            return $item;
        }, $data);
    }

    private function fetchGalleryImage(string $no): ?string
    {
        $images = $this->fetchGalleryImages($no);
        if (count($images) === 0) {
            return null;
        }
        return $this->normalizeImageUrl($images[0]['name_photo'] ?? null);
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

    private function normalizeImageUrl(?string $value): ?string
    {
        $value = trim((string) $value);
        if ($value === '') {
            return null;
        }
        if (str_starts_with($value, '//')) {
            return 'https:' . $value;
        }
        if (preg_match('#^https?://#i', $value)) {
            return $value;
        }
        return 'https://news.rbru.ac.th/' . ltrim($value, '/');
    }

    private function stripHtml(string $value): string
    {
        $clean = preg_replace('/<[^>]+>/', ' ', $value);
        return trim(preg_replace('/\s+/', ' ', $clean ?? ''));
    }

    private function findGalleryItemByNo(string $no): ?array
    {
        $currentYear = $this->getThaiYear();
        for ($year = $currentYear; $year >= $this->minYear; $year -= 1) {
            $items = $this->fetchGalleryList($year, $this->limit);
            foreach ($items as $item) {
                if (($item['no'] ?? '') === $no) {
                    return $item;
                }
            }
        }
        return null;
    }

    public function index(Request $request)
    {
        $currentYear = $this->getThaiYear();
        $requestedYear = (int) $request->query('year', $currentYear);
        $year = $requestedYear > 0 ? $requestedYear : $currentYear;
        $query = trim((string) $request->query('q', ''));

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
        $items = array_map(function ($item) {
            $fallback = $item['image'] ?? ($item['img_title'] ?? null);
            $item['image'] = $this->normalizeImageUrl($fallback);
            return $item;
        }, $items);

        return view('activities.index', [
            'items' => $items,
            'year' => $year,
            'years' => $years,
            'query' => $query,
        ]);
    }

    public function show(Request $request, string $locale, string $no)
    {
        $no = (string) ($request->route('no') ?? $no);
        if (!ctype_digit($no)) {
            $segment = $request->segment(3);
            if (is_string($segment) && ctype_digit($segment)) {
                $no = $segment;
            }
        }
        $detail = $this->fetchGalleryDetail($no);
        $detail = is_array($detail) && count($detail) > 0 ? $detail[0] : null;
        $images = $this->fetchGalleryImages($no);

        if (!$detail) {
            $detail = $this->findGalleryItemByNo($no);
        }

        if ($detail) {
            $detail['topic'] = $this->decodeDeep($detail['topic'] ?? '');
            $detail['topic_en'] = $this->decodeDeep($detail['topic_en'] ?? '');
            $detailText = $this->decodeDeep($detail['detail_en'] ?? $detail['detail'] ?? $detail['name'] ?? '');
            $detail['detail_text'] = $this->stripHtml($detailText);
        }

        return view('activities.detail', [
            'detail' => $detail,
            'images' => $images,
        ]);
    }

    private function fetchRaw(string $endpoint, array $params): string
    {
        $response = $this->httpClient()->get($this->baseUrl . '/' . $endpoint, $params);
        $raw = (string) $response->body();
        if ($raw !== '') {
            return $raw;
        }
        if (!app()->environment('local')) {
            return '';
        }
        $url = $this->baseUrl . '/' . $endpoint . '?' . http_build_query($params);
        $context = stream_context_create([
            'http' => [
                'timeout' => 12,
                'header' => "User-Agent: Mozilla/5.0\r\n",
            ],
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);
        $raw = (string) @file_get_contents($url, false, $context);
        if ($raw !== '') {
            return $raw;
        }
        $cmd = 'curl -sS ' . escapeshellarg($url);
        return trim((string) @shell_exec($cmd));
    }
}
