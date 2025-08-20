@extends('errors.layout')

@section('title', __('Page Not Found'))

@section('content')
    <div class="icon">🔍</div>
    <div class="error-code">404</div>
    <h1 class="error-title">{{ __('Page Not Found') }}</h1>
    <p class="error-message">
        {{ __('The page you are looking for could not be found.') }}
    </p>
    <div class="mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary">
            <i class="fas fa-home me-2"></i>{{ __('Go Home') }}
        </a>
        <a href="javascript:history.back()" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>{{ __('Go Back') }}
        </a>
    </div>
@endsection
