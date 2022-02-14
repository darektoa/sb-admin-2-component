@php
    use Illuminate\Database\Eloquent\Model;

    $data    = collect($attributes['data']);
    $hidden  = collect(explode('|', $attributes['hidden']));
    $visible = collect(explode('|', $attributes['visible']));
    $visible = $visible->map(fn($item) => explode(':', $item, 2));
    $visible = $visible->pluck(1, 0);
    
    $data = $data->map(function($item) use($hidden, $visible){
        if($item instanceof Model) {
            $item = $item->makeHidden($hidden->all());
            $item = $item->makeVisible($visible->keys());
        }else {
            $visible = $visible->keys();
            $hidden  = $hidden->reject(fn($item) => $visible->contains($item));
            $item    = (object) collect($item)->except($hidden)->toArray();
        }
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