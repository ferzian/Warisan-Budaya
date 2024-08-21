<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleLogin.css') }}">
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="bg-dark d-flex p-3 align-items-center justify-content-between">
        <h1 class="text-light ms-5">Warisan<span class="text-danger">Budaya</span></h1>
        <div class="">
            <h1 class="text-light ms-5">DASHBOARD</h1>
        </div>
        <div class="navbar-extra">
            <form action="/logout" method="post">
                @csrf
                <div class="me-5">
                    <button class="btn btn-secondary" type="submit" href="/logout">Logout</button>
                </div>
            </form>
        </div>
    </nav>

    <div class="d-flex justify-content-center mt-5 ">
        <a href="/dashboard/create"><button class="btn btn-primary mb-3">Tambah Data</button></a>
    </div>

    <div class="d-flex justify-content-center">
        <table class="table table-secondary table-hover table-bordered w-75 ">
            <thead>
                <tr>
                    <th >Judul</th>
                    <th class="w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="/dashboard/{{ $post->id }}/edit"><Button class="btn btn-warning">Edit</button></a>

                        <form action="/dashboard/{{ $post->id }}" method="post" style="display: inline ;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>