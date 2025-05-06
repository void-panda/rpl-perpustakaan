<x-layouts.app title="Buat Laporan Pengembalian & Denda">
    <!-- DataTales Example -->
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold">Buat Laporan Pengembalian & Denda</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBukuModal">
                            <i class="fas fa-download"></i>
                            Buat Laporan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-dark" id="dataTableLaporan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No. Kembali</th>
                                    <th>No. Pinjam</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Kode Petugas</th>
                                    <th>Status</th>
                                    <th>Denda</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. Kembali</th>
                                    <th>No. Pinjam</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Kode Petugas</th>
                                    <th>Status</th>
                                    <th>Denda</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (range(1, 20) as $item)
                                    <tr>
                                        <td>{{ $item }}TRX-001</td>
                                        <td>TRX-001</td>
                                        <td>2</td>
                                        <td>2022-01-01</td>
                                        <td>PTG-001</td>
                                        <td>{{ ['Selesai', 'Denda (Telat)', 'Denda (Hilang)'][rand(0, 2)] }}</td>
                                        <td>Rp {{ number_format(rand(1000, 10000), 0, ',', '.') }}</td>
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
