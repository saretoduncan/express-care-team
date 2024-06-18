<?php

namespace App\Http\Middleware;

use App\Services\CustomServices;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('web')->check()) {
            // flash()->options(['timeout' => '', 'position' => 'top-center'])->error('Please login first');
            flashError("please login first");

            return redirect(route('login.index'));
        }
        return $next($request);
    }
}