<x-layouts.app title="Anggota Siswa">
    <!-- DataTales Example -->
    <div class="row mb-3">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-success">Data Anggota Siswa</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#anggotaSiswaModal">
                            <i class="fas fa-plus-circle"></i>
                            Anggota Siswa
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (range(1,20) as $item)
                                    <tr>
                                        <td>{{$item}}Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data Anggota Siswa -->
    <x-modals.base modalId="anggotaSiswaModal" title="Tambah Data Anggota Siswa">
        <div class="row px-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nomor_induk" class="form-label">Nomor Induk*</label>
                    <input type="number" class="form-control" name="nomor_induk" id="nomor_induk">
                </div>
                <div class="mb-3">
                    <label for="no_telp">No Telp*</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label for="nama_ortu">Nama Orangtua</label>
                    <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama">Nama Lengkap*</label>
                    <input type="text" class="form-control" id="nama" name="kode_pos">
                </div>
                <div class="mb-3">
                    <label for="kode_pos">Kode POS</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat Anggota</label>
                    <textarea rows="3" class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat_ortu">Alamat Orangtua</label>
                    <textarea rows="3" class="form-control" id="alamat_ortu" name="alamat_ortu"></textarea>
                </div>
            </div>
        </div>
    </x-modals.base>
                    
</x-layouts.app>
