@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('src_rtl/assets/img/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src_rtl/assets/img/bootstrap-icons/bootstrap-icons.min.css') }}">    <style>
        .icon-select-container {
            position: relative;
        }

        .icon-select-dropdown {
            display: none;
            position: absolute;
            width: 100%;
            max-height: 400px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            background: white;
            z-index: 1000;
            margin-top: 2px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .icon-select-dropdown.show {
            display: block;
        }

        .icon-search-container {
            padding: 12px;
            border-bottom: 1px solid #e9ecef;
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }

        .icon-search-container input {
            padding-right: 35px;
        }

        .search-icon {
            position: absolute;
            right: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            cursor: pointer;
        }

        .icon-grid-container {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 6px;
        }

        .icon-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 8px 4px;
            cursor: pointer;
            border-radius: 0.375rem;
            border: 1px solid transparent;
            transition: all 0.2s ease;
            text-align: center;
            min-height: 60px;
        }

        .icon-option:hover {
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }

        .icon-option.selected {
            background-color: #e7f3ff;
            border-color: #0d6efd;
        }

        .icon-option.hidden {
            display: none !important;
        }

        .icon-name {
            font-size: 0.7rem;
            margin-top: 4px;
            color: #6c757d;
            word-break: break-word;
            line-height: 1.2;
        }

        .icon-option i {
            margin-bottom: 2px;
        }

        /* Scrollbar styling */
        .icon-grid-container::-webkit-scrollbar {
            width: 6px;
        }

        .icon-grid-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .icon-grid-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .icon-grid-container::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="page-title">
                <h3>{{ __('common.add') }} {{ __('app.finding') }}</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <div class="card-body p-5">
                        <hr>

                        <form action="{{ route('findings.store') }}" method="POST" class="row g-3">
                            @csrf <div class="col-md-6">
                                <label for="IconClass" class="form-label">{{ __('app.icon') }}</label>
                                <div class="icon-select-container">
                                    <input type="hidden" id="IconClass" name="IconClass" value="{{ old('IconClass') }}"
                                        class="@error('IconClass') is-invalid @enderror">
                                    <div class="form-control d-flex align-items-center" id="iconSelectToggle">
                                        <span id="selectedIconDisplay">
                                            @if (old('IconClass'))
                                                <i class="{{ old('IconClass') }}"
                                                    style="font-size: 1.2rem; color: #0d6efd;"></i>
                                            @else
                                                <span class="text-muted">{{ __('app.select_icon') }}</span>
                                            @endif
                                        </span>
                                        <i class="bx bx-chevron-down ms-auto"></i>
                                    </div>                                    @include('findings.partials.icon-picker')
                                </div>
                                @error('IconClass')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="Description" class="form-label">{{ __('app.observation_details') }} *</label>
                                <input type="text" class="form-control @error('Description') is-invalid @enderror"
                                    id="Description" name="Description" value="{{ old('Description') }}"
                                    placeholder="{{ __('app.enter_finding_description') }}" required>
                                @error('Description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12"> <button type="submit" class="btn btn-primary px-5">
                                    <i class="bx bx-save me-1"></i>{{ __('common.save') }} {{ __('app.finding') }}
                                </button>
                                <a href="{{ route('findings.index') }}" class="btn btn-secondary px-5 ms-2">
                                    <i class="bx bx-x me-1"></i>{{ __('common.cancel') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iconClassInput = document.getElementById('IconClass');
            const iconSelectToggle = document.getElementById('iconSelectToggle');
            const iconSelectDropdown = document.getElementById('iconSelectDropdown');
            const selectedIconDisplay = document.getElementById('selectedIconDisplay');
            const iconSearchInput = document.getElementById('iconSearchInput');
            const searchIcon = document.querySelector('.search-icon');
            const iconOptions = document.querySelectorAll('.icon-option');

            // Create preview container
            const previewContainer = document.createElement('div');
            previewContainer.className = 'mt-2 p-2 rounded';
            previewContainer.style.minHeight = '60px';
            iconClassInput.parentNode.insertBefore(previewContainer, null);

            // Initial preview
            updatePreview();

            // Toggle dropdown when clicking the select box
            iconSelectToggle.addEventListener('click', function() {
                iconSelectDropdown.classList.toggle('show');
                if (iconSelectDropdown.classList.contains('show')) {
                    setTimeout(() => iconSearchInput.focus(), 100);
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!iconSelectToggle.contains(event.target) && !iconSelectDropdown.contains(event.target)) {
                    iconSelectDropdown.classList.remove('show');
                }
            });

            // Search functionality
            iconSearchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                let visibleCount = 0;
                
                iconOptions.forEach(option => {
                    const searchData = option.getAttribute('data-search');
                    if (!searchData) return; // Skip the "None" option
                    
                    if (searchData.toLowerCase().includes(searchTerm)) {
                        option.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        option.classList.add('hidden');
                    }
                });

                // Show message if no icons found
                const gridContainer = document.getElementById('iconGridContainer');
                let noResultsMsg = gridContainer.querySelector('.no-results-message');
                
                if (visibleCount === 0 && searchTerm.length > 0) {
                    if (!noResultsMsg) {
                        noResultsMsg = document.createElement('div');
                        noResultsMsg.className = 'no-results-message text-center text-muted p-4';
                        noResultsMsg.innerHTML = '<i class="bi bi-search"></i><br>No icons found matching "' + searchTerm + '"';
                        gridContainer.appendChild(noResultsMsg);
                    }
                    noResultsMsg.style.display = 'block';
                } else if (noResultsMsg) {
                    noResultsMsg.style.display = 'none';
                }
            });

            // Clear search functionality
            searchIcon.addEventListener('click', function() {
                iconSearchInput.value = '';
                iconOptions.forEach(option => {
                    option.classList.remove('hidden');
                });
                const noResultsMsg = document.querySelector('.no-results-message');
                if (noResultsMsg) {
                    noResultsMsg.style.display = 'none';
                }
                iconSearchInput.focus();
            });

            // Handle Enter key in search
            iconSearchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    // Select first visible icon
                    const firstVisible = document.querySelector('.icon-option:not(.hidden)[data-search]');
                    if (firstVisible) {
                        firstVisible.click();
                    }
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
                            '<span class="text-muted">{{ __('app.select_icon') }}</span>';
                    }

                    // Update visual selection
                    iconOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');

                    // Close dropdown
                    iconSelectDropdown.classList.remove('show');

                    // Update preview
                    updatePreview();

                    // Clear search
                    iconSearchInput.value = '';
                    iconOptions.forEach(opt => opt.classList.remove('hidden'));
                });
            });

            function updatePreview() {
                const selectedValue = iconClassInput.value;
                if (selectedValue) {
                    previewContainer.innerHTML =
                        `<div class="text-center"><i class="${selectedValue}" style="font-size: 2rem; color: #0d6efd;"></i><br><small class="text-muted">${selectedValue}</small></div>`;
                } else {
                    previewContainer.innerHTML = '<div class="text-center text-muted">{{ __('app.icon_preview_will_appear_here') }}</div>';
                }
            }
        });
    </script>
@endsection
