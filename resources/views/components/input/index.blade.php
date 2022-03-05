@php
    $type = $attributes['type'] ?? 'text';
@endphp

@if($type === 'checkbox')
    <x-input.checkbox {{ $attributes }} />
@else
    <input type="{{ $type }}" 
        class="form-control {{ $attributes['class'] }}"
        {{ $attributes }} />
@endif