<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Quantri
{
    public function handle(Request $request, Closure $next)
    {
        // Chỉ cho phép user đã login và có idgroup = 1
        if (Auth::check() && Auth::user()->idgroup == 1) {
            return $next($request);
        }
        return redirect('/login');
    }
}
