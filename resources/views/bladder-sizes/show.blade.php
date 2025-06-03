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
                <h3>{{ __('app.bladder_size_details') }}</h3>
            </div>

                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <div class="card-body p-5">
                            <hr>
                            <div class="row mb-3">                                <div class="col-sm-3">
                                    <h6 class="mb-0">{{ __('common.name') }}:</h6>
                                </div>
                                <div class="col-sm-9 text-primary">
                                    {{ $bladderSize->Name }}
                                </div>
                            </div>

                            @if ($bladderSize->bladders->count() > 0)
                                <div class="row mb-3">                                <div class="col-sm-3">
                                        <h6 class="mb-0">{{ __('app.associated_bladders') }}:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <span class="badge bg-primary">{{ __('app.bladders_count', ['count' => $bladderSize->bladders->count()]) }}</span>
                                    </div>
                                </div>
                            @endif

                            <hr>
                            <div class="row">
                                <div class="col-sm-12">                                    <a href="{{ route('bladder-sizes.edit', $bladderSize->Id) }}" class="btn btn-primary">
                                        <i class="bx bx-edit me-1"></i>{{ __('common.edit') }}
                                    </a>                                    <a href="{{ route('bladder-sizes.index') }}" class="btn btn-secondary ms-2">
                                        <i class="bx bx-arrow-back me-1"></i>{{ __('common.back_to_list') }}
                                    </a><form action="{{ route('bladder-sizes.destroy', $bladderSize->Id) }}" method="POST"
                                        class="d-inline ms-2">
                                        @csrf
                                        @method('DELETE')                                        <button type="button" class="btn btn-danger delete-button"
                                            data-url="{{ route('bladder-sizes.destroy', $bladderSize->Id) }}">
                                            <i class="bx bx-trash me-1"></i>{{ __('common.delete') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
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
                        '(prefers-color-scheme: dark)').matches;                    Swal.fire({
                        title: '{{ __('common.confirm_delete') }}',
                        text: "{{ __('common.confirm_delete_message') }}",
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
                });
            });
        });
    </script>
@endsection
