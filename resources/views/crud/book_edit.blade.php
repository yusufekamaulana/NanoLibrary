<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Book</h2>
        <form action="{{ route('adm-buku.update', $book->ID_Buku) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" id="Judul" name="Judul" value="{{ $book->Judul }}" required>
            </div>

            <div class="form-group">
                <label for="Sampul">Sampul</label>
                <input type="url" class="form-control" id="Sampul" name="Sampul" value="{{ $book->Sampul }}" required>
            </div>

            <div class="form-group">
                <label for="Author">Author</label>
                <input type="text" class="form-control" id="Author" name="Author" value="{{ $book->Author }}" required>
            </div>

            <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="number" class="form-control" id="Tahun" name="Tahun" value="{{ $book->Tahun }}" required>
            </div>

            <div class="form-group">
                <label for="Kategori">Kategori</label>
                <input type="text" class="form-control" id="Kategori" name="Kategori" value="{{ $book->Kategori }}" required>
            </div>

            <div class="form-group">
                <label for="Stok">Stok</label>
                <input type="number" class="form-control" id="Stok" name="Stok" value="{{ $book->Stok }}" required>
            </div>

            <div class="form-group">
                <label for="Dipinjam">Dipinjam</label>
                <input type="number" class="form-control" id="Dipinjam" name="Dipinjam" value="{{ $book->Dipinjam }}" required>
            </div>

            <div class="form-group">
                <label for="Akses">Akses</label>
                <select class="form-control" id="Akses" name="Akses" required>
                    <option value="Dapat dipinjam" {{ $book->Akses == 'Dapat dipinjam' ? 'selected' : '' }}>Dapat dipinjam</option>
                    <option value="Baca di tempat" {{ $book->Akses == 'Baca di tempat' ? 'selected' : '' }}>Baca di tempat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Status">Status</label>
                <select class="form-control" id="Status" name="Status" required>
                    <option value="Tersedia" {{ $book->Status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="Reservasi" {{ $book->Status == 'Reservasi' ? 'selected' : '' }}>Reservasi</option>
                    <option value="Dipinjam" {{ $book->Status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Ketersediaan">Ketersediaan</label>
                <select class="form-control" id="Ketersediaan" name="Ketersediaan" required>
                    <option value="Tersedia" {{ $book->Ketersediaan == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="Tidak Tersedia" {{ $book->Ketersediaan == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Book</button>
            <a href="{{ route('adm-buku.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>