<?php

namespace App\Http\Middleware\Core;

use Closure;
use Illuminate\Http\Request;

/**
 * Source based on:
 * https://github.com/shin1x1/laravel-force-https-url-scheme
 * http://stackoverflow.com/questions/28402726/laravel-5-redirect-to-https
 */

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        
        Request::setTrustedProxies([$request->getClientIp()], Request::HEADER_X_FORWARDED_ALL);
        if (!$request->isSecure()) {
            return redirect()->secure($request->getRequestUri());
        }
        
        return $next($request);
        
    }
    
}