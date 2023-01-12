<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelompok 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <nav class="navbar navbar-light bg-light mx-auto">
              <a class="btn btn-outline-danger mx-3 p-3" href="/login">Go To Login Page</a>
              <a class="btn btn-outline-primary mx-3 p-3" href="/register">Go To Register page</a>
              @auth
        <form action="/logout" method="POST">
            @csrf
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                  <button class="btn nav-link px-3" type="submit">Sign Out</button>
                </div>
                @endauth
        </form>
          </nav>
      </nav>
      <h1 class="text-center">Welcome To Our Website</h1>
      <img src="/img/1234.jpg" class="rounded mx-auto d-block" alt="RS" width="750px">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
