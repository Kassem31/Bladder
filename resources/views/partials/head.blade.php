{{-- <link href="{{ asset('src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css"> --}}
{{-- <link href="{{ asset('src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" /> --}}
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<title>{{ config('app.name', 'Bladder') }}</title>
<link href="{{ asset('src/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Bladder</title>
@if (app()->getLocale() == 'ar')
    <link rel="icon" type="image/x-icon" href="{{ asset('src/assets/img/logo/logo.jpg') }}" />
    <link href="{{ asset('layouts_rtl/collapsible-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts_rtl/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('layouts_rtl/collapsible-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"> -->
    <link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet"> --}}
    <link href="{{ asset('layouts_rtl/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts_rtl/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
@else
    <link rel="icon" type="image/x-icon" href="{{ asset('src/assets/img/logo/logo.jpg') }}" />
    <link href="{{ asset('layouts/collapsible-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('layouts/collapsible-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"> -->
    <link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet"> --}}
    <link href="{{ asset('layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
@endif
{{-- <link href="{{ asset('src/assets/css/navbar-fix.css') }}" rel="stylesheet" type="text/css" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
<!-- END GLOBAL MANDATORY STYLES -->

<!-- RTL Support for Arabic -->
{{-- @if (app()->getLocale() == 'ar')
<style>
    body[dir="rtl"] {
        text-align: right;
    }
    
    body[dir="rtl"] .sidebar-wrapper {
        right: 0;
        left: auto;
    }
    
    body[dir="rtl"] .sidebar-wrapper .sidebar-content {
        direction: rtl;
    }
    
    body[dir="rtl"] #content {
        margin-right: 250px;
        margin-left: 0;
    }
    
    body[dir="rtl"] .navbar-item {
        flex-direction: row-reverse;
    }
    
    body[dir="rtl"] .dropdown-menu {
        right: 0;
        left: auto;
    }
    
    body[dir="rtl"] .table th,
    body[dir="rtl"] .table td {
        text-align: right;
    }
    
    body[dir="rtl"] .btn {
        text-align: center;
    }
</style>
@endif --}}

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
{{-- <link href="{{ asset('src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css"> --}}
{{-- <link href="{{ asset('src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="{{ asset('src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" /> --}}
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
