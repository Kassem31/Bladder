@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">            <div class="page-title">
                <h3>{{ __('common.create') }} {{ __('app.bladder_size') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('bladder-sizes.store') }}" method="POST">
                        @csrf                        <div class="form-group mb-4">
                            <label for="Name">{{ __('common.name') }}</label>
                            <input type="text" name="Name" id="Name" class="form-control @error('Name') is-invalid @enderror" 
                                   value="{{ old('Name') }}" placeholder="{{ __('app.bladder_size') }}" required>
                            @error('Name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <a href="{{ route('bladder-sizes.index') }}" class="btn btn-secondary">{{ __('common.cancel') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('common.create') }} {{ __('app.bladder_size') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
