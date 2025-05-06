<x-layouts.app title="Buat Laporan Anggota Perpustakaan">
    <!-- DataTales Example -->
    <div class="row">

        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold">Laporan Anggota Siswa</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBukuModal">
                            <i class="fas fa-download"></i>
                            Buat Laporan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered " id="dataTableLaporan2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NO Anggota</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>No Telp</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>NO Anggota</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>No Telp</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (range(1, 20) as $item)
                                    <tr>
                                        <td>{{ $item }}ANG-001</td>
                                        <td>{{ rand(1000000000000000, 9999999999999999) }}</td>
                                        <td>Nama {{ $item }}</td>
                                        <td>{{ rand(1000000000, 9999999999) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold">Laporan Anggota Non-Siswa</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#createBukuModal">
                            <i class="fas fa-download"></i>
                            Buat Laporan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered " id="dataTableLaporan" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NO Anggota</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No Telp</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>NO Anggota</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No Telp</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (range(1, 20) as $item)
                                    <tr>
                                        <td>{{ $item }}ANG-001</td>
                                        <td>{{ rand(1000000000000000, 9999999999999999) }}</td>
                                        <td>Nama {{ $item }}</td>
                                        <td>Jabatan {{ $item }}</td>
                                        <td>{{ rand(1000000000, 9999999999) }}</td>
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
