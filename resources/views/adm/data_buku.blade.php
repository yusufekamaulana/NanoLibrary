@extends('layouts.admin')

@section('content')

<div class="container mt-4 pt-5">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Data Buku</h3>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="#" class="btn btn-label-info btn-round me-2">Atur</a>
        <a href="{{ route('adm-buku.create') }}" class="btn btn-primary btn-round">Tambah Buku</a>
      </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Table Section Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <h2 class="mb-4 text-center">Data Buku</h2>
          <table id="dataBukuTable" class="table table-hover table-striped align-middle text-center">
            <thead class="bg-primary text-white">
              <tr>
                <th>No.</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Author</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Dipinjam</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset($book->Sampul) }}" alt="Cover {{ $book->Judul }}" class="img-thumbnail" style="width: 80px; height: auto;"></td>
                <td>{{ $book->Judul }}</td>
                <td>{{ $book->Author }}</td>
                <td>{{ $book->Tahun }}</td>
                <td>{{ $book->Kategori }}</td>
                <td>{{ $book->Stok }}</td>
                <td>{{ $book->Dipinjam }}</td>
                <td>
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('adm-buku.show', $book->ID_Buku) }}" class="btn btn-outline-primary btn-sm me-2" title="View">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('adm-buku.edit', $book->ID_Buku) }}" class="btn btn-outline-warning btn-sm me-2" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('adm-buku.destroy', $book->ID_Buku) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $books->links() }} <!-- Pagination Links -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection