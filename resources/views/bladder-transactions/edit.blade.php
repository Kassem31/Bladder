@extends('layouts.app')

@section('title', 'Edit Bladder Transaction')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Bladder Transaction Management</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('bladder-transactions.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Transaction</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-edit me-1 font-22 text-primary"></i></div>
                            <h5 class="mb-0 text-primary">Edit Bladder Transaction</h5>
                        </div>
                        <hr>

                        <form action="{{ route('bladder-transactions.update', $bladderTransaction) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PUT')
                            
                            <div class="col-md-6">
                                <label for="TransactionType" class="form-label">Transaction Type *</label>
                                <select class="form-select @error('TransactionType') is-invalid @enderror" 
                                        id="TransactionType" name="TransactionType" required>
                                    <option value="">Select Transaction Type</option>
                                    <option value="Install" {{ old('TransactionType', $bladderTransaction->TransactionType) == 'Install' ? 'selected' : '' }}>Install</option>
                                    <option value="Remove" {{ old('TransactionType', $bladderTransaction->TransactionType) == 'Remove' ? 'selected' : '' }}>Remove</option>
                                    <option value="Maintenance" {{ old('TransactionType', $bladderTransaction->TransactionType) == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                                </select>
                                @error('TransactionType')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="BladderId" class="form-label">Bladder *</label>
                                <select class="form-select @error('BladderId') is-invalid @enderror" 
                                        id="BladderId" name="BladderId" required>
                                    <option value="">Select Bladder</option>
                                    @foreach($bladders as $bladder)
                                        <option value="{{ $bladder->Id }}" {{ old('BladderId', $bladderTransaction->BladderId) == $bladder->Id ? 'selected' : '' }}>
                                            {{ $bladder->BladderCode }} ({{ $bladder->bladderSize->Name ?? 'N/A' }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('BladderId')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="MachineId" class="form-label">Machine *</label>
                                <select class="form-select @error('MachineId') is-invalid @enderror" 
                                        id="MachineId" name="MachineId" required>
                                    <option value="">Select Machine</option>
                                    @foreach($machines as $machine)
                                        <option value="{{ $machine->Id }}" {{ old('MachineId', $bladderTransaction->MachineId) == $machine->Id ? 'selected' : '' }}>
                                            {{ $machine->Code }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('MachineId')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="Discriminator" class="form-label">Discriminator</label>
                                <input type="text" class="form-control @error('Discriminator') is-invalid @enderror" 
                                       id="Discriminator" name="Discriminator" value="{{ old('Discriminator', $bladderTransaction->Discriminator) }}" 
                                       placeholder="Enter discriminator">
                                @error('Discriminator')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h6 class="text-primary">Changed Components</h6>
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedCopperElement') is-invalid @enderror" 
                                           type="checkbox" id="ChangedCopperElement" name="ChangedCopperElement" 
                                           value="1" {{ old('ChangedCopperElement', $bladderTransaction->ChangedCopperElement) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ChangedCopperElement">
                                        Changed Copper Element
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
                                           value="1" {{ old('ChangedMainMandrillSeal', $bladderTransaction->ChangedMainMandrillSeal) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ChangedMainMandrillSeal">
                                        Changed Main Mandrill Seal
                                    </label>
                                    @error('ChangedMainMandrillSeal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedSecondaryMandrillSeal') is-invalid @enderror" 
                                           type="checkbox" id="ChangedSecondaryMandrillSeal" name="ChangedSecondaryMandrillSeal" 
                                           value="1" {{ old('ChangedSecondaryMandrillSeal', $bladderTransaction->ChangedSecondaryMandrillSeal) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ChangedSecondaryMandrillSeal">
                                        Changed Secondary Mandrill Seal
                                    </label>
                                    @error('ChangedSecondaryMandrillSeal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedBladderBottomSeal') is-invalid @enderror" 
                                           type="checkbox" id="ChangedBladderBottomSeal" name="ChangedBladderBottomSeal" 
                                           value="1" {{ old('ChangedBladderBottomSeal', $bladderTransaction->ChangedBladderBottomSeal) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ChangedBladderBottomSeal">
                                        Changed Bladder Bottom Seal
                                    </label>
                                    @error('ChangedBladderBottomSeal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('ChangedAirValve') is-invalid @enderror" 
                                           type="checkbox" id="ChangedAirValve" name="ChangedAirValve" 
                                           value="1" {{ old('ChangedAirValve', $bladderTransaction->ChangedAirValve) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ChangedAirValve">
                                        Changed Air Valve
                                    </label>
                                    @error('ChangedAirValve')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>Update Transaction
                                </button>
                                <a href="{{ route('bladder-transactions.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-x me-1"></i>Cancel
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
