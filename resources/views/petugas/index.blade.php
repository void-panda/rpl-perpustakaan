<x-layouts.app title="Data Petugas">
    <!-- DataTales Example -->
    <div class="row mb-3">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-success">Kelola Data Petugas</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#petugasModal">
                            <i class="fas fa-plus-circle"></i>
                            Daftarkan Petugas Baru
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
    <x-modals.base modalId="petugasModal" title="Tambah Data Anggota Siswa">
        <div class="row px-3">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama*</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan*</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan">
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username*</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
            </div>
          
            <div class="col-md-6">
              <div class="mb-3">
                <label for="password" class="form-label">Password*</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role*</label>
                <select class="form-control" id="role" name="role">
                    <option value="0">-- Pilih Role --</option>
                    <option value="petugas">Petugas</option>
                    <option value="admin">Admin</option>
                </select>
              </div>
            </div>
          </div>
          
    </x-modals.base>
                    
</x-layouts.app>
