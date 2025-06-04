@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('src/plugins/src/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">

    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/src/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('src/plugins/src/table/datatable/extensions/responsive/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/responsive-table.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/filter-column.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <!-- RTL Support -->
    <link href="{{ asset('src/assets/css/rtl-support.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{ __('app.findings') }}</a></li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <x-add-button model="findings" name="finding" displayName="observation"/>

                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <form method="GET" action="{{ route('findings.index') }}" class="mb-3">
                            <div class="row">
                                <div class="col-md-4 col-12 filter-column">
                                    <input type="text" name="Description" class="form-control" placeholder = "{{ __('app.filter_by_description') }}"
                                        value="{{ request('Description') }}">
                                </div>
                                <div class="col-md-4 col-12 d-flex">
                                    <x-filter-button />
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">                            <table id="findingsTable" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('app.icon') }}</th>
                                        <th>{{ __('common.description') }}</th>
                                        <th class="text-center no-sort">{{ __('common.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($findings as $finding)
                                        <tr>
                                            <td class="text-center" data-th="Icon">
                                                @if ($finding->IconClass)
                                                    <i class="{{ $finding->IconClass }}"
                                                        style="font-size: 1.5rem; color: #0d6efd;"></i>                                                @else
                                                    <span class="text-muted">{{ __('app.no_icon') }}</span>
                                                @endif
                                            </td>
                                            <td data-th="Description">{{ $finding->Description }}</td>
                                            <td class="text-center" data-th="Actions">
                                                <div class="d-flex flex-wrap justify-content-center button-group gap-1">
                                                    <x-show-button route="findings.show" :param="$finding->Id" name="finding" />
                                                    <x-edit-button route="findings.edit" :param="$finding->Id" name="finding" />
                                                    <div style="margin-top: 0.07rem">
                                                        <x-delete-button route="findings.destroy" :param="$finding->Id" name="finding" />
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
                            {{ $findings->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')    
    {{-- <script src="{{ asset('src/assets/js/scrollspyNav.js') }}"></script> --}}
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
            });            // Submit the form to clear filters
            form.submit();
        }

        // RTL/LTR handling function
        function updateDirection() {
            const currentLocale = document.documentElement.lang;
            const direction = currentLocale === 'ar' ? 'rtl' : 'ltr';
            
            // Update document direction
            document.documentElement.dir = direction;
            document.body.dir = direction;
            
            // Update table direction
            const table = document.querySelector('#zero-config');
            if (table) {
                table.style.direction = direction;
            }
            
            // Reinitialize DataTable if it exists
            if (typeof $.fn.DataTable !== 'undefined') {
                const dataTable = $('#zero-config').DataTable();
                if (dataTable) {
                    dataTable.destroy();
                    initializeDataTable();
                }
            }
        }

        // Initialize DataTable with RTL support
        function initializeDataTable() {
            const isRTL = document.documentElement.dir === 'rtl';
            
            $('#zero-config').DataTable({
                responsive: true,
                language: {
                    search: isRTL ? "بحث:" : "Search:",
                    lengthMenu: isRTL ? "عرض _MENU_ عنصر" : "Show _MENU_ entries",
                    info: isRTL ? "عرض _START_ إلى _END_ من _TOTAL_ عنصر" : "Showing _START_ to _END_ of _TOTAL_ entries",
                    infoEmpty: isRTL ? "عرض 0 إلى 0 من 0 عنصر" : "Showing 0 to 0 of 0 entries",
                    infoFiltered: isRTL ? "(مرشح من _MAX_ إجمالي العناصر)" : "(filtered from _MAX_ total entries)",
                    paginate: {
                        first: isRTL ? "الأول" : "First",
                        last: isRTL ? "الأخير" : "Last",
                        next: isRTL ? "التالي" : "Next",
                        previous: isRTL ? "السابق" : "Previous"
                    },
                    emptyTable: isRTL ? "لا توجد بيانات متاحة في الجدول" : "No data available in table"
                },
                columnDefs: [
                    {
                        targets: 'no-sort',
                        orderable: false
                    }
                ],
                order: [[0, 'asc']],
                pageLength: 10,
                dom: 'frtip'
            });
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDirection();
            
            // Listen for language changes (if you have a language switcher)
            document.addEventListener('languageChanged', function() {
                updateDirection();
            });
        });
    </script>

    <script src="{{ asset('src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js') }}"></script>
    {{--     {{-- <script src="{{ asset('src/plugins/src/table/datatable/extensions/responsive/responsive.min.js') }}"></script> --}}
    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}

    <script>        document.querySelector('table').addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-button')) {
                const deleteUrl = e.target.getAttribute('data-url');
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                const isRTL = document.documentElement.dir === 'rtl';
                
                Swal.fire({
                    title: '{{ __("common.are_you_sure") }}',
                    text: '{{ __("common.delete_confirm_text") }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{ __("common.yes_delete") }}',
                    cancelButtonText: '{{ __("common.cancel") }}',
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000',
                    customClass: {
                        popup: isRTL ? 'swal2-rtl' : 'swal2-ltr',
                        title: isRTL ? 'swal2-title-rtl' : 'swal2-title-ltr',
                        content: isRTL ? 'swal2-content-rtl' : 'swal2-content-ltr'
                    }
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
        });    </script>

    @if (session('success'))        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                const isRTL = document.documentElement.dir === 'rtl';

                const ToastSuccess = Swal.mixin({
                    toast: true,
                    position: isRTL ? 'bottom-start' : 'bottom-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000',
                    customClass: {
                        popup: isRTL ? 'swal2-toast-rtl' : 'swal2-toast-ltr'
                    },
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

    @if (session('error'))        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                const isRTL = document.documentElement.dir === 'rtl';

                Swal.fire({
                    icon: 'error',
                    title: '{{ session('error') }}',
                    background: isDarkMode ? '#333' : '#fff',
                    color: isDarkMode ? '#fff' : '#000',
                    customClass: {
                        popup: isRTL ? 'swal2-rtl' : 'swal2-ltr'
                    }
                });
            });
        </script>
    @endif
@endsection
