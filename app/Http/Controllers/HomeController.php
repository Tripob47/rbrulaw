<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    private string $baseUrl = 'https://news.rbru.ac.th/newsrb_json';
    private string $newsTable = 'news_law';
    private string $galleryUser = 'law';
    private int $minGalleryYear = 2560;

    private function getThaiYear(): int
    {
        return (int) date('Y') + 543;
    }

    private function fetchNews(array $params): array
    {
        $cacheKey = 'home.news.' . md5(json_encode($params));

        return Cache::remember($cacheKey, now()->addMinutes(10), function () use ($params) {
            $response = Http::timeout(12)->get($this->baseUrl . '/news_json.php', $params);
            if (!$response->successful()) {
                return [];
            }
            $data = $response->json();
            return is_array($data) ? $data : [];
        });
    }

    private function fetchGalleryList(int $year, int $limit): array
    {
        $cacheKey = 'home.gallery.list.' . $year . '.' . $limit;

        return Cache::remember($cacheKey, now()->addMinutes(10), function () use ($year, $limit) {
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
        });
    }

    private function fetchGalleryImage(string $no): ?string
    {
        $cacheKey = 'home.gallery.image.' . $no;

        return Cache::remember($cacheKey, now()->addMinutes(30), function () use ($no) {
            $response = Http::timeout(12)->get($this->baseUrl . '/img_json.php', [
                'no' => $no,
            ]);
            if (!$response->successful()) {
                return null;
            }
            $data = $response->json();
            if (!is_array($data) || count($data) === 0) {
                return null;
            }
            return $data[0]['name_photo'] ?? null;
        });
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

    private function looksLikeImage(string $value): bool
    {
        return (bool) preg_match('/\.(png|jpe?g|gif|webp|svg)(\?.*)?$/i', $value)
            || str_contains($value, '/img/')
            || str_contains($value, '/image/')
            || str_contains($value, '/images/');
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

    private function resolveImage(array $item): ?string
    {
        $candidates = ['image', 'img', 'photo', 'picture', 'pic', 'thumbnail', 'thumb', 'cover', 'url', 'filename'];
        foreach ($candidates as $key) {
            $value = $item[$key] ?? '';
            if (!is_string($value) || trim($value) === '') {
                continue;
            }
            if ($key === 'url' && !$this->looksLikeImage($value)) {
                continue;
            }
            $normalized = $this->normalizeImageUrl($value);
            if ($normalized) {
                return $normalized;
            }
        }
        return null;
    }

    public function index()
    {
        $newsGeneral = $this->fetchNews([
            'table' => $this->newsTable,
            'type' => 1,
        ]);

        $newsTraining = array_merge(
            $this->fetchNews(['table' => $this->newsTable, 'type' => 1, 'sub_type' => 2]),
            $this->fetchNews(['table' => $this->newsTable, 'type' => 46, 'sub_type' => 2])
        );

        $newsAwards = $this->fetchNews([
            'table' => $this->newsTable,
            'type' => 7,
        ]);

        $currentYear = $this->getThaiYear();
        $year = $currentYear;
        $activities = [];
        while ($year >= $this->minGalleryYear) {
            $activities = $this->fetchGalleryList($year, 10);
            if (count($activities) > 0) {
                break;
            }
            $year -= 1;
        }

        $activities = array_map(function ($item) {
            $item['topic'] = $this->decodeDeep($item['topic'] ?? '');
            $item['topic_en'] = $this->decodeDeep($item['topic_en'] ?? '');
            $item['image'] = $this->fetchGalleryImage((string) ($item['no'] ?? ''));
            return $item;
        }, $activities);

        $normalize = function (array $items) {
            return array_slice(array_map(function ($item) {
                $item['headline'] = $this->decodeDeep($item['headline'] ?? '');
                $item['headline_en'] = $this->decodeDeep($item['headline_en'] ?? '');
                $item['image'] = $this->resolveImage($item);
                return $item;
            }, $items), 0, 4);
        };

        return view('home', [
            'newsGeneral' => $normalize($newsGeneral),
            'newsTraining' => $normalize($newsTraining),
            'newsAwards' => $normalize($newsAwards),
            'activities' => $activities,
        ]);
    }
}
