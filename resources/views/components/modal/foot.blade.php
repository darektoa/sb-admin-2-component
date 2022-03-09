@php
    $class = $attributes['class'];
    $cross = $attributes['cross'];
    $main  = $attributes['main'];

    $attributes['class']             = "modal-footer $class";
    if($main) $attributes['class']  .= " justify-content-$main";
    if($cross) $attributes['class'] .= " align-items-$cross";
    
    unset(
        $attributes['main'],
        $attributes['cross'],
    );
@endphp

<div class="{{ $attributes['class'] }}" {{ $attributes }}>
   {{ $slot }}
</div>