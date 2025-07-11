@extends('layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout top-spacing">
            <div class="page-title">
                <h3>{{ __('common.edit') }} {{ __('app.role') }}</h3>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">{{ __('common.name') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ $role->name }}">
                        </div>

                        <div class="form-group">
                            <label for="display_name">{{ __('common.display_name') }}</label>
                            <input type="text" name="display_name" class="form-control"
                                value="{{ $role->display_name }}">
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('common.description') }}</label>
                            <textarea name="description" class="form-control">{{ $role->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="permissions">{{ __('app.permissions') }}</label>
                            <div class="mb-3">
                                <button type="button" class="btn btn-sm btn-success" onclick="checkAllPermissions()">
                                    <i class="fas fa-check-square"></i> {{ __('app.check_all') }}
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="clearAllPermissions()">
                                    <i class="fas fa-square"></i> {{ __('app.clear_all') }}
                                </button>
                            </div>
                            @foreach ($permissions as $model => $modelPermissions)
                                <div class="card mb-3 col-md-8">
                                    <div class="card-header">
                                        {{ ucfirst($model) }} {{ __('app.permissions') }}
                                    </div>
                                    <div class="card-body">
                                        @foreach ($modelPermissions as $permission)
                                            <div class="form-check">
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                                    class="form-check-input permission-checkbox"
                                                    {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                                                <label class="form-check-label">{{ $permission->display_name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('common.save') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        function checkAllPermissions() {
            const checkboxes = document.querySelectorAll('.permission-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = true;
            });
        }

        function clearAllPermissions() {
            const checkboxes = document.querySelectorAll('.permission-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        }
    </script>
@endsection
