<div class="container mt-5">
    <h2>Book Details</h2>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Sampul:</strong></p>
            <div class="product-image">
                <img src="{{ asset($book->Sampul) }}" alt="Cover {{ $book->Judul }}" class="img-thumbnail" style="width: 150px; height: auto;">
            </div>
            <h5 class="card-title">{{ $book->Judul }}</h5>
            <p class="card-text"><strong>Author:</strong> {{ $book->Author }}</p>
            <p class="card-text"><strong>Tahun:</strong> {{ $book->Tahun }}</p>
            <p class="card-text"><strong>Kategori:</strong> {{ $book->Kategori }}</p>
            <p class="card-text"><strong>Stok:</strong> {{ $book->Stok }}</p>
            <p class="card-text"><strong>Dipinjam:</strong> {{ $book->Dipinjam }}</p>
            <p class="card-text"><strong>Akses:</strong> {{ $book->Akses }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $book->Status }}</p>
            <p class="card-text"><strong>Ketersediaan:</strong> {{ $book->Ketersediaan }}</p>
            <a href="{{ route('adm-buku.index') }}" class="btn btn-secondary">Back to Manage Book</a>
            <a href="{{ route('adm-buku.edit', $book->ID_Buku) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>