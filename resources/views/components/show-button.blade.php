@permission('show_' . $name)
    <a href="{{ route($route, $param) }}" class="btn btn-info btn-sm" title="{{ __('common.show') }} {{ ucfirst($name) }}">
                {{ __('common.show') }}
    </a>
@endpermission
