@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Add New Machine</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <form action="{{ route('machines.store') }}" method="POST" class="row g-3">
                            @csrf                            <div class="col-md-9">
                                <label for="Code" class="form-label">Machine Code *</label>
                                <input type="text" class="form-control @error('Code') is-invalid @enderror"
                                    id="Code" name="Code" value="{{ old('Code') }}"
                                    placeholder="Enter machine code" required>
                                @error('Code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Hidden inputs with null values -->
                            <input type="hidden" name="LeftBladderId" value="">
                            <input type="hidden" name="RightBladderId" value="">

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>Save Machine
                                </button>
                                <a href="{{ route('machines.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-x me-1"></i>Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
