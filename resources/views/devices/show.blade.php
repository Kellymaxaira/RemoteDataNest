@empty(!$device)
    {{ $device->name }}
    {{ $device->description }}

    @empty(!$device->data)
    @foreach($device->data as $data)
        <p>{{ $data->altitude }}</p>
        <p>{{ $data->temperature }}</p>
        <p>{{ $data->device_id }}</p>
    @endforeach

    @endempty
@endempty
