<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $routeLocale = $request->route('locale');
        if ($routeLocale && in_array($routeLocale, ['en', 'th'])) {
            Session::put('locale', $routeLocale);
            $locale = $routeLocale;
        } else {
            $segmentLocale = $request->segment(1);
            if ($segmentLocale && in_array($segmentLocale, ['en', 'th'])) {
                Session::put('locale', $segmentLocale);
                $locale = $segmentLocale;
            } else {
                $locale = Session::get('locale', config('app.locale'));
            }
        }

        App::setLocale($locale);

        return $next($request);
    }
}

