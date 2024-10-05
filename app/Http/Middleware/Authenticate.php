<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Redirect pengguna yang tidak autentik ke halaman login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Jika tidak terautentikasi, redirect ke halaman login
            return redirect()->route('login')->withErrors(['message' => 'Silakan login untuk melanjutkan.']);
        }

        return $next($request);
    }
}
