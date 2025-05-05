<x-layouts.app title="Tambah Anggota Siswa">
    <div class="row my-3">
        <h3>Tambah Anggota Siswa</h3>
    </div>
    
    <div class="row">
        <form>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="NoAnggotaSiswa" class="form-label">No Anggota Siswa</label>
                                <input type="text" class="form-control" id="NoAnggotaSiswa" name="NoAnggotaSiswa">
                            </div>
                            <div class="mb-3">
                                <label for="Nomor Induk" class="form-label">Nomor Induk</label>
                                <input type="text" class="form-control" id="Nomor Induk" name="Nomor Induk">
                            </div>
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="Nama" name="Nama">
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="KodePOS" class="form-label">Kode POS</label>
                                <input type="text" class="form-control" id="KodePOS" name="KodePOS">
                            </div>
                            <div class="mb-3">
                                <label for="NoTelp" class="form-label">No Telp</label>
                                <input type="text" class="form-control" id="NoTelp" name="NoTelp">
                            </div>
                            <div class="mb-3">
                                <label for="NamaOrtu" class="form-label">Nama Orang Tua</label>
                                <input type="text" class="form-control" id="NamaOrtu" name="NamaOrtu">
                            </div>
                            <div class="mb-3">
                                <label for="AlamatOrtu" class="form-label">Alamat Orang Tua</label>
                                <textarea class="form-control" id="AlamatOrtu" name="AlamatOrtu" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="NoTelpOrtu" class="form-label">No Telp Orang Tua</label>
                                <input type="text" class="form-control" id="NoTelpOrtu" name="NoTelpOrtu">
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