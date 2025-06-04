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
        <div class="row layout-top-spacing">            <div class="page-title">
                <h3>{{ __('app.machine_details') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.machine_code') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $machine->Code }}
                            </div>
                        </div>                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.status') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">                                <span class="badge bg-{{ $machine->is_working ? 'success' : 'danger' }}">
                                    {{ $machine->status_text }}
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.left_bladder') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($machine->leftBladder)
                                    <a href="{{ route('bladders.show', $machine->leftBladder) }}"
                                        class="text-decoration-none">
                                        {{ $machine->leftBladder->BladderCode }}
                                        <span
                                            class="badge bg-info ms-1">{{ $machine->leftBladder->bladderSize->Name ?? __('common.not_available') }}</span>
                                    </a>                                @else
                                    <span class="text-muted">{{ __('app.no_bladder_assigned') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.right_bladder') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($machine->rightBladder)
                                    <a href="{{ route('bladders.show', $machine->rightBladder) }}"
                                        class="text-decoration-none">
                                        {{ $machine->rightBladder->BladderCode }}
                                        <span
                                            class="badge bg-info ms-1">{{ $machine->rightBladder->bladderSize->Name ?? __('common.not_available') }}</span>
                                    </a>
                                @else
                                    <span class="text-muted">{{ __('app.no_bladder_assigned') }}</span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="{{ route('machines.edit', $machine) }}" class="btn btn-primary">
                                    <i class="bx bxs-edit me-1"></i>{{ __('common.edit') }} {{ __('app.machine') }}
                                </a>
                <form action="{{ route('machines.destroy', $machine) }}" method="POST"
                                    class="d-inline ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger delete-button"
                                        data-url="{{ route('machines.destroy', $machine) }}">
                                        <i class="bx bx-trash me-1"></i>{{ __('common.delete') }} {{ __('app.machine') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    {{-- @if ($machine->bladderTransactions->count() > 0)
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Transactions</h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Bladder</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($machine->bladderTransactions->take(10) as $transaction)
                                        <tr>
                                            <td>
                                                <span
                                                    class="badge bg-{{ $transaction->TransactionType === 'Install' ? 'success' : ($transaction->TransactionType === 'Remove' ? 'warning' : 'info') }}">
                                                    {{ $transaction->TransactionType }}
                                                </span>
                                            </td>                                            <td>{{ $transaction->bladder->BladderCode ?? __('common.not_available') }}</td>
                                            <td>{{ $transaction->created_at ? $transaction->created_at->format('Y-m-d H:i') : __('common.not_available') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if ($machine->bladderTransactions->count() > 10)
                            <small class="text-muted">Showing 10 most recent transactions</small>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif --}}    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Direct event listener on delete buttons
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const deleteUrl = this.getAttribute('data-url');
                    const isDarkMode = window.matchMedia && window.matchMedia(
                        '(prefers-color-scheme: dark)').matches;                    Swal.fire({
                        title: '{{ __("common.are_you_sure") }}',
                        text: '{{ __("common.delete_confirm_text") }}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '{{ __("common.yes_delete") }}',
                        cancelButtonText: '{{ __("common.cancel") }}',
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
