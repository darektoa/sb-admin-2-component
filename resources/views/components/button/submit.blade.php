@php
    $class  = $attributes['class'];
    $color  = $attributes['color'] ?? 'primary';
    $value  = $attributes['value'];
    
    if($color) $attributes['class'] = "btn btn-$color";

    unset(
        $attributes['color'],
        $attributes['value'],
    );
@endphp

<div class="form-group">
    <button type="submit" {{ $attributes }}>
        {{ $value }}
    </button>
</div>