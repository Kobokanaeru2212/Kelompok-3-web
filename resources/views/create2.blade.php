<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Kelompok 3</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            @auth
            <form action="/logout" method="POST">
                @csrf
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                      <button class="btn nav-link px-3" type="submit">Sign Out</button>
                    </div>
            </form>
            @else
            <div class="navbar-nav">
              <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="/login">Login</a>
              </div>
            @endauth
        </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
              <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                  <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="/awal">
                          <span data-feather="home"></span>
                          Dashboard
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="/baca">
                          <span data-feather="file"></span>
                          Baca
                        </a>
                      </li>
                      @can('hold')

                      <li class="nav-item">
                        <a class="nav-link text-dark" href="/baca/dokter">
                          <span data-feather="file"></span>
                          Daftar Dokter
                        </a>
                      </li>
                      @endcan
                    </ul>
                  </div>
                </nav>
    <div class="col-lg-8 mt-3 mx-2 mt-0 bg-dark p-3 text-white">
        <form action="{{ route('post.createdokter') }}" method="post">
            @csrf
            <h1 class="mt-3 col-lg-8">Tambah Data Dokter</h1>
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" id="name">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
              <label for="usia" class="form-label">Usia</label>
              <input type="text" name="usia" class="form-control" id="usia">
              @error('usia')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" checked value="perempuan">
                <label class="form-check-label" for="jenis_kelamin">
                    perempuan
                </label>
              </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" checked value="laki-laki">
                <label class="form-check-label" for="jenis_kelamin">
                    laki-laki
                </label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
