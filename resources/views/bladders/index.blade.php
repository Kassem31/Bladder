@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/src/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('src/plugins/src/table/datatable/extensions/responsive/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/responsive-table.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/filter-column.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0"> <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ __('app.bladders') }}</a></li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <x-add-button model="bladders" name="bladder" />

                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <form method="GET" action="{{ route('bladders.index') }}" class="mb-3">
                            <div class="row">
                                <div class="col-md-3 col-12 filter-column">
                                    <input type="text" name="BladderCode" class="form-control"
                                        placeholder="{{ __('app.filter_by_bladder_code') }}"
                                        value="{{ request('BladderCode') }}">
                                </div>
                                <div class="col-md-3 col-12 filter-column">
                                    <select name="BladderSizeId" class="form-control">
                                        <option value="">{{ __('app.all_bladder_sizes') }}</option>
                                        @foreach ($bladderSizes as $size)
                                            <option value="{{ $size->Id }}"
                                                {{ request('BladderSizeId') == $size->Id ? 'selected' : '' }}>
                                                {{ $size->Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 col-12 filter-column">
                                    <select name="Status" class="form-control">
                                        <option value="">{{ __('app.all_statuses') }}</option>
                                        <option value="Ready" {{ request('Status') == 'Ready' ? 'selected' : '' }}>
                                            {{ __('common.ready') }}
                                        </option>
                                        <option value="Maintenance"
                                            {{ request('Status') == 'Maintenance' ? 'selected' : '' }}>
                                            {{ __('common.maintenance') }}</option>
                                        <option value="Mounted" {{ request('Status') == 'Mounted' ? 'selected' : '' }}>
                                            {{ __('common.mounted') }}</option>
                                        <option value="test" {{ request('Status') == 'test' ? 'selected' : '' }}>
                                            {{ __('app.test') }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 col-5 filter-column">
                                    <label for="ExpiryDateFrom"
                                        class="form-label text-muted small">{{ __('app.expiry_date') }}
                                        {{ __('app.transaction_date_from') }}</label>
                                    <input type="date" name="ExpiryDateFrom" class="form-control"
                                        value="{{ request('ExpiryDateFrom') }}">
                                </div>
                                <div class="col-md-5 col-5 filter-column">
                                    <label for="ExpiryDateTo"
                                        class="form-label text-muted small">{{ __('app.expiry_date') }}
                                        {{ __('app.transaction_date_to') }}</label>
                                    <input type="date" name="ExpiryDateTo" class="form-control"
                                        value="{{ request('ExpiryDateTo') }}">
                                </div>
                            </div>
                            <div class="col-md-3 col-12 d-flex gap-2 mb-3" style="margin-left: 0.5rem;">
                                <x-filter-button />
                                <x-clear-filter-button />
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table id="bladdersTable" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('app.bladder_code') }}</th>
                                        <th>{{ __('app.bladder_size') }}</th>
                                        <th>{{ __('app.expiry_date') }}</th>
                                        <th>{{ __('common.status') }}</th>
                                        <th class="text-center no-sort">{{ __('common.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bladders as $bladder)
                                        <tr>
                                            <td data-th="Bladder Code">{{ $bladder->BladderCode }}</td>
                                            <td data-th="Bladder Size">{{ $bladder->bladderSize->Name ?? __('common.not_available') }}</td>
                                            <td data-th="Expiry Date">
                                                @if ($bladder->ExpiryDate)
                                                    {{ $bladder->ExpiryDate->format('Y-m-d') }}
                                                    @if ($bladder->ExpiryDate->isPast())
                                                        <span
                                                            class="badge bg-danger ms-1">{{ __('common.expired') }}</span>
                                                    @elseif($bladder->ExpiryDate->diffInDays() <= 30)
                                                        <span
                                                            class="badge bg-warning ms-1">{{ __('app.expiring_soon') }}</span>
                                                    @endif                                                @else
                                                    {{ __('common.not_available') }}
                                                @endif
                                            </td>                                            <td data-th="Status">
                                                <span
                                                    class="badge bg-{{ $bladder->Status === 'available' ? 'success' : ($bladder->Status === 'in_use' ? 'warning' : 'danger') }}">
                                                    {{ __('common.' . strtolower(str_replace(' ', '_', $bladder->Status))) }}
                                                </span>
                                            </td>
                                            <td class="text-center" data-th="Actions">
                                                <div class="d-flex flex-wrap justify-content-center button-group gap-1">
                                                    <x-show-button route="bladders.show" :param="$bladder->Id"
                                                        name="bladder" />
                                                    <x-edit-button route="bladders.edit" :param="$bladder->Id"
                                                        name="bladder" />
                                                    <div style="margin-top: 0.07rem">
                                                        <x-delete-button route="bladders.destroy" :param="$bladder->Id"
                                                            name="bladder" />
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {{ $bladders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Clear all filters function
        function clearFilters() {
            // Get the form
            const form = document.querySelector('form[method="GET"]');

            // Clear all form inputs
            const inputs = form.querySelectorAll('input, select');
            inputs.forEach(input => {
                if (input.type === 'text' || input.type === 'date') {
                    input.value = '';
                } else if (input.tagName === 'SELECT') {
                    input.selectedIndex = 0;
                }
            });

            // Submit the form to clear filters
            form.submit();
        }
    </script>

    <script src="{{ asset('src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/table/datatable/extensions/responsive/responsive.min.js') }}"></script> --}}

    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}

    <script>
        document.querySelector('table').addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-button')) {
                const deleteUrl = e.target.getAttribute('data-url');
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                Swal.fire({
                    title: '{{ __('common.are_you_sure') }}',
                    text: '{{ __('common.delete_confirm_text') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{ __('common.yes_delete') }}',
                    cancelButtonText: '{{ __('common.cancel') }}',
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
            }
        });
    </script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

                const ToastSuccess = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000',
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                ToastSuccess.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });

                // Listen for theme changes to update toast colors
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(event) {
                    const newColorScheme = event.matches ? 'dark' : 'light';
                    Swal.update({
                        background: newColorScheme === 'dark' ? '#333' : '#fff',
                        color: newColorScheme === 'dark' ? '#fff' : '#000'
                    });
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

                Swal.fire({
                    icon: 'error',
                    title: '{{ session('error') }}',
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000'
                });
            });
        </script>
    @endif
@endsection
