<html>
    <head></head>
    <body>
        <h1>List User Page</h1>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Photo</th>
            </tr>

            @foreach ($data as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['first_name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td><img src='{!! $item['avatar'] !!}'></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>