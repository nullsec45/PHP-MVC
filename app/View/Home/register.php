<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="/register" method="POST">
        <p>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </p>

        <p>
            <label for="password">password</label>
            <input type="text" name="password" id="password">
        </p>
        <button type="submit">REGISTER</button>
    </form>
    
</body>
</html>