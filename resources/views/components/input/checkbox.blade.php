@php
    $id =  $attributes['id'] ?? Str::uuid();
@endphp

<div class="form-group {{ $attributes['class'] }}">
    <div class="custom-control custom-checkbox small">
        <input type="checkbox"
            id="{{ $id }}"
            class="custom-control-input"
            name="{{ $attributes['name'] }}"
            {{ $attributes['checked'] }}>
        <label class="custom-control-label" for="{{ $id }}">{{ __($label) }}</label>
    </div>
</div>