<?php

namespace App\Http\Middleware\Core;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if (Session::has('applocale') AND array_key_exists(Session::get('applocale'), Config::get('core.languages'))) {
        //     App::setLocale(Session::get('applocale'));
        // } else { // This is optional as Laravel will automatically set the fallback language if there is none specified
        //     App::setLocale(Config::get('app.fallback_locale'));
        // }
        
        if (Session::has('applocale') AND array_key_exists(Session::get('applocale'), Config::get('core.languages'))) {
            App::setLocale(Session::get('applocale'));
        } else if (Cookie::has('applocale') && array_key_exists(Cookie::get('applocale'), Config::get('core.languages'))) {
            App::setLocale(Cookie::get('applocale'));
        } else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(Config::get('app.fallback_locale'));
        }
        return $next($request);
    }
}
