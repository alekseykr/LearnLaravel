<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Location
{
    public function handle($request, Closure $next)
    {
        App::setLocale("en");
        return $next($request);
    }
}
