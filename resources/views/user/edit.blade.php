<html>
    <head></head>
    <body>
        <h1>Edit User Page</h1>

        <form action='/user/editAction/{{ $data["user"]["id"] }}' method="POST">
            @csrf
            Fist Name : <input type="text" name="first_name" placeholder="Name" value='{{ $data["user"]["first_name"] }}'>
            <br>
            Last Name : <input type="text" name="last_name" placeholder="Name" value='{{ $data["user"]["last_name"] }}'>
            <br>
            Age : <input type="text" name="age" placeholder="Email" value='{{ $data["user"]["age"] }}'>
            <br>
            <button type="submit">Edit</button>
        </form>

        
    </body>
</html>