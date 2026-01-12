<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang($locale)
    {
        if (!in_array($locale, ['en', 'th'])) {
            $locale = config('app.locale');
        }

        Session::put('locale', $locale);
        App::setLocale($locale);

        $previousUrl = url()->previous();
        $path = parse_url($previousUrl, PHP_URL_PATH) ?? '/';
        $path = trim($path, '/');

        $segments = $path === '' ? [] : explode('/', $path);
        if (!empty($segments) && in_array($segments[0], ['en', 'th'])) {
            array_shift($segments);
        }

        $cleanPath = implode('/', $segments);
        $target = url($locale . ($cleanPath !== '' ? '/' . $cleanPath : ''));

        return Redirect::to($target);
    }
}

