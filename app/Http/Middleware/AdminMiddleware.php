<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) { # true / false
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                return redirect('/user')->with('message', 'Akses ditolak, Anda bukan admin');
            }
        } else {
            return redirect('/login')->with('message', 'Silahkan login terlebih dahulu');
        }
    }
}