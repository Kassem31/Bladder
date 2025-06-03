@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/filter-column.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .sequence-steps {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .sequence-steps .arrow {
            margin: 0 1rem;
            color: #0d6efd;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .sequence-step {
            padding: 0.5rem 1rem;
            border-radius: 4px;
        }

        .sequence-step.active {
            background-color: rgba(13, 110, 253, 0.1);
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
        }
    </style>
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Transaction Details</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Bladder:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <a href="{{ route('bladders.show', $bladderTransaction->BladderId) }}" class="text-primary">
                                    {{ $bladderTransaction->bladder->BladderCode ?? 'N/A' }}
                                </a>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Machine:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($bladderTransaction->MachineId)
                                    <a href="{{ route('machines.show', $bladderTransaction->MachineId) }}"
                                        class="text-primary">
                                        {{ $bladderTransaction->machine->Name ?? 'N/A' }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Transaction Type:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @php
                                    $badgeColor = match ($bladderTransaction->TransactionType) {
                                        'Dismount' => 'warning',
                                        'Maintenance' => 'info',
                                        'Test' => 'primary',
                                        'Mount' => 'success',
                                        default => 'secondary',
                                    };
                                @endphp
                                <span class="badge bg-{{ $badgeColor }}">
                                    {{ ucfirst($bladderTransaction->TransactionType) }}
                                </span>
                            </div>
                        </div>

                        @if (in_array($bladderTransaction->TransactionType, ['Mount', 'Dismount']) &&
                                $bladderTransaction->Discriminator &&
                                in_array($bladderTransaction->Discriminator, ['Left', 'Right']))
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Direction:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span class="badge bg-info">{{ $bladderTransaction->Discriminator }}</span>
                                </div>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Transaction Date:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ \Carbon\Carbon::parse($bladderTransaction->CreatedAt)->format('F j, Y g:i A') }}
                            </div>
                        </div>

                        @if ($bladderTransaction->Notes)
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Notes:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $bladderTransaction->Notes }}
                                </div>
                            </div>
                        @endif

                        <hr>
                        <div class="row">
                            <div class="col-sm-12 button-group">
                                <a href="{{ route('bladder-transactions.index') }}" class="btn btn-secondary me-2">
                                    <i class="bx bx-arrow-back"></i> Back to List
                                </a>
                                @if ($isLatestTransaction)
                                    <form action="{{ route('bladder-transactions.destroy', $bladderTransaction->Id) }}"
                                        method="POST" class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger delete-button"
                                            style="margin-top: 0.8rem;"
                                            data-url="{{ route('bladder-transactions.destroy', $bladderTransaction->Id) }}">
                                            <i class="bx bx-trash"></i> Delete
                                        </button>
                                    </form>
                                @else
                                    <button type="button" class="btn btn-danger" disabled
                                        style="margin-top: 0.8rem; opacity: 0.6;"
                                        title="Only the most recent transaction can be deleted">
                                        <i class="bx bx-trash"></i> Delete
                                    </button>
                                    <div class="text-muted small mt-2">
                                        <i class="bx bx-info-circle"></i> Only the most recent transaction for this bladder
                                        can be deleted
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Transaction Sequence Information -->
                        <div class="card mt-4 border-top border-0 border-4 border-primary">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-transfer-alt me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">Transaction Sequence</h5>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center sequence-steps">
                                                <div
                                                    class="sequence-step {{ $bladderTransaction->TransactionType == 'Dismount' ? 'active' : '' }}">
                                                    <span class="badge rounded-pill bg-warning">Dismount</span>
                                                </div>
                                                <span class="arrow">→</span>
                                                <div
                                                    class="sequence-step {{ $bladderTransaction->TransactionType == 'Maintenance' ? 'active' : '' }}">
                                                    <span class="badge rounded-pill bg-info">Maintenance</span>
                                                </div>
                                                <span class="arrow">→</span>
                                                <div
                                                    class="sequence-step {{ $bladderTransaction->TransactionType == 'Test' ? 'active' : '' }}">
                                                    <span class="badge rounded-pill bg-primary">Test</span>
                                                </div>
                                                <span class="arrow">→</span>
                                                <div
                                                    class="sequence-step {{ $bladderTransaction->TransactionType == 'Mount' ? 'active' : '' }}">
                                                    <span class="badge rounded-pill bg-success">Mount</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Direct event listener on delete buttons
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const deleteUrl = this.getAttribute('data-url');
                    const isDarkMode = window.matchMedia && window.matchMedia(
                        '(prefers-color-scheme: dark)').matches;

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        background: isDarkMode ? '#333' : '#fff',
                        color: isDarkMode ? '#fff' : '#000'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = deleteUrl;

                            const csrfToken = document.createElement('input');
                            csrfToken.type = 'hidden';
                            csrfToken.name = '_token';
                            csrfToken.value = '{{ csrf_token() }}';

                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';

                            form.appendChild(csrfToken);
                            form.appendChild(methodInput);
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
