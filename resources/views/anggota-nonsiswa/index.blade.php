<x-layouts.app title="Anggota Non Siswa">
    <!-- DataTales Example -->
    <div class="row mb-3">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-success">Data Anggota Non Siswa</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#anggotaNonSiswaModal">
                            <i class="fas fa-plus-circle"></i>
                            Anggota Non Siswa
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
    <x-modals.base modalId="anggotaNonSiswaModal" title="Tambah Data Anggota Non Siswa">
        <div class="row px-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP*</label>
                    <input type="text" class="form-control" id="nip" name="nip">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telp*</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap*</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                </div>
                <div class="mb-3">
                    <label for="kode_pos" class="form-label">Kode POS</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                </div>
            </div>
        </div>
    </x-modals.base>


</x-layouts.app>
