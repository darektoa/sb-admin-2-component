@php
    $center = (bool) $attributes['center'] ? 'text-center' : '';
@endphp

<div class="{{ $center }}">
    <a {{ $attributes }}>
        {{ __($value) }}
    </a>
</div>