<x-layouts.app title="Daftar Petugas Baru">
    <div class="row my-3">
        <h3>Daftarkan Petugas Baru</h3>
    </div>
    
    <div class="row px-3">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                      <label for="kodePetugas" class="form-label">Kode Petugas</label>
                      <input type="text" class="form-control" id="kodePetugas" maxlength="10" required>
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" maxlength="50">
                    </div>
                    <div class="mb-3">
                      <label for="jabatan" class="form-label">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" maxlength="20">
                    </div>
                    <div class="mb-3">
                      <label for="hakAkses" class="form-label">Hak Akses</label>
                      <select class="form-control">
                        <option>Petugas</option>
                        <option>Admin</option>
                      </select>
                      {{-- <input type="text" class="form-control" id="hakAkses" maxlength="20"> --}}
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" maxlength="20">
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>                  
            </div>
        </div>
    </div>
    
</x-layouts.app>