<x-layouts.app title="Data Buku">
    <!-- DataTales Example -->
    <div class="row mb-3">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 font-weight-bold text-success">Data Buku</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createBukuModal">
                            <i class="fas fa-plus-circle"></i>
                            Tambah Buku
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

    <!-- Modal Tambah Data Buku -->
    <x-modals.base modalId="createBukuModal" title="Tambah Data Buku">
        <div class="row px-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="kode_buku" class="form-label">Kode Buku*</label>
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku">
                </div>
                <div class="mb-3">
                    <label for="no_udc" class="form-label">No UDC*</label>
                    <input type="text" class="form-control" id="no_udc" name="no_udc">
                </div>
                <div class="mb-3">
                    <label for="no_reg" class="form-label">No Reg*</label>
                    <input type="text" class="form-control" id="no_reg" name="no_reg">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul*</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit*</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang*</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
                <div class="mb-3">
                    <label for="kota_terbit" class="form-label">Kota Terbit</label>
                    <input type="text" class="form-control" id="kota_terbit" name="kota_terbit">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="bahasa" class="form-label">Bahasa</label>
                    <input type="text" class="form-control" id="bahasa" name="bahasa">
                </div>
                <div class="mb-3">
                    <label for="edisi" class="form-label">Edisi</label>
                    <input type="text" class="form-control" id="edisi" name="edisi">
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN*</label>
                    <input type="text" class="form-control" id="isbn" name="isbn">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok*</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                </div>
                <div class="mb-3">
                    <label for="jum_eksemplar" class="form-label">Jumlah Eksemplar</label>
                    <input type="number" class="form-control" id="jum_eksemplar" name="jum_eksemplar">
                </div>
                <div class="mb-3">
                    <label for="subjek_utama" class="form-label">Subjek Utama</label>
                    <input type="text" class="form-control" id="subjek_utama" name="subjek_utama">
                </div>
                <div class="mb-3">
                    <label for="subjek_tambahan" class="form-label">Subjek Tambahan</label>
                    <input type="text" class="form-control" id="subjek_tambahan" name="subjek_tambahan">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>
            </div>
        </div>

    </x-modals.base>

</x-layouts.app>
