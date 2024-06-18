<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleLogin.css') }}">
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}">
</head>

<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="/admin" method="GET">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <a href="/" class="cancel-button">Cancel</a>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
