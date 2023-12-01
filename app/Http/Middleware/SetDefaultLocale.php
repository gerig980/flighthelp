<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;

class SetDefaultLocale
{
    public function handle($request, Closure $next)
    {
        $app = app();
        // Session::put('local', 'al');
        $app->setLocale('al');
        // dd($app->getLocale());
        return $next($request);
    }
}
