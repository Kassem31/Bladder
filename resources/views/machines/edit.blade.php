@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('common.edit') }} {{ __('app.machine') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <form action="{{ route('machines.update', $machine) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="Code" class="form-label">{{ __('app.machine_code') }} *</label>
                                <input type="text" class="form-control @error('Code') is-invalid @enderror"
                                    id="Code" name="Code" value="{{ old('Code', $machine->Code) }}"
                                    placeholder="{{ __('app.enter_machine_code') }}" required>
                                @error('Code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <i class="bx bx-info-circle me-1"></i>
                                    <strong>{{ __('app.bladder_information') }}:</strong><br>
                                    {{ __('app.left_bladder') }}:
                                    {{ $machine->leftBladder ? $machine->leftBladder->BladderCode : __('common.none') }}<br>
                                    {{ __('app.right_bladder') }}:
                                    {{ $machine->rightBladder ? $machine->rightBladder->BladderCode : __('common.none') }}<br>
                                    {{ __('app.status') }}:
                                    <span class="badge bg-{{ $machine->is_working ? 'success' : 'danger' }}">
                                        {{ $machine->status_text }}
                                    </span>
                                </div>
                            </div>

                            <!-- Hidden inputs to maintain current values -->
                            <input type="hidden" name="LeftBladderId" value="{{ $machine->LeftBladderId }}">
                            <input type="hidden" name="RightBladderId" value="{{ $machine->RightBladderId }}">                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>{{ __('common.update') }} {{ __('app.machine') }}
                                </button>
                                <a href="{{ route('machines.index') }}" class="btn btn-secondary px-5 ms-2">
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
