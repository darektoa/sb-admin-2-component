@php
    $id     = $attributes['id'] ?? Str::random();
    $type   = $attributes['type'] ?? 'text';
    $label  = $attributes['label'];

    $attributes['id'] = $id;

    unset(
        $attributes['label']
    );
@endphp

@if($label) <x-input.label :value="$label" :for="$id"/> @endif
@if($type === 'checkbox')
    <x-input.checkbox {{ $attributes }} />
@else
    <input type="{{ $type }}" 
        class="form-control {{ $attributes['class'] }}"
        {{ $attributes }} />
@endif