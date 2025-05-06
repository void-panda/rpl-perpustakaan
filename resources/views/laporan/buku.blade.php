<x-layouts.app title="Buat Laporan Data Buku">
    <!-- DataTales Example -->
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold">Buat Laporan Data Buku</h4>
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
                                    <th>Kode Buku</th>
                                    <th>ISBN</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kode Buku</th>
                                    <th>ISBN</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Jumlah</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (range(1, 20) as $item)
                                    <tr>
                                        <td>BK-{{ str_pad($item, 3, '0', STR_PAD_LEFT) }}</td>
                                        <td>{{ rand(1000000000, 9999999999) }}</td>
                                        <td>Buku {{ $item }}</td>
                                        <td>Pengarang {{ $item }}</td>
                                        <td>Penerbit {{ $item }}</td>
                                        <td>{{ rand(1, 100) }}</td>
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
