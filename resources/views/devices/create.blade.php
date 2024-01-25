<div>

    <form action="{{ url('devices') }}" method="POST">
        @csrf
        <label for="name">First name:</label><br>
        <input type="text" id="name" name="name" value=""><br>

        <label for="type">Last name:</label><br>
        <input type="text" id="type" name="type" value=""><br><br>

        <label for="description">Last name:</label><br>
        <input type="text" id="description" name="description" value=""><br><br>

        <input type="submit" value="Submit">

    </form>


</div>
