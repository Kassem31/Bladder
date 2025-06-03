@permission('edit_' . $name)
    <a href="{{ route($route, $param) }}" class="btn btn-warning btn-sm"
        title="{{ __('common.edit') }} {{ ucfirst($name) }}">
        {{ __('common.edit') }}
    </a>
@endpermission
