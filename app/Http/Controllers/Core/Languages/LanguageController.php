<?php

namespace App\Http\Controllers\Core\Languages;

use Auth;
use Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    //https://mydnic.be/post/laravel-5-and-his-fcking-non-persistent-app-setlocale
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('core.languages'))) {
            Session::put('applocale', $lang);
            $cookie = cookie()->forever('applocale', $lang);
            if (Auth::check()) {
                $user = \Auth::user();
                $user->language = $lang;
                $user->save();
            }
        }
        return Redirect::back()->withCookie($cookie);
    }
    
}