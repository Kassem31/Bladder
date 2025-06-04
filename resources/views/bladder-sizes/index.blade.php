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
                        <li class="breadcrumb-item"><a href="#">{{ __('app.bladder_sizes') }}</a></li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <x-add-button model="bladder-sizes" name="bladder size" />

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <form method="GET" action="{{ route('bladder-sizes.index') }}" class="mb-3">
                            <div class="row">
                                <div class="col-md-4 col-12 filter-column">
                                    <input type="text" name="Name" class="form-control"
                                        placeholder="{{ __('app.filter_by_name') }}" value="{{ request('Name') }}">
                                </div>
                                <div class="col-md-4 col-12 d-flex">
                                    <x-filter-button />
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.name') }}</th>
                                        <th class="text-center no-sort">{{ __('common.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bladderSizes as $bladderSize)
                                        <tr>
                                            <td data-th="Name">{{ $bladderSize->Name }}</td>
                                            <td class="text-center" data-th="Actions">
                                                <div class="d-flex flex-wrap justify-content-center button-group gap-1">
                                                    <!-- Show Button -->
                                                    <x-show-button route="bladder-sizes.show" :param="$bladderSize->Id"
                                                        name="bladder_size" />
                                                    <!-- Edit Button -->
                                                    <x-edit-button route="bladder-sizes.edit" :param="$bladderSize->Id"
                                                        name="bladder_size" />
                                                    <!-- Delete Button -->
                                                    <div style="margin-top: 0.07rem">
                                                        <x-delete-button route="bladder-sizes.destroy" :param="$bladderSize->Id"
                                                            name="bladder_size" />
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
                            {{ $bladderSizes->links() }}
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
    {{--     {{-- <script src="{{ asset('src/plugins/src/table/datatable/extensions/responsive/responsive.min.js') }}"></script> --}}
    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    {{-- {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}

    {{-- <script>
        document.querySelector('.widget-content .mixin').addEventListener('click', function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
            })
        })
    </script> --}}

    <script>
        document.querySelector('table').addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-button')) {
                const deleteUrl = e.target.getAttribute('data-url');
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;                Swal.fire({
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
