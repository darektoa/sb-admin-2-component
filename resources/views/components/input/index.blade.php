@php
    $type   = $attributes['type'] ?? 'text';
    $label  = $attributes['label'];

    unset(
        $attributes['label']
    );
@endphp

@if($label) <x-input.label :value="$label" /> @endif
@if($type === 'checkbox')
    <x-input.checkbox {{ $attributes }} />
@else
    <input type="{{ $type }}" 
        class="form-control {{ $attributes['class'] }}"
        {{ $attributes }} />
@endif