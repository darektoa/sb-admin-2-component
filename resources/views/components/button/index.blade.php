@php
    use Illuminate\View\ComponentAttributeBag;

    $class      = $attributes['class'];
    $block      = $attributes['block'];
    $color      = $attributes['color'] ?? 'primary';
    $value      = $attributes['value'];
    $outline    = $attributes['outline'];
    $type       = $attributes['type'] ?? 'button';
    $wrapper    = new ComponentAttributeBag();
    
    $attributes['class'] = "btn $class";
    $attributes['type']  = $type;

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
    <button {{ $attributes }}>

        @if($slot->isNotEmpty()) {{ $slot }}
        @else {{ $value }}
        @endif

    </button>
</div>