@php
    $method = strtoupper($method);
    $isGet  = $method === 'GET';
    $method = $isGet ? 'GET' : 'POST';
    $inline = $attributes['inline'];

    if($inline) $attributes['class'] .= ' form-inline';

    unset(
        $attributes['inline'],
    );
@endphp

<form  action="{{ $action }}" method="{{ $method }}" {{ $attributes }}>
    @if(!$isGet) 
        @method($method) 
        @csrf
    @endif

    {{ $slot }}
</form>