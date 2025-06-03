@extends('layouts.app')

@section('title', 'Create Test Transaction')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Create Test Transaction</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error:</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('bladder-transactions.store') }}" method="POST" class="row g-3">
                            @csrf
                            <input type="hidden" name="TransactionType" value="Test">

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
                            </div> <!-- Machine and Discriminator are hidden for Test transactions -->
                            <input type="hidden" name="MachineId" value="">
                            <input type="hidden" name="Discriminator" value="Test Transaction">

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>Save
                                </button>
                                <a href="{{ route('bladder-transactions.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-arrow-back me-1"></i>Back
                                </a>
                            </div>
                        </form>
                    </div>
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
@endsection
