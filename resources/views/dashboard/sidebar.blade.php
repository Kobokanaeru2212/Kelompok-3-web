<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/awal">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/baca">
            <span data-feather="file"></span>
            Baca
          </a>
        </li>
        @can('hold')

        <li class="nav-item">
          <a class="nav-link" href="/baca/dokter">
            <span data-feather="file"></span>
            Daftar Dokter
          </a>
        </li>
        @endcan
      </ul>
    </div>
  </nav>
