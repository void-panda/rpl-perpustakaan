@php
    $laporans = [
        [
            'title' => 'Laporan Anggota',
            'url' => route('laporan.anggota'),
            'icon' => 'fa-users',
            'color' => 'primary',
        ],
        [
            'title' => 'Laporan Data Buku',
            'url' => route('laporan.buku'),
            'icon' => 'fa-book',
            'color' => 'success',
        ],
        [
            'title' => 'Laporan Peminjaman',
            'url' => route('laporan.peminjaman'),
            'icon' => 'fa-receipt',
            'color' => 'warning',
        ],
        [
            'title' => 'Laporan Pengembalian & Denda',
            'url' => route('laporan.pengembalian'),
            'icon' => 'fa-tasks',
            'color' => 'danger',
        ],
    ];
@endphp

<x-layouts.app title="Buat Laporan">
    <h3>Buat Laporan</h3>
    <p class="text-leading">Silahkan pilih menu laporan dibawah ini untuk melakukan pembuatan laporan</p>

    <!-- Content Row -->
    <div class="row mt-3">
        <!-- Earnings (Monthly) Card Example -->
        @foreach ($laporans as $laporan)
            <div class="col-xl-4 col-md-6 mb-4">
                <a href="{{ $laporan['url'] }}" class="card border-left-{{ $laporan['color'] }} shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-{{ $laporan['color'] }} text-uppercase mb-1">
                                    {{ $laporan['title'] }}    
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas {{ $laporan['icon'] }} fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</x-layouts.app>
