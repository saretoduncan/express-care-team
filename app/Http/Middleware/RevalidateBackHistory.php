<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RevalidateBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $res = $next($request);
        $res->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
        $res->headers->set('Pragma', 'no-cache');
        $res->headers->set('Expires', '0');


        return $res;
    }
}
