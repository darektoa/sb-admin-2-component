@php
    $tag    = 'p';
    $inline = false;
    $value  = $attributes['value'];
    $class  = $attributes['class'];
    $italic = $attributes['italic'];
    $bold   = $attributes['bold'];

    if($attributes['href']) $tag        = 'a';
    if($attributes['inline']) $inline   = true;
    if(!$inline) $attributes['class']   = "d-block $class";
    if($italic) $attributes['class']   .= ' font-weight-bold';
    if($bold) $attributes['class']     .= ' font-italic';

    unset(
        $attributes['inline'],
        $attributes['value'],
        $attributes['italic'],
        $attributes['bold'],
    );
@endphp

<{{ $tag }} {{ $attributes }}>
    {{ $value ?? $slot }}
</{{ $tag }}>