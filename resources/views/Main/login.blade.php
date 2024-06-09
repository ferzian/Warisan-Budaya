<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleLogin.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="/admin" method="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <a href="/admin"><button type="submit">Login</button></a>
        </form>
    </div>
</body>
</html>
