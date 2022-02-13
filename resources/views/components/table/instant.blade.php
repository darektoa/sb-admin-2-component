@php
    $data   = $attributes['data'];
    $first  = $data[0];
    $keys   = collect($first)->keys();
@endphp

<table class="table table-hover">
    <thead>
        <tr>

            @foreach($keys as $key)
            <th>{{ Str::headline($key) }}</th>
            @endforeach

        </tr>
    </thead>
    <tbody>
        
        @foreach ($data as $item)
        <tr>

            @foreach(collect($item)->keys() as $key)
            <td class="align-middle h6">{{ $item->$key }}</td>
            @endforeach
        
        </tr>
        @endforeach

    </tbody>
</table>