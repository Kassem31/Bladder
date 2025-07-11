@extends('layouts.app')

@section('title', __('app.create_maintenance_transaction'))

@section('styles')
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/src/tomSelect/tom-select.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/tomSelect/custom-tomSelect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/tomSelect/custom-tomSelect.css') }}">
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('app.create_maintenance_transaction') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ __('common.error') }}:</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="{{ __('common.close') }}"></button>
                            </div>
                        @endif

                        <form action="{{ route('bladder-transactions.store') }}" method="POST" class="row g-3">
                            @csrf
                            <input type="hidden" name="TransactionType" value="Maintenance">
                            <div class="col-md-6">
                                <label for="BladderId" class="form-label">{{ __('app.bladder') }} *</label>
                                <select id="bladder-select" name="BladderId" required>
                                    <option value="">{{ __('app.select_bladder') }}</option>
                                    @foreach ($bladders as $bladder)
                                        <option value="{{ $bladder->Id }}"
                                            {{ old('BladderId') == $bladder->Id ? 'selected' : '' }}>
                                            {{ $bladder->BladderCode }} ({{ $bladder->bladderSize->Name ?? __('common.not_available') }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('BladderId')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Machine and Discriminator are hidden for Maintenance transactions -->
                            <input type="hidden" name="MachineId" value="">
                            <input type="hidden" name="Discriminator" value="Maintenance Transaction">
                            <!-- Findings Section -->
                            <div class="col-12 mt-4">
                                <h6 class="text-info">{{ __('app.findings') }}</h6>
                                <hr>
                            </div>
                            <div class="col-md-8">
                                <label for="findings" class="form-label">{{ __('app.select_findings') }}</label>
                                <select id="select-findings" name="findings[]">
                                    @if (isset($findings) && $findings->count() > 0)
                                        @foreach ($findings as $finding)
                                            <option value="{{ $finding->Id }}"
                                                {{ in_array($finding->Id, old('findings', [])) ? 'selected' : '' }}>
                                                {{ $finding->Description }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                <div class="form-text">{{ __('app.click_to_select_multiple_findings') }}</div>
                                @error('findings')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mt-4">
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

            new TomSelect("#select-findings", {
                create: true,
                maxItems: 3,
                persist: false,
            });
        });
    </script>

    <script src="{{ asset('src/plugins/src/tomSelect/tom-select.base.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/tomSelect/custom-tom-select.js') }}"></script> --}}
@endsection
