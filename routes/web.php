<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\HomeController;

Route::redirect('/', '/' . config('app.locale'));

Route::get('/sitemap.xml', function () {
    $localePaths = [
        '',
        'about',
        'about/history',
        'about/vision',
        'about/strategies',
        'about/structure',
        'about/location',
        'our',
        'qa',
        'qa/quality',
        'qa/km',
        'qa/plan',
        'qa/evaluation',
        'academic',
        'service',
        'alumni',
        'alumni2',
        'aeasearch',
        'news',
        'activities',
    ];

    $urls = [];
    foreach (['th', 'en'] as $locale) {
        foreach ($localePaths as $path) {
            $urls[] = url($locale . ($path !== '' ? '/' . $path : ''));
        }
    }

    $lastmod = date('Y-m-d');
    $xmlItems = array_map(function ($loc) use ($lastmod) {
        return "  <url>\n" .
            "    <loc>{$loc}</loc>\n" .
            "    <lastmod>{$lastmod}</lastmod>\n" .
            "  </url>";
    }, $urls);

    $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" .
        "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n" .
        implode("\n", $xmlItems) .
        "\n</urlset>\n";

    return response($xml, 200)->header('Content-Type', 'application/xml');
});

Route::get('lang/{locale}', [LanguageController::class, 'switchLang'])
    ->where('locale', 'en|th')
    ->name('lang.switch');

Route::prefix('{locale}')
    ->where(['locale' => 'en|th'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'index']);

        Route::view('/about', 'pages.about');
        Route::view('/about/history', 'pages.about');
        Route::view('/about/vision', 'pages.about-vision');
        Route::view('/about/strategies', 'pages.about-strategies');
        Route::view('/about/structure', 'pages.about-structure');
        Route::view('/about/location', 'pages.about-location');

        Route::get('/our', function () {
            return view('pages.our');
        });
        Route::view('/qa', 'pages.qa');
        Route::view('/qa/quality', 'pages.qa');
        Route::view('/qa/km', 'pages.qa-km');
        Route::view('/qa/plan', 'pages.qa-plan');
        Route::view('/qa/evaluation', 'pages.qa-evaluation');
        Route::get('/academic', function () {
            return view('pages.academic');
        });
        Route::view('/service', 'pages.service');

        Route::get('/alumni', function () {
            return view('pages.alumni');
        });
        Route::get('/alumni2', function () {
            return view('pages.alumni2');
        });

        Route::get('/aeasearch', function () {
            return view('pages.aeasearch');
        });

        Route::get('/news', [NewsController::class, 'index']);
        Route::get('/detailsnew/{orgNo}', [NewsController::class, 'show']);

        Route::get('/activities', [ActivitiesController::class, 'index']);
        Route::get('/detailsactivity/{no}', [ActivitiesController::class, 'show']);
    });

Route::get('{any}', function ($any) {
    $locale = config('app.locale');
    return redirect('/' . $locale . '/' . trim($any, '/'), 301);
})->where('any', '^(?!th/|en/).+');
