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

        return Redirect::back(); // กลับไปหน้าก่อนหน้า
    }
}

