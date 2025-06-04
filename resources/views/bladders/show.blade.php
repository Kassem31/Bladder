@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/filter-column.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    @if (app()->getLocale() === 'ar')
        <style>
            .rtl-content {
                direction: rtl;
                text-align: right;
            }

            .rtl-content .col-sm-3 h6 {
                text-align: left;
            }

            .rtl-content .btn {
                margin-left: 0;
                margin-right: 0.5rem;
            }

            .rtl-content .btn:first-child {
                margin-right: 0;
            }
        </style>
    @endif
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing {{ app()->getLocale() === 'ar' ? 'text-right' : '' }}">
            <div class="page-title">
                <h3>{{ __('app.bladder_details') }}</h3>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5 {{ app()->getLocale() === 'ar' ? 'rtl-content' : '' }}">
                        <hr>
                        <div class="row mb-3 {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.bladder_code') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $bladder->BladderCode }}
                            </div>
                        </div>
                        <div class="row mb-3 {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.bladder_size') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $bladder->bladderSize->Name ?? __('common.not_available') }}
                            </div>
                        </div>
                        <div class="row mb-3 {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('common.status') }}:</h6>
                            </div>                            <div class="col-sm-9 text-secondary"> <span
                                    class="badge bg-{{ $bladder->Status === 'available' ? 'success' : ($bladder->Status === 'in_use' ? 'warning' : 'danger') }}">
                                    {{ __('common.' . strtolower(str_replace(' ', '_', $bladder->Status))) }}
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3 {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.expiry_date') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($bladder->ExpiryDate)
                                    @if (app()->getLocale() == 'ar')
                                        {{ $bladder->ExpiryDate->locale('ar')->isoFormat('DD MMMM YYYY') }}
                                    @else
                                        {{ $bladder->ExpiryDate->format('F j, Y') }}
                                    @endif
                                    @if ($bladder->ExpiryDate->isPast())
                                        <span class="badge bg-danger ms-2">{{ __('common.expired') }}</span>
                                    @elseif($bladder->ExpiryDate->diffInDays() <= 30)
                                        <span class="badge bg-warning ms-2">{{ __('app.expiring_soon') }}</span>
                                    @endif
                                @else
                                    {{ __('common.not_available') }}
                                @endif
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{ __('app.expiry_notification') }}:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary"> <span
                                    class="badge bg-{{ $bladder->ExpiryNotificationSent ? 'success' : 'secondary' }}">
                                    {{ $bladder->ExpiryNotificationSent ? 'Sent' : 'Not Sent' }}
                                </span>
                            </div>
                        </div> --}}

                        {{-- @if ($bladder->bladderTransactions->count() > 0)
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
                                                <td>{{ $transaction->machine->Code ?? __('common.not_available') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($bladder->bladderTransactions->count() > 5)
                                    <small class="text-muted">Showing 5 most recent transactions</small>
                                @endif
                            </div>
                        @endif --}}

                        <hr>
                        <div class="row">
                            <div class="col-sm-12"> <a href="{{ route('bladders.edit', $bladder) }}"
                                    class="btn btn-primary">
                                    <i class="bx bx-edit me-1"></i>{{ __('common.edit') }}
                                </a>
                                <a href="{{ route('bladders.index') }}" class="btn btn-secondary ms-2">
                                    <i class="bx bx-arrow-back me-1"></i>{{ __('common.back_to_list') }}
                                </a>
                                <form action="{{ route('bladders.destroy', $bladder) }}" method="POST"
                                    class="d-inline ms-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger delete-button"
                                        data-url="{{ route('bladders.destroy', $bladder) }}">
                                        <i class="bx bx-trash me-1"></i>{{ __('common.delete') }}
                                    </button>
                                </form>
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
    {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}
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
                        title: "{{ __('common.are_you_sure') }}",
                        text: "{{ __('common.delete_confirm_text') }}",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: "{{ __('common.yes_delete') }}",
                        cancelButtonText: "{{ __('common.cancel') }}",
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
