<html>
    <head></head>
    <body>
        <h1>Add User Page</h1>

        <form action="/user/add" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <button type="submit">Add</button>
        </form>
    </body>
</html>