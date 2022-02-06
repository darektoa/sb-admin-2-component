@php
    $tag            = 'p';
    $inline         = false;
    $value          = $attributes['value'];
    $class          = $attributes['class'];
    $italic         = $attributes['italic'];
    $bold           = $attributes['bold'];
    $underline      = $attributes['underline'];
    $strikethrough  = $attributes['strikethrough'];
    $decoration     = '';

    if($attributes['href']) $tag            = 'a';
    if($attributes['inline']) $inline       = true;
    if(!$inline) $attributes['class']       = "d-block $class";
    if($italic) $attributes['class']       .= ' font-weight-bold';
    if($bold) $attributes['class']         .= ' font-italic';
    if($underline) $decoration             .= ' underline';
    if($strikethrough) $decoration         .= ' line-through';
    if($decoration) $attributes['style']    = "text-decoration:$decoration";

    unset(
        $attributes['inline'],
        $attributes['value'],
        $attributes['italic'],
        $attributes['bold'],
        $attributes['underline'],
    );
@endphp

<{{ $tag }} {{ $attributes }}>
    {{ $value ?? $slot }}
</{{ $tag }}>