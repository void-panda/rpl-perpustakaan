<x-layouts.app title="Tambah Buku">
    <div class="row my-3">
        <h3>Tambah Buku</h3>
    </div>
    
    <div class="row px-3">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <!-- Kolom kiri -->
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kodeBuku" class="form-label">Kode Buku</label>
                            <input type="text" class="form-control" id="kodeBuku" maxlength="10" required>
                        </div>
                        <div class="mb-3">
                            <label for="noUDC" class="form-label">No UDC</label>
                            <input type="text" class="form-control" id="noUDC" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="noReg" class="form-label">No Reg</label>
                            <input type="text" class="form-control" id="noReg" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="thnTerbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="thnTerbit" maxlength="5">
                        </div>
                        <div class="mb-3">
                            <label for="kotaTerbit" class="form-label">Kota Terbit</label>
                            <input type="text" class="form-control" id="kotaTerbit" maxlength="20">
                        </div>
                        </div>
                
                        <!-- Kolom kanan -->
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bahasa" class="form-label">Bahasa</label>
                            <input type="text" class="form-control" id="bahasa" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="edisi" class="form-label">Edisi</label>
                            <input type="text" class="form-control" id="edisi" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" maxlength="200" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbn" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="jumEksemplar" class="form-label">Jumlah Eksemplar</label>
                            <input type="number" class="form-control" id="jumEksemplar" min="1">
                        </div>
                        <div class="mb-3">
                            <label for="subyekUtama" class="form-label">Subyek Utama</label>
                            <input type="text" class="form-control" id="subyekUtama" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="subyekTambahan" class="form-label">Subyek Tambahan</label>
                            <input type="text" class="form-control" id="subyekTambahan" maxlength="50">
                        </div>
                        </div>
                    </div>
                
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layouts.app>