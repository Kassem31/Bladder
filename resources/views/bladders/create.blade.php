@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">            <div class="page-title">
                <h3>{{ __('common.add') }} {{ __('app.bladder') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <form action="{{ route('bladders.store') }}" method="POST" class="row g-3">
                            @csrf                            <div class="col-md-6">
                                <label for="BladderCode" class="form-label">{{ __('app.bladder_code') }} *</label>
                                <input type="text" class="form-control @error('BladderCode') is-invalid @enderror"
                                    id="BladderCode" name="BladderCode" value="{{ old('BladderCode') }}"
                                    placeholder="{{ __('app.bladder_code') }}" required>
                                @error('BladderCode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="BladderSizeId" class="form-label">{{ __('app.bladder_size') }} *</label>
                                <select class="form-select @error('BladderSizeId') is-invalid @enderror" id="BladderSizeId"
                                    name="BladderSizeId" required>
                                    <option value="">{{ __('app.bladder_size') }}</option>
                                    @foreach ($bladderSizes as $size)
                                        <option value="{{ $size->Id }}"
                                            {{ old('BladderSizeId') == $size->Id ? 'selected' : '' }}>
                                            {{ $size->Name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('BladderSizeId')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Status" class="form-label">{{ __('common.status') }} *</label>
                                <select class="form-select @error('Status') is-invalid @enderror" id="Status"
                                    name="Status" required>
                                    <option value="">{{ __('common.status') }}</option>
                                    <option value="ready" {{ old('Status') == 'ready' ? 'selected' : '' }}>{{ __('app.ready') }}
                                    </option>
                                    <option value="maintenance" {{ old('Status') == 'maintenance' ? 'selected' : '' }}>
                                        {{ __('app.maintenance') }}                                    </option>
                                    <option value="mounted" {{ old('Status') == 'mounted' ? 'selected' : '' }}>{{ __('app.mounted') }}
                                    </option>
                                    <option value="test" {{ old('Status') == 'test' ? 'selected' : '' }}>{{ __('app.test') }}
                                    </option>
                                </select>
                                @error('Status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="ExpiryDate" class="form-label">{{ __('app.expiry_date') }}</label>
                                <input type="date" class="form-control @error('ExpiryDate') is-invalid @enderror"
                                    id="ExpiryDate" name="ExpiryDate" value="{{ old('ExpiryDate') }}">
                                @error('ExpiryDate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>{{ __('common.save') }} {{ __('app.bladder') }}
                                </button>
                                <a href="{{ route('bladders.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-x me-1"></i>{{ __('common.cancel') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
