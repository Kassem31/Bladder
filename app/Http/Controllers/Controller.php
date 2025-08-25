<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    use AuthorizesRequests;

    /**
     * Check if user has permission or is super admin
     */
    protected function checkPermission($permission)
    {
        if (!Auth::user()->is_super_admin && !Auth::user()->hasPermission($permission)) {
            abort(403, __('common.unauthorized'));
        }
    }
}
