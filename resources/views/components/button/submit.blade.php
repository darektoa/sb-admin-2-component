@php
    $class      = $attributes['class'];
    $color      = $attributes['color'] ?? 'primary';
    $value      = $attributes['value'];
    $outline    = $attributes['outline'];
    
    $attributes['class'] = "btn $class";

    if(!$outline) $attributes['class'] .= " btn-$color";
    if($outline) $attributes['class']  .= " btn-outline-$color";

    unset(
        $attributes['color'],
        $attributes['value'],
        $attributes['outline'],
    );
@endphp

<div class="form-group">
    <button type="submit" {{ $attributes }}>
        {{ $value }}
    </button>
</div>