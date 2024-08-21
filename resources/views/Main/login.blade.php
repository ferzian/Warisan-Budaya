<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleLogin.css') }}">
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-lg-4 ">
            <main class="form-signin w-100 m-auto p-5 rounded bg-dark-subtle ">
                <h1 class="h3 mb-3 fw-bold text-center">Login Admin</h1>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="username" name="username" class="form-control" id="floatingInput" placeholder="username">
                    <label for="floatingInput">Username</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
                  <a href="/" class="btn btn-danger mt-2">Cancel</a>
                </form>
                <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
              </main>   
        </div>
    </div>
        </form>
    </div>
</body>

</html>
