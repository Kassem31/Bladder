@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Add New Bladder</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <form action="{{ route('bladders.store') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="BladderCode" class="form-label">Bladder Code *</label>
                                <input type="text" class="form-control @error('BladderCode') is-invalid @enderror"
                                    id="BladderCode" name="BladderCode" value="{{ old('BladderCode') }}"
                                    placeholder="Enter bladder code" required>
                                @error('BladderCode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="BladderSizeId" class="form-label">Bladder Size *</label>
                                <select class="form-select @error('BladderSizeId') is-invalid @enderror" id="BladderSizeId"
                                    name="BladderSizeId" required>
                                    <option value="">Select Bladder Size</option>
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
                                <label for="Status" class="form-label">Status *</label>
                                <select class="form-select @error('Status') is-invalid @enderror" id="Status"
                                    name="Status" required>
                                    <option value="">Select Status</option>
                                    <option value="ready" {{ old('Status') == 'ready' ? 'selected' : '' }}>Ready
                                    </option>
                                    <option value="maintenance" {{ old('Status') == 'maintenance' ? 'selected' : '' }}>
                                        Maintenance
                                    </option>
                                    <option value="mounted" {{ old('Status') == 'mounted' ? 'selected' : '' }}>Mounted
                                    </option>
                                    <option value="test" {{ old('Status') == 'test' ? 'selected' : '' }}>Test
                                    </option>
                                </select>
                                @error('Status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="ExpiryDate" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control @error('ExpiryDate') is-invalid @enderror"
                                    id="ExpiryDate" name="ExpiryDate" value="{{ old('ExpiryDate') }}">
                                @error('ExpiryDate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('ExpiryNotificationSent') is-invalid @enderror"
                                        type="checkbox" id="ExpiryNotificationSent" name="ExpiryNotificationSent"
                                        value="1" {{ old('ExpiryNotificationSent') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ExpiryNotificationSent">
                                        Expiry Notification Sent
                                    </label>
                                    @error('ExpiryNotificationSent')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>Save Bladder
                                </button>
                                <a href="{{ route('bladders.index') }}" class="btn btn-secondary px-5 ms-2">
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
