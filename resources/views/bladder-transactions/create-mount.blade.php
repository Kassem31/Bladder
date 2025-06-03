@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/src/tomSelect/tom-select.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/tomSelect/custom-tomSelect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/tomSelect/custom-tomSelect.css') }}">
@endsection

@section('content')
    <div class="layout-px-spacing">        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('app.create_mount_transaction') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ __('common.error') }}:</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="{{ __('common.close') }}"></button>
                            </div>
                        @endif

                        <form action="{{ route('bladder-transactions.store') }}" method="POST" class="row g-3">
                            @csrf
                            <input type="hidden" name="TransactionType" value="Mount">                            <div class="col-md-6">
                                <label for="bladder-select" class="form-label">{{ __('app.bladder') }} *</label>
                                <select id="bladder-select" name="BladderId" required>
                                    <option value="">{{ __('app.select_bladder') }}</option>
                                    @foreach ($bladders as $bladder)
                                        <option value="{{ $bladder->Id }}"
                                            {{ old('BladderId') == $bladder->Id ? 'selected' : '' }}>
                                            {{ $bladder->BladderCode }} ({{ $bladder->bladderSize->Name ?? 'N/A' }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('BladderId')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>                            <div class="col-md-6">
                                <label for="machine-select" class="form-label">{{ __('app.machine') }} *</label>
                                <select id="machine-select" name="MachineId" required>
                                    <option value="">{{ __('app.select_machine') }}</option>
                                    @foreach ($machines as $machine)
                                        <option value="{{ $machine->Id }}"
                                            {{ old('MachineId') == $machine->Id ? 'selected' : '' }}>
                                            {{ $machine->Code }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('MachineId')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div><!-- Date & Time will be set automatically to current server time -->                            <div class="col-md-6">
                                <label for="direction-select" class="form-label">{{ __('app.mount_direction') }} *</label>
                                <select id="direction-select" name="Direction" required>
                                    <option value="">{{ __('app.select_direction') }}</option>
                                    <option value="Left" {{ old('Direction') == 'Left' ? 'selected' : '' }}>{{ __('app.left') }}
                                    </option>
                                    <option value="Right" {{ old('Direction') == 'Right' ? 'selected' : '' }}>{{ __('app.right') }}
                                    </option>
                                </select>
                                @error('Direction')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div><!-- Hidden fields removed -->                            <div class="col-12">
                                <h6 class="text-info">{{ __('app.changed_components') }}</h6>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedCopperElement') is-invalid @enderror"
                                        type="checkbox" id="ChangedCopperElement" name="ChangedCopperElement" value="1"
                                        {{ old('ChangedCopperElement') ? 'checked' : '' }}>                                    <label class="form-check-label" for="ChangedCopperElement">
                                        {{ __('app.changed_copper_element') }}
                                    </label>
                                    @error('ChangedCopperElement')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedMainMandrillSeal') is-invalid @enderror"
                                        type="checkbox" id="ChangedMainMandrillSeal" name="ChangedMainMandrillSeal"
                                        value="1" {{ old('ChangedMainMandrillSeal') ? 'checked' : '' }}>                                    <label class="form-check-label" for="ChangedMainMandrillSeal">
                                        {{ __('app.changed_main_mandrill_seal') }}
                                    </label>
                                    @error('ChangedMainMandrillSeal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedPiping') is-invalid @enderror"
                                        type="checkbox" id="ChangedPiping" name="ChangedPiping" value="1"
                                        {{ old('ChangedPiping') ? 'checked' : '' }}>                                    <label class="form-check-label" for="ChangedPiping">
                                        {{ __('app.changed_piping') }}
                                    </label>
                                    @error('ChangedPiping')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedRotaryJoint') is-invalid @enderror"
                                        type="checkbox" id="ChangedRotaryJoint" name="ChangedRotaryJoint" value="1"
                                        {{ old('ChangedRotaryJoint') ? 'checked' : '' }}>                                    <label class="form-check-label" for="ChangedRotaryJoint">
                                        {{ __('app.changed_rotary_joint') }}
                                    </label>
                                    @error('ChangedRotaryJoint')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedShoulderSeal') is-invalid @enderror"
                                        type="checkbox" id="ChangedShoulderSeal" name="ChangedShoulderSeal"
                                        value="1" {{ old('ChangedShoulderSeal') ? 'checked' : '' }}>                                    <label class="form-check-label" for="ChangedShoulderSeal">
                                        {{ __('app.changed_shoulder_seal') }}
                                    </label>
                                    @error('ChangedShoulderSeal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>{{ __('common.save') }}
                                </button>
                                <a href="{{ route('bladder-transactions.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-arrow-back me-1"></i>{{ __('common.back') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}
    <script>
        // Enable Bootstrap alert dismissal
        document.addEventListener('DOMContentLoaded', function() {
            const closeButtons = document.querySelectorAll('.alert .btn-close');
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const alert = this.closest('.alert');
                    if (alert) {
                        alert.classList.remove('show');
                        setTimeout(() => {
                            alert.remove();
                        }, 150);
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new TomSelect("#bladder-select", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                },
            });
            
            new TomSelect("#machine-select", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                },
            });
            
            new TomSelect("#direction-select", {
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                },
            });
        });
    </script>

    <script src="{{ asset('src/plugins/src/tomSelect/tom-select.base.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/tomSelect/custom-tom-select.js') }}"></script> --}}
@endsection
