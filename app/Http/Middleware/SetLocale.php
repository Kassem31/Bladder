<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if locale is set in session, otherwise use default
        $locale = session('locale', config('app.locale'));
        
        // Ensure the locale is supported
        if (!in_array($locale, config('app.supported_locales', ['en', 'ar']))) {
            $locale = config('app.locale');
        }
        
        // Set the application locale
        app()->setLocale($locale);
        
        return $next($request);
    }
}
