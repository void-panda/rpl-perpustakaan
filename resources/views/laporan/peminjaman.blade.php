<x-layouts.app title="Buat Laporan Peminjaman">
    <!-- DataTales Example -->
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold">Buat Laporan Peminjaman</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBukuModal">
                            <i class="fas fa-download"></i>
                            Buat Laporan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTableLaporan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No. Pinjam</th>
                                    <th>Kode Anggota</th>
                                    <th>Nama Anggota</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Kode Petugas</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. Pinjam</th>
                                    <th>Kode Anggota</th>
                                    <th>Nama Anggota</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Kode Petugas</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (range(1, 20) as $item)
                                    <tr>
                                        <td>TRX-{{ str_pad($item, 3, '0', STR_PAD_LEFT) }}</td>
                                        <td>KA-{{ str_pad($item, 3, '0', STR_PAD_LEFT) }}</td>
                                        <td>Anggota {{ $item }}</td>
                                        <td>KBK-{{ str_pad($item, 3, '0', STR_PAD_LEFT) }}</td>
                                        <td>Buku {{ $item }}</td>
                                        <td>{{ rand(1, 3) }}</td>
                                        <td>{{ now()->subDays(rand(1, 30))->format('Y-m-d') }}</td>
                                        <td>PTG-{{ str_pad($item, 3, '0', STR_PAD_LEFT) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5 justify-content-end">
        <div class="col-auto text-start">
            <div class="card">
            <div class="card-body">
                <span class="d-block">Mengetahui,</span>
                <span class="mb-5 d-block">Kepala Perpustakaan</span>
                <p class="card-text mt-5 font-weight-bold">Saprudin S. Kom</p>
            </div>
            </div>
        </div>
    </div>

</x-layouts.app>
