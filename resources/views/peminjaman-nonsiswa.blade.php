<x-layouts.app title="Peminjaman - Anggota Non-Siswa">
    <!-- DataTales Example -->
    <div class="row mb-3">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-success">Data Peminjaman Anggota Non-Siswa</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#pinjamAnggotaNonSiswaModal">
                            <i class="fas fa-plus-circle"></i>
                            Peminjaman Anggota Non-Siswa
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
    <x-modals.base modalId="pinjamAnggotaNonSiswaModal" title="Peminjaman - Anggota Non Siswa" modalSize="modal-md">
        <div class="row px-3">
            <div class="col">
                <div class="mb-3">
                    <label for="no_anggota_nonsiswa" class="form-label">No Anggota Non-Siswa*</label>
                    <select class="form-control" id="no_anggota_nonsiswa" name="no_anggota_nonsiswa">
                        <option value="">-- Pilih Anggota --</option>
                        <option value="S001">S001 - Ahmad</option>
                        <option value="S002">S002 - Budi</option>
                        <option value="S003">S003 - Clara</option>
                        <!-- Tambahkan data dinamis dari database -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kode_buku" class="form-label">Kode Buku*</label>
                    <select class="form-control" id="kode_buku" name="kode_buku">
                        <option value="">-- Pilih Buku --</option>
                        <option value="BK001">BK001 - Matematika Dasar</option>
                        <option value="BK002">BK002 - Bahasa Indonesia</option>
                        <option value="BK003">BK003 - Sejarah Dunia</option>
                        <!-- Tambahkan data dinamis dari database -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah Pinjam*</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" min="1">
                </div>
            </div>

        </div>

    </x-modals.base>

</x-layouts.app>
