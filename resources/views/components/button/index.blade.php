@php
    use Illuminate\View\ComponentAttributeBag;

    $attr       = $attributes;
    $class      = $attr['class'];
    $block      = $attr['block'];
    $color      = $attr['color'] ?? 'primary';
    $value      = $attr['value'];
    $outline    = $attr['outline'];
    $type       = $attr['type'] ?? 'button';
    $action     = $attr['action'];
    $wrapper    = new ComponentAttributeBag();
    
    $attr['class'] = "btn $class";
    $attr['type']  = $type;
    
    if(!$outline) $attr['class'] .= " btn-$color";
    if($outline) $attr['class']  .= " btn-outline-$color";
    if($block) $wrapper['class']        = "d-grid";

    if($action) {
        $wrapper['action']  = $action;
        $attr['type']       = 'submit';
    }

    $attributes = $wrapper;

    unset(
        $attr['color'],
        $attr['value'],
        $attr['outline'],
        $attr['action'],
    );
@endphp

@if($action)
    <x-form {{ $attributes }}>
        <button {{ $attr }}>
            {{ $slot->isNotEmpty() ? $slot : $value }}
        </button>
    </x-form>
@else
    <div {{ $attributes }}>
        <button {{ $attr }}>
            {{ $slot->isNotEmpty() ? $slot : $value }}
        </button>
    </div>
@endif