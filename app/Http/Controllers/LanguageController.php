<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Validate the locale
        if (!in_array($locale, config('app.supported_locales', ['en', 'ar']))) {
            abort(404);
        }
        
        // Store the locale in session
        session(['locale' => $locale]);
        
        // Redirect back to the previous page
        return redirect()->back();
    }
}
