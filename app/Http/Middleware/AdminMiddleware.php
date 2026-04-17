<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (!auth()->check()) {
            return redirect('/login-admin')->with('error', 'Silakan login sebagai admin');
        }

        // Cek apakah user adalah admin (role == 1)
        if (auth()->user()->role != 1) {
            return redirect('/beranda')->with('error', 'Akses ditolak, bukan admin');
        }

        // Jika lolos semua pengecekan, lanjutkan request
        return $next($request);
    }
}