@php
    $target = $attributes['target'];
    
    unset(
        $attributes['target'],
        $attributes['type']
    );
@endphp

<x-button type="button" data-bs-toggle="modal" data-bs-target="#{{ $target }}" {{ $attributes }}>
    {{ $value ?? $slot }}
</x-button>