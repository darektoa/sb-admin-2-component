<div class="alert {{ $attributes['class'] }}" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($value->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>