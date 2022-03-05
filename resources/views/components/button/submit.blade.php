@php
    use Illuminate\View\ComponentAttributeBag;

    $class      = $attributes['class'];
    $block      = $attributes['block'];
    $color      = $attributes['color'] ?? 'primary';
    $value      = $attributes['value'];
    $outline    = $attributes['outline'];
    $wrapper    = new ComponentAttributeBag();
    
    $attributes['class'] = "btn $class";

    if(!$outline) $attributes['class'] .= " btn-$color";
    if($outline) $attributes['class']  .= " btn-outline-$color";
    if($block) $wrapper['class']        = "d-grid";

    unset(
        $attributes['color'],
        $attributes['value'],
        $attributes['outline'],
    );
@endphp

<div {{ $wrapper }}>
    <button type="submit" {{ $attributes }}>
        {{ $value }}
    </button>
</div>