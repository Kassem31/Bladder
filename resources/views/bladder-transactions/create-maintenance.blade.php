@extends('layouts.app')

@section('title', 'Create Maintenance Transaction')

@section('styles')
    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        /* Styling for Select2 */
        .select2-container--default .select2-selection--multiple {
            border-color: #ced4da;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
    </style>
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Create Maintenance Transaction</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error:</strong> {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('bladder-transactions.store') }}" method="POST" class="row g-3">
                                @csrf
                                <input type="hidden" name="TransactionType" value="Maintenance">

                                <div class="col-md-6">
                                    <label for="BladderId" class="form-label">Bladder *</label>
                                    <select class="form-select @error('BladderId') is-invalid @enderror" id="BladderId"
                                        name="BladderId" required>
                                        <option value="">Select Bladder</option>
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
                                </div>

                                <!-- Machine and Discriminator are hidden for Maintenance transactions -->
                                <input type="hidden" name="MachineId" value="">
                                <input type="hidden" name="Discriminator" value="Maintenance Transaction">
                                <!-- Findings Section -->
                                <div class="col-12 mt-4">
                                    <h6 class="text-info">Findings</h6>
                                    <hr>
                                </div>
                                <div class="col-md-8">
                                    <label for="findings" class="form-label">Select Findings</label>
                                    <select class="form-select @error('findings') is-invalid @enderror" id="findings"
                                        name="findings[]" multiple="multiple" data-placeholder="Select findings">
                                        @if (isset($findings) && $findings->count() > 0)
                                            @foreach ($findings as $finding)
                                                <option value="{{ $finding->Id }}"
                                                    {{ in_array($finding->Id, old('findings', [])) ? 'selected' : '' }}>
                                                    {{ $finding->Description }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="form-text">Click to select/deselect multiple findings</div>
                                    @error('findings')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <i class="bx bx-save me-1"></i>Save
                                    </button>
                                    <a href="{{ route('bladder-transactions.index') }}"
                                        class="btn btn-secondary px-5 ms-2">
                                        <i class="bx bx-arrow-back me-1"></i>Back
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
    <!-- Include jQuery if not already included -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('#findings').select2({
                placeholder: 'Select findings',
                closeOnSelect: false,
                width: '100%'
            });

            // Enable Bootstrap alert dismissal
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
@endsection
