<x-layouts.app title="Pengembalian - Anggota Siswa">
    <!-- DataTales Example -->
    <div class="row mb-3">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-success">Data Pengembalian - Anggota Siswa</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#kembaliAnggotaSiswaModal">
                            <i class="fas fa-plus-circle"></i>
                            Pengembalian Anggota Siswa
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
                                @foreach (range(1, 20) as $item)
                                    <tr>
                                        <td>{{ $item }}Tiger Nixon</td>
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
    <x-modals.base modalId="kembaliAnggotaSiswaModal" title="Pengembalian - Anggota Siswa" modalSize="modal-md">
        <div class="row px-3">
            <div class="col">
                <div class="mb-3">
                  <label for="no_peminjaman_siswa" class="form-label">No Peminjaman Siswa*</label>
                  <select class="form-control" id="no_peminjaman_siswa" name="no_peminjaman_siswa">
                    <option value="">-- Pilih No Peminjaman --</option>
                    <option value="P001">P001 - Ahmad</option>
                    <option value="P002">P002 - Budi</option>
                    <option value="P003">P003 - Clara</option>
                    <!-- Tambahkan data dinamis dari database -->
                  </select>
                </div>
            
                <div class="mb-3">
                  <label for="tanggal_kembali" class="form-label">Tanggal Kembali*</label>
                  <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                </div>
            
                <div class="mb-3">
                  <label for="status" class="form-label">Status Pengembalian*</label>
                  <select class="form-control" id="status" name="status">
                    <option value="">-- Pilih Status --</option>
                    <option value="selesai">Selesai</option>
                    <option value="denda-telat">Denda - Telat</option>
                    <option value="denda-hilang">Denda - Hilang</option>
                  </select>
                </div>
              </div>

        </div>

    </x-modals.base>

</x-layouts.app>
