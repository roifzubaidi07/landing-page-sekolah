<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        {{-- Profil Sekolah, Ekstrakurikuler, Galeri dl --}}
      <li><a class="{{($title === 'beranda') ? 'active' : ''}}" href="/">Beranda</a></li>
      <li><a class=" {{($title === 'profil') ? 'active' : ''}}" href="/profil">Profil</a></li>
      <li><a class=" {{($title === 'ekstrakurikuler') ? 'active' : ''}}" href="/ekstrakurikuler">Ekstrakurikuler</a></li>
      <li><a class=" {{($title === 'galeri') ? 'active' : ''}}" href="/galeri">Galeri</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>