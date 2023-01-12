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
