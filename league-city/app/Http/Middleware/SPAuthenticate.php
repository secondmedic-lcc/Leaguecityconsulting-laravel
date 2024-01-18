<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SPAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!session('user_id')) {
            return redirect('/sp-login');
        }

        return $next($request);
    }
}
