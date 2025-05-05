@php

  $currentUrl = request()->url();

  $links = [
    ['title' => 'Dashboard', 'route' => 'dashboard', 'href' => route('dashboard'), 'icon' => 'grid'],
    [
      'title' => 'Anggota',
      'href' => '#',
      'icon' => 'users',
      'route' => 'anggota*',
      'children' => [
        ['title' => 'Siswa', 'href' => route('anggota-siswa.index')],
        ['title' => 'Non-Siswa', 'href' => route('anggota-nonsiswa.index')],
      ],
    ],
    [
      'title' => 'Buku',
      'href' => '#',
      'route' => 'buku*',
      'icon' => 'book',
      'children' => [
        ['title' => 'Lists Buku', 'href' => route('buku.index')],
        ['title' => 'Tambah Buku', 'href' => route('buku.create')],
      ],
    ],
    [
      'title' => 'Peminjaman',
      'route' => 'loans*',
      'href' => '#',
      'icon' => 'book-open',
      'children' => [
        ['title' => 'Mahasiswa', 'href' => '#'],
        ['title' => 'Non-Mahasiswa', 'href' => '#'],
      ],
    ],
    [
      'title' => 'Pengembalian',
      'href' => '#',
      'route' => 'kembali*',
      'icon' => 'book-open',
      'children' => [
        ['title' => 'Mahasiswa', 'href' => '#'],
        ['title' => 'Non-Mahasiswa', 'href' => '#'],
      ],
    ],
    ['title' => 'Report', 'role' => 'admin', 'href' => '#', 'icon' => 'archive'],
    ['title' => 'Kelola Petugas', 'role' => 'admin', 'href' => route('petugas.index'), 'icon' => 'users'],
  ];
@endphp


<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
              alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, Jane</h2>
            <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
              Sign Out
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse"
              data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
              aria-label="Toggle navigation">
              <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a href="../../index.html" class="btn btn-white fw-bold d-flex flex-column justify-content-center align-items-center">
            <span class="sidebar-icon">
              PERPUSTAKAAN
            </span>
            <span class="mt-1 sidebar-icon">SMKN 1 LOPOK</span>
          </a>
        </li>

        @foreach ($links as $link)
          @if (!isset($link['children']) || count($link['children']) == 0)
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item {{ $currentUrl == $link['href'] ? 'active' : '' }}">
              <a href="{{ $link['href'] }}" class="nav-link ">
                <span class="sidebar-icon">
                  <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                </span> 
                <span class="sidebar-text">{{ $link['title'] }}</span>
              </a>
            </li>
            @if ($link['title'] == 'Dashboard')
              <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            @endif
          @else
          <li class="nav-item">
            <span
              class="nav-link collapsed d-flex justify-content-between align-items-center"
              {{-- disini state open --}}
              data-bs-toggle="collapse" data-bs-target="#submenu-{{ $link['title'] }}" aria-expanded="false">
              <span>
                <span class="sidebar-icon">
                  <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                </span> 
                <span class="sidebar-text">{{ $link['title'] }}</span>
              </span>
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </span>
            </span>
            {{-- Disini state open --}}
            <div class="multi-level {{ Route::is($link['route']) ? 'expanded' : 'collapse' }}" 
            role="list" id="submenu-{{ $link['title'] }}" aria-expanded="false">
            <ul class="flex-column nav">
              @foreach ($link['children'] as $child)
              <li class="nav-item {{ (Str::startsWith($currentUrl, $child['href'])) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ $child['href'] }}">
                      <span class="sidebar-text">{{ $child['title'] }} </span>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </li>
          @endif
        @endforeach
        {{-- <li class="nav-item">
          <a href="../../pages/upgrade-to-pro.html"
            class="btn btn-danger d-flex align-items-center justify-content-center btn-upgrade-pro">
            <span>Logout</span>
          </a>
        </li> --}}
      </ul>
    </div>
  </nav>