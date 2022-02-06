@php
    $tag    = 'p';
    $inline = false;
    $value  = $attributes['value'];
    $class  = $attributes['class'];
    $bold   = $attributes['bold'];

    if($attributes['href']) $tag = 'a';
    if($attributes['inline']) $inline = true;
    if(!$inline) $attributes['class'] = "d-block $class";
    if($bold) $attributes['class'] .= ' font-weight-bold';

    unset(
        $attributes['inline'],
        $attributes['value'],
        $attributes['bold'],
    );
@endphp

<{{ $tag }} {{ $attributes }}>
    {{ $value ?? $slot }}
</{{ $tag }}>