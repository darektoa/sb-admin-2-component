@php
    use Illuminate\Database\Eloquent\Model;

    $target = $attributes['target'];
    $data   = $attributes['data'] ?? [];
    $id     = $attributes['id'] ??  "button-".Str::random();

    $attributes['id']   = $id;
    $attributes['type'] = 'button';

    if($data instanceof Model) $data = $data->toArray();

    unset(
        $attributes['target'],
        $attributes['type'],
        $attributes['data'],
    );
@endphp

<x-button data-bs-toggle="modal" data-bs-target="#{{ $target }}" {{ $attributes }}>
    {{ $value ?? $slot }}
</x-button>

<x-layout.section scripts>
    <script>
        const onClickHandler = (data, target) => {
            const modal  = document.querySelector(`#${target}`);
            const dialog = modal.querySelector('.modal-dialog');
            const inputs = Object.keys(data).map((item) => {
                const elmnt  = modal.querySelector(`*[name=${item}]`);
                return [item, elmnt || null];
            }).filter(item => item[1]);

            inputs.forEach(item => item[1].value = data[item[0]]);
        }
    </script>
</x-layout.section>

<x-layout.push scripts>
    <script>
        document.querySelector('#{{ $id }}').addEventListener('click', () => {
            onClickHandler({{ Js::from($data) }}, '{{ $target }}');
        });
    </script>
</x-layout.push>