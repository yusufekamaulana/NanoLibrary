<form action="{{ route('adm-buku.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="Judul">Judul</label>
        <input type="text" class="form-control" id="Judul" name="Judul" required>
    </div>
    
    <div class="form-group">
        <label for="Sampul">Sampul (URL)</label>
        <input type="url" class="form-control" id="Sampul" name="Sampul" required>
    </div>
    
    <div class="form-group">
        <label for="Author">Author</label>
        <input type="text" class="form-control" id="Author" name="Author" required>
    </div>
    
    <div class="form-group">
        <label for="Tahun">Tahun</label>
        <input type="number" class="form-control" id="Tahun" name="Tahun" required>
    </div>

    <div class="form-group">
        <label for="Kategori">Kategori</label>
        <input type="text" class="form-control" id="Kategori" name="Kategori" required>
    </div>

    <div class="form-group">
        <label for="Stok">Stok</label>
        <input type="number" class="form-control" id="Stok" name="Stok" required>
    </div>

    <div class="form-group">
        <label for="Dipinjam">Dipinjam</label>
        <input type="number" class="form-control" id="Dipinjam" name="Dipinjam" value="0" required>
    </div>

    <div class="form-group">
        <label for="Akses">Akses</label>
        <select class="form-control" id="Akses" name="Akses" required>
            <option value="Dapat dipinjam">Dapat dipinjam</option>
            <option value="Baca di tempat">Baca di tempat</option>
        </select>
    </div>

    <div class="form-group">
        <label for="Status">Status</label>
        <select class="form-control" id="Status" name="Status" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Reservasi">Reservasi</option>
            <option value="Dipinjam">Dipinjam</option>
        </select>
    </div>

    <div class="form-group">
        <label for="Ketersediaan">Ketersediaan</label>
        <select class="form-control" id="Ketersediaan" name="Ketersediaan" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Tambah Buku</button>
</form>