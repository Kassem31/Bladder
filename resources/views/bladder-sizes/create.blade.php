@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Create Bladder Size</h3>
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
                            <label for="Name">Name</label>
                            <input type="text" name="Name" id="Name" class="form-control @error('Name') is-invalid @enderror" 
                                   value="{{ old('Name') }}" placeholder="Enter bladder size name" required>
                            @error('Name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <a href="{{ route('bladder-sizes.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Bladder Size</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
