@php
    $type = $attributes['type'] ?? 'text';
@endphp

@if($type === 'checkbox')
    <x-input.checkbox {{ $attributes }} />
@else
    <div class="form-group">
        <input type="{{ $type }}" 
            class="form-control {{ $attributes['class'] }}"
            {{ $attributes }} />
    </div>
@endif