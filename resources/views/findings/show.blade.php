@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('src/plugins/src/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('app.observation_details') }}</h3>
            </div>

                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <div class="card-body p-5">
                            <hr>                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">{{ __('app.icon') }}:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @if ($finding->IconClass)
                                        <i class="{{ $finding->IconClass }}"
                                            style="font-size: 1.8rem; margin-right: 0.5rem; color: #0d6efd;"></i>
                                    @else
                                        <span class="text-muted">{{ __('app.no_icon') }}</span>
                                    @endif
                                </div>
                            </div>                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">{{ __('common.description') }}:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $finding->Description }}
                                </div>
                            </div>                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ route('findings.index') }}" class="btn btn-secondary me-2">
                                        <i class="bx bx-arrow-back"></i> {{ __('common.back_to_list') }}
                                    </a>
                                    <a href="{{ route('findings.edit', $finding->Id) }}" class="btn btn-warning me-2">
                                        <i class="bx bx-edit"></i> {{ __('common.edit') }}
                                    </a><form action="{{ route('findings.destroy', $finding->Id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')                                        <button type="button" class="btn btn-danger delete-button"
                                            data-url="{{ route('findings.destroy', $finding->Id) }}">
                                            <i class="bx bx-trash"></i> {{ __('common.delete') }}
                                        </button>
                                    </form>
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
    {{-- <script src="{{ asset('src/assets/js/scrollspyNav.js') }}"></script> --}}
    <script src="{{ asset('src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    {{-- <script src="{{ asset('src/plugins/src/sweetalerts2/custom-sweetalert.js') }}"></script> --}}
    <script>
        feather.replace();

        document.addEventListener('DOMContentLoaded', function() {
            // Direct event listener on delete buttons
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const deleteUrl = this.getAttribute('data-url');
                    const isDarkMode = window.matchMedia && window.matchMedia(
                        '(prefers-color-scheme: dark)').matches;                    Swal.fire({
                        title: '{{ __("common.are_you_sure") }}',
                        text: "{{ __('common.delete_confirm_text') }}",
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
