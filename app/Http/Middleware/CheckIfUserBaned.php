<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfUserBaned
{
    public function handle($request, Closure $next)
    {

        if (!is_null(auth()->user()) && auth()->user()->is_banned) {

            auth()->logout();

            return redirect('login')->withErrors('Your Account Is Banned! Please Contact The Administrator');
            
        }

        return $next($request);
    }
}
