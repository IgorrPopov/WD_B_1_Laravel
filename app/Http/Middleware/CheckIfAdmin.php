<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdmin
{
    public function handle($request, Closure $next)
    {
        abort_if(!is_null(auth()->user()) && auth()->user()->role !== 'admin', 403);

        return $next($request);
    }
}
