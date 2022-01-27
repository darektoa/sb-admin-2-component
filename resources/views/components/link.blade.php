@php
    $center = (bool) $attributes['center'] ? 'text-center' : '';
    $small  = (bool) $attributes['small'] ? 'small' : '';
@endphp

<div class="{{ $small }} {{ $center }}">
    <a {{ $attributes }}>
        {{ __($value) }}
    </a>
</div>