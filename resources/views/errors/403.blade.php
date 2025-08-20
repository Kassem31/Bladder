@extends('errors.layout')

@section('title', __('Forbidden'))

@section('content')
    <div class="icon">🚫</div>
    <div class="error-code">403</div>
    <h1 class="error-title">{{ __('Access Forbidden') }}</h1>
    <p class="error-message">
        {{ __('You don\'t have permission to access this resource.') }}
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
