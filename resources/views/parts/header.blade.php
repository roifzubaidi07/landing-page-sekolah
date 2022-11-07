<header id="header" class="" ><!--tambah class fixed-top-->
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/" class="logo me-auto"><img src="../img/icon.jpg" alt="" class="img-fluid"></a>

      @include('parts.nav')

      <!-- .navbar -->

      <a href="#kontak" class="get-started-btn">Kontak Kami</a>



      @if(Auth::check())
          {{-- dropdown profil --}}
          <div class="dropdown">
            <button class="get-started-btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a href="/admin" class="dropdown-item" target="_blank">Admin</a></li>
              <div class="dropdown-divider"></div>
              <li>
                <form action="logout" method="post">
                  @csrf
                  <button class="dropdown-item" type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </div>
          {{-- end dropdown profil --}}
        @else
        <a href="/login" class="get-started-btn-link">Login</a>
      @endif
    </div>
  </header>