@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('src/plugins/src/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">
    <style>
        .icon-select-container {
            position: relative;
        }

        .icon-select-dropdown {
            display: none;
            position: absolute;
            width: 100%;
            max-height: 250px;
            overflow-y: auto;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            background: white;
            z-index: 1000;
            margin-top: 2px;
        }

        .icon-select-dropdown.show {
            display: block;
        }

        .icon-option {
            padding: 8px 12px;
            cursor: pointer;
            display: inline-block;
            width: 60px;
            text-align: center;
            margin: 4px;
            border-radius: 4px;
        }

        .icon-option:hover {
            background-color: #f8f9fa;
        }

        .icon-option.selected {
            background-color: #e9ecef;
        }
    </style>
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>Add New Observation</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <form action="{{ route('findings.store') }}" method="POST" class="row g-3">
                            @csrf <div class="col-md-6">
                                <label for="IconClass" class="form-label">Icon</label>
                                <div class="icon-select-container">
                                    <input type="hidden" id="IconClass" name="IconClass" value="{{ old('IconClass') }}"
                                        class="@error('IconClass') is-invalid @enderror">
                                    <div class="form-control d-flex align-items-center" id="iconSelectToggle">
                                        <span id="selectedIconDisplay">
                                            @if (old('IconClass'))
                                                <i class="{{ old('IconClass') }}"
                                                    style="font-size: 1.2rem; color: #0d6efd;"></i>
                                            @else
                                                <span class="text-muted">Select an icon...</span>
                                            @endif
                                        </span>
                                        <i class="bx bx-chevron-down ms-auto"></i>
                                    </div>
                                    <div class="icon-select-dropdown" id="iconSelectDropdown">
                                        <div class="icon-option" data-value="">
                                            <span class="text-muted">None</span>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-address-book' ? 'selected' : '' }}"
                                            data-value="far fa-address-book">
                                            <i class="far fa-address-book" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-bell' ? 'selected' : '' }}"
                                            data-value="far fa-bell">
                                            <i class="far fa-bell" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-bookmark' ? 'selected' : '' }}"
                                            data-value="far fa-bookmark">
                                            <i class="far fa-bookmark" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-calendar' ? 'selected' : '' }}"
                                            data-value="far fa-calendar">
                                            <i class="far fa-calendar" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-chart-bar' ? 'selected' : '' }}"
                                            data-value="far fa-chart-bar">
                                            <i class="far fa-chart-bar" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-clipboard' ? 'selected' : '' }}"
                                            data-value="far fa-clipboard">
                                            <i class="far fa-clipboard" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-clone' ? 'selected' : '' }}"
                                            data-value="far fa-clone">
                                            <i class="far fa-clone" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-comment-dots' ? 'selected' : '' }}"
                                            data-value="far fa-comment-dots">
                                            <i class="far fa-comment-dots" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-compass' ? 'selected' : '' }}"
                                            data-value="far fa-compass">
                                            <i class="far fa-compass" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-copy' ? 'selected' : '' }}"
                                            data-value="far fa-copy">
                                            <i class="far fa-copy" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-edit' ? 'selected' : '' }}"
                                            data-value="far fa-edit">
                                            <i class="far fa-edit" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-envelope' ? 'selected' : '' }}"
                                            data-value="far fa-envelope">
                                            <i class="far fa-envelope" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-eye' ? 'selected' : '' }}"
                                            data-value="far fa-eye">
                                            <i class="far fa-eye" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-file' ? 'selected' : '' }}"
                                            data-value="far fa-file">
                                            <i class="far fa-file" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-flag' ? 'selected' : '' }}"
                                            data-value="far fa-flag">
                                            <i class="far fa-flag" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-folder' ? 'selected' : '' }}"
                                            data-value="far fa-folder">
                                            <i class="far fa-folder" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-gem' ? 'selected' : '' }}"
                                            data-value="far fa-gem">
                                            <i class="far fa-gem" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-heart' ? 'selected' : '' }}"
                                            data-value="far fa-heart">
                                            <i class="far fa-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-image' ? 'selected' : '' }}"
                                            data-value="far fa-image">
                                            <i class="far fa-image" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-map' ? 'selected' : '' }}"
                                            data-value="far fa-map">
                                            <i class="far fa-map" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-paper-plane' ? 'selected' : '' }}"
                                            data-value="far fa-paper-plane">
                                            <i class="far fa-paper-plane" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-save' ? 'selected' : '' }}"
                                            data-value="far fa-save">
                                            <i class="far fa-save" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-smile' ? 'selected' : '' }}"
                                            data-value="far fa-smile">
                                            <i class="far fa-smile" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-star' ? 'selected' : '' }}"
                                            data-value="far fa-star">
                                            <i class="far fa-star" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-sticky-note' ? 'selected' : '' }}"
                                            data-value="far fa-sticky-note">
                                            <i class="far fa-sticky-note" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-times-circle' ? 'selected' : '' }}"
                                            data-value="far fa-times-circle">
                                            <i class="far fa-times-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-user' ? 'selected' : '' }}"
                                            data-value="far fa-user">
                                            <i class="far fa-user" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-trash-alt' ? 'selected' : '' }}"
                                            data-value="far fa-trash-alt">
                                            <i class="far fa-trash-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-registered' ? 'selected' : '' }}"
                                            data-value="far fa-registered">
                                            <i class="far fa-registered" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-keyboard' ? 'selected' : '' }}"
                                            data-value="far fa-keyboard">
                                            <i class="far fa-keyboard" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-hourglass' ? 'selected' : '' }}"
                                            data-value="far fa-hourglass">
                                            <i class="far fa-hourglass" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-dot-circle' ? 'selected' : '' }}"
                                            data-value="far fa-dot-circle">
                                            <i class="far fa-dot-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-copyright' ? 'selected' : '' }}"
                                            data-value="far fa-copyright">
                                            <i class="far fa-copyright" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-clock' ? 'selected' : '' }}"
                                            data-value="far fa-clock">
                                            <i class="far fa-clock" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-building' ? 'selected' : '' }}"
                                            data-value="far fa-building">
                                            <i class="far fa-building" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-file-code' ? 'selected' : '' }}"
                                            data-value="far fa-file-code">
                                            <i class="far fa-file-code" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-hdd' ? 'selected' : '' }}"
                                            data-value="far fa-hdd">
                                            <i class="far fa-hdd" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-life-ring' ? 'selected' : '' }}"
                                            data-value="far fa-life-ring">
                                            <i class="far fa-life-ring" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-money-bill-alt' ? 'selected' : '' }}"
                                            data-value="far fa-money-bill-alt">
                                            <i class="far fa-money-bill-alt"
                                                style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-lightbulb' ? 'selected' : '' }}"
                                            data-value="far fa-lightbulb">
                                            <i class="far fa-lightbulb" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-question-circle' ? 'selected' : '' }}"
                                            data-value="far fa-question-circle">
                                            <i class="far fa-question-circle"
                                                style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-square' ? 'selected' : '' }}"
                                            data-value="far fa-square">
                                            <i class="far fa-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-list-alt' ? 'selected' : '' }}"
                                            data-value="far fa-list-alt">
                                            <i class="far fa-list-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                        <div class="icon-option {{ old('IconClass') == 'far fa-thumbs-up' ? 'selected' : '' }}"
                                            data-value="far fa-thumbs-up">
                                            <i class="far fa-thumbs-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>
                                    </div>
                                </div>
                                @error('IconClass')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="Description" class="form-label">Description *</label>
                                <input type="text" class="form-control @error('Description') is-invalid @enderror"
                                    id="Description" name="Description" value="{{ old('Description') }}"
                                    placeholder="Enter finding description" required>
                                @error('Description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>Save Finding
                                </button>
                                <a href="{{ route('findings.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-x me-1"></i>Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iconClassInput = document.getElementById('IconClass');
            const iconSelectToggle = document.getElementById('iconSelectToggle');
            const iconSelectDropdown = document.getElementById('iconSelectDropdown');
            const selectedIconDisplay = document.getElementById('selectedIconDisplay');
            const iconOptions = document.querySelectorAll('.icon-option');

            // Create preview container
            const previewContainer = document.createElement('div');
            previewContainer.className = 'mt-2 p-2 rounded';
            previewContainer.style.minHeight = '60px';
            previewContainer.innerHTML = '<span class="text-muted">Icon preview will appear here</span>';
            iconClassInput.parentNode.insertBefore(previewContainer, null);

            // Initial preview
            updatePreview();

            // Toggle dropdown when clicking the select box
            iconSelectToggle.addEventListener('click', function() {
                iconSelectDropdown.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!iconSelectToggle.contains(event.target) && !iconSelectDropdown.contains(event
                        .target)) {
                    iconSelectDropdown.classList.remove('show');
                }
            });

            // Handle selection of an icon
            iconOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    iconClassInput.value = value;

                    // Update the displayed icon
                    if (value) {
                        selectedIconDisplay.innerHTML =
                            `<i class="${value}" style="font-size: 1.2rem; color: #0d6efd;"></i>`;
                    } else {
                        selectedIconDisplay.innerHTML =
                            '<span class="text-muted">Select an icon...</span>';
                    }

                    // Update visual selection
                    iconOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');

                    // Close dropdown
                    iconSelectDropdown.classList.remove('show');

                    // Update preview
                    updatePreview();
                });
            });

            function updatePreview() {
                const selectedValue = iconClassInput.value;
                if (selectedValue) {
                    previewContainer.innerHTML =
                        `<i class="${selectedValue}" style="font-size: 2rem; color: #0d6efd;"></i>`;
                } else {
                    previewContainer.innerHTML = '<span class="text-muted">Select an icon to preview</span>';
                }
            }
        });
    </script>
@endsection
