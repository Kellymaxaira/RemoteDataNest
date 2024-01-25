<div>

    <form action="{{ url('/devices/'.$device->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <form action="{{ route('devices.update',  $device->id ) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">First name:</label><br>
        <input type="text" id="name" name="name" value="{{$device->name}}"><br>

        <label for="type">Last name:</label><br>
        <input type="text" id="type" name="type" value="{{$device->type}}"><br><br>

        <label for="description">Last name:</label><br>
        <input type="text" id="description" name="description" value="{{$device->description}}"><br><br>

        <input type="submit" value="Submit">

    </form>


</div>
