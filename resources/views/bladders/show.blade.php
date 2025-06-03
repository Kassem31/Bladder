@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/filter-column.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Bladder Details</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Bladder Code:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $bladder->BladderCode }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Bladder Size:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $bladder->bladderSize->Name ?? 'N/A' }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Status:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary"> <span
                                    class="badge bg-{{ $bladder->Status === 'available' ? 'success' : ($bladder->Status === 'in_use' ? 'warning' : 'danger') }}">
                                    {{ ucfirst(str_replace('_', ' ', $bladder->Status)) }}
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Expiry Date:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($bladder->ExpiryDate)
                                    {{ $bladder->ExpiryDate->format('F j, Y') }}
                                    @if ($bladder->ExpiryDate->isPast())
                                        <span class="badge bg-danger ms-2">Expired</span>
                                    @elseif($bladder->ExpiryDate->diffInDays() <= 30)
                                        <span class="badge bg-warning ms-2">Expiring Soon</span>
                                    @endif
                                @else
                                    N/A
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Expiry Notification:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary"> <span
                                    class="badge bg-{{ $bladder->ExpiryNotificationSent ? 'success' : 'secondary' }}">
                                    {{ $bladder->ExpiryNotificationSent ? 'Sent' : 'Not Sent' }}
                                </span>
                            </div>
                        </div>

                        @if ($bladder->bladderTransactions->count() > 0)
                            <hr>
                            <h6 class="mb-3">Transaction History</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Machine</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bladder->bladderTransactions->take(5) as $transaction)
                                            <tr>
                                                <td>{{ $transaction->TransactionType }}</td>
                                                <td>{{ $transaction->machine->Code ?? 'N/A' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($bladder->bladderTransactions->count() > 5)
                                    <small class="text-muted">Showing 5 most recent transactions</small>
                                @endif
                            </div>
                        @endif

                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{ route('bladders.edit', $bladder) }}" class="btn btn-primary">
                                    <i class="bx bx-edit me-1"></i>Edit
                                </a>
                                <a href="{{ route('bladders.index') }}" class="btn btn-secondary ms-2">
                                    <i class="bx bx-arrow-back me-1"></i>Back to List
                                </a>                                <form action="{{ route('bladders.destroy', $bladder) }}" method="POST"
                                    class="d-inline ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger delete-button"
                                        data-url="{{ route('bladders.destroy', $bladder) }}">
                                        <i class="bx bx-trash me-1"></i>Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        </div>
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
