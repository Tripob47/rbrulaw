<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/our', function () {
    return view('pages.our');
});
Route::get('/qa', function () {
    return view('pages.qa');
});
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

// Route /news ให้ไปที่ Controller
Route::get('/news', [NewsController::class, 'index']);
