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
        <div class="navbar-extra">
            <form action="/logout" method="post">
                @csrf
                <div class="me-5">
                    <button class="btn btn-secondary" type="submit" href="/logout">Logout</button>
                </div>
            </form>
        </div>
    </nav>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-lg-7">
            <div class="d-block mt-5 align-items-center justify-content-center vh-100">
                <main class=" w-800 p-5 rounded bg-dark-subtle">
                    <h2 class="h3 mb-3 fw-bold text-center">Tambah Blog</h2>
                    <form class="row g-3" action="/dashboard" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="bg-card">Background Card</label>
                                <input class="form-control" type="file" id="bg-card" name="bg-card" required>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="hero-img">Hero Image</label>
                                <input class="form-control" type="file" id="hero-img" name="hero-img" required>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="img">Image Blog:</label>
                                <input class="form-control" type="file" id="img" name="img" required>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="category">Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="desc1">Description 1</label>
                                <textarea class="form-control" id="desc1" name="desc1" required></textarea>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="desc2">Description 2</label>
                                <textarea class="form-control" id="desc2" name="desc2" required></textarea>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="desc3">Description 3</label>
                                <textarea class="form-control" id="desc3" name="desc3" required></textarea>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="desc4">Description 4</label>
                                <textarea class="form-control" id="desc4" name="desc4" required></textarea>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <button type="submit" class="btn btn-success" style="--bs-btn-padding-x: 36px;">Tambah</button>
                            </div>
                        </div>
                    </form>
                    <form class="mt-3" action="/dashboard" method="get">
                        <button type="submit" class="btn btn-danger" style="--bs-btn-padding-x: 46px;">Batal</button>
                    </form>
                </main>
            </div>
        </div>
</body>

</html>