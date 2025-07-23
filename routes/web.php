<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/our', function () {
    return view('pages.our');
});
Route::get('/news', function () {
    return view('news.news');
});
use App\Http\Controllers\LanguageController;

Route::get('lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');

use Illuminate\Support\Facades\Http;

Route::get('/api/news-proxy', function () {
    $response = Http::get('https://news.rbru.ac.th/newsrb_json');

    if ($response->successful()) {
        return response()->json($response->json());
    }

    return response()->json(['error' => 'Unable to fetch news'], 500);
});

