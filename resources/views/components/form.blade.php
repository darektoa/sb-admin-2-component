<form  action="{{ $action }}" method="{{ $isGet ? 'GET' : 'POST' }}" {{ $attributes }}>
    @if(!$isGet) @method($method) @endif
    @csrf

    {{ $slot }}
</form>