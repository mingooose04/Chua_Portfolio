<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomMessage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /* Only allow logged-in users
        if (!auth()->check()) {
            return response()->view('pages.middleware', [
                'message' => 'You must be logged in to access this page.'
            ]);
        } */

        // Otherwise, allow access
        return $next($request);
    }
}
