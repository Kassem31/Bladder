<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if there is any locale stored in the session
        if (Session::has('locale')) {            $locale = Session::get('locale');
            
            // Set the application locale
            App::setLocale($locale);
            
            // Also set Carbon locale for date translations
            Carbon::setLocale($locale);
        }
        
        return $next($request);
    }
}
