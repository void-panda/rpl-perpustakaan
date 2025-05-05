<x-layouts.app title="Tambah Anggota Non Siswa">
    <div class="row my-3">
        <h3>Tambah Anggota Non Siswa</h3>
    </div>
    
    <div class="row">
        <form>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="KoAnggotaNonSiswa" class="form-label">Ko Anggota Non Siswa</label>
                                <input type="text" class="form-control" id="KoAnggotaNonSiswa" name="KoAnggotaNonSiswa">
                            </div>
                            <div class="mb-3">
                                <label for="NIP" class="form-label">NIP</label>
                                <input type="text" class="form-control" id="NIP" name="NIP">
                            </div>
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="Nama" name="Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="Jabatan" name="Jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="TTL" class="form-label">TTL</label>
                                <input type="text" class="form-control" id="TTL" name="TTL">
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="Alamat" name="Alamat" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="KodePOS" class="form-label">Kode POS</label>
                                <input type="text" class="form-control" id="KodePOS" name="KodePOS">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="NoTebp" class="form-label">No Telp</label>
                                <input type="text" class="form-control" id="NoTebp" name="NoTebp">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</x-layouts.app>