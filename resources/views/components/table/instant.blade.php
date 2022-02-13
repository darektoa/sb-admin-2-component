@php
    use Illuminate\Database\Eloquent\Model;

    $data   = collect($attributes['data']);
    $hidden = explode('|', $attributes['hidden']);
    
    $data = $data->map(function($item) use($hidden){
        if($item instanceof Model) $item = $item->makeHidden($hidden);
        else $item = (object) collect($item)->except($hidden)->toArray();
        return $item;
    });
    
    $first  = $data->first();
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