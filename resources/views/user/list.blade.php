<html>
    <head></head>
    <body>
        <h1>List User Page</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            @foreach ($data['users'] as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['first_name'] }}</td>
                    <td>{{ $user['last_name'] }}</td>
                    <td>{{ $user['age'] }}</td>
                    <td>
                        <a href='/user/edit/{{ $user["id"] }}'>edit</a>
                        <a href='/user/remove/{{ $user["id"] }}'>Remove</a>
                    </td>
                </tr>
            @endforeach
        </table>
        
    </body>
</html>