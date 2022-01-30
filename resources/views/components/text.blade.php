@php
    $tag    = 'p';
    $inline = false;
    $value  = $attributes['value'];
    $class  = $attributes['class'];

    if($attributes['href']) $tag = 'a';
    if($attributes['inline']) $inline = true;
    if(!$inline) $attributes['class'] = "d-block $class";

    unset(
        $attributes['inline'],
        $attributes['value'],
    );
@endphp

<{{ $tag }} {{ $attributes }}>
    {{ $value ?? $slot }}
</{{ $tag }}>