@php
    $method = strtoupper($method);
    $isGet  = $method === 'GET';
    $method = $isGet ? 'GET' : 'POST';
@endphp

<form  action="{{ $action }}" method="{{ $method }}" {{ $attributes }}>
    @if(!$isGet) @method($method) @endif
    @csrf

    {{ $slot }}
</form>