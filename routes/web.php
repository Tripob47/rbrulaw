<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\HomeController;

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

Route::get('/alumni', function () {
    return view('pages.alumni');
});
Route::get('/alumni2', function () {
    return view('pages.alumni2');
});

Route::get('/aeasearch', function () {
    return view('pages.aeasearch');
});
Route::get('lang/{locale}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/news', [NewsController::class, 'index']);
Route::get('/detailsnew/{org_no}', [NewsController::class, 'show']);

Route::get('/activities', [ActivitiesController::class, 'index']);
Route::get('/detailsactivity/{no}', [ActivitiesController::class, 'show']);
