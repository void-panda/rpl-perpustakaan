@php
    $currentPath = request()->path();
    $currentUrl = url()->current();
    $links = [
        ['title' => 'Dashboard', 'url' => route('dashboard'), 'icon' => 'fa-tachometer-alt'],
        [
            'title' => 'Anggota',
            'section-of' => 'Kelola Data',
            'url' => '#',
            'icon' => 'fa-users',
            'children' => [
                ['title' => 'Anggota Siswa', 'url' => route('anggota-siswa.index')],
                ['title' => 'Anggota Non Siswa', 'url' => route('anggota-nonsiswa.index')],
            ],
        ],
        ['title' => 'Buku', 'url' => route('buku.index'), 'icon' => 'fa-book'],
        [
            'title' => 'Peminjaman',
            'url' => '#',
            'section-of' => 'Transaksi',
            'icon' => 'fa-receipt',
            'children' => [
                ['title' => 'Peminjaman Siswa', 'url' => route('peminjaman-siswa')],
                ['title' => 'Peminjaman Non Siswa', 'url' => route('peminjaman-nonsiswa')],
            ],
        ],
        [
            'title' => 'Pengembalian',
            'url' => '#',
            'icon' => 'fa-tasks',
            'children' => [
                ['title' => 'Pengembalian Siswa', 'url' => route('pengembalian-siswa')],
                ['title' => 'Pengembalian Non Siswa', 'url' => route('pengembalian-nonsiswa')],
            ],
        ],
        [
            'title' => 'Petugas',
            'section-of' => 'Lanjutan',
            'url' => route('petugas.index'),
            'icon' => 'fa-user-cog',
        ],
        ['title' => 'Laporan', 'url' => route('laporan.index'), 'icon' => 'fa-archive'],
    ];
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand m-2 d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
      </div>
      <div class="sidebar-brand-text mx-3 text-xs">PERPUSTAKAAN SMKN 1 LOPOK</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  @foreach ($links as $link)
      @if (!isset($link['children']))
        <!-- Nav Item - Dashboard -->
        @isset($link['section-of'])
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                {{ $link['section-of'] }}
            </div>
        @endisset
        <li class="nav-item {{ $currentUrl == $link['url'] ? 'active' : '' }}">
            <a class="nav-link" href="{{ $link['url'] }}">
                <i class="fas fa-fw {{ $link['icon'] }}"></i>
                <span>{{ $link['title'] }}</span>
            </a>
        </li>
      @else
        @isset($link['section-of'])
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                {{ $link['section-of'] }}
            </div>
        @endisset
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item {{ str_contains($currentPath, strtolower($link['title'])) ? 'active' : '' }}">
            {{-- 🔥🔥🔥 --}}
            <a class="nav-link {{ str_contains($currentPath, strtolower($link['title'])) ? '' : 'collapsed'  }}" href="#" data-toggle="collapse" data-target="#collapse-{{ $link['title'] }}"
                aria-expanded="true" aria-controls="collapse-{{ $link['title'] }}">
                <i class="fas fa-fw {{ $link['icon'] }}"></i>
                <span>{{ $link['title'] }}</span>
            </a>
            <div id="collapse-{{ $link['title'] }}" class="collapse {{ str_contains($currentPath, strtolower($link['title'])) ? 'show' : ''  }}" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    @foreach ($link['children'] as $child)
                        <a class="collapse-item {{ $currentUrl == $child['url'] ? 'text-success active' : '' }}" href="{{ $child['url'] }}">{{ $child['title'] }}</a>
                    @endforeach
                </div>
            </div>
        </li>
        @isset($link['divider'])
            <!-- Divider -->
            <hr class="sidebar-divider">
        @endisset
      @endif
  @endforeach

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->