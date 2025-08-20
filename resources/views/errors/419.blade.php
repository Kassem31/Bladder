@extends('errors.layout')

@section('title', __('Page Expired'))

@section('content')
    <div class="icon">⏱️</div>
    <div class="error-code">419</div>
    <h1 class="error-title">{{ __('Page Expired') }}</h1>
    <p class="error-message">
        {{ __('Your session has expired.') }}
    </p>
    <p class="error-message">
        {{ __('Please log in again to continue.') }}
    </p>
    <div class="mt-4">
        <a href="{{ route('login') }}" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-2"></i>{{ __('Return to Login') }}
        </a>
        <a href="{{ url('/') }}" class="btn btn-secondary">
            <i class="fas fa-home me-2"></i>{{ __('Go Home') }}
        </a>
    </div>
@endsection
