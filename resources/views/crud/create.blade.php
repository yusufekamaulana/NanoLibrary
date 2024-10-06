@extends('layouts.admin')

@section('content')
<div class="container mt-5 pt-5">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Buat Data Buku</h3>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="#" class="btn btn-label-info btn-round me-2">Atur</a>
        <a href="#" class="btn btn-primary btn-round">Tambah Buku</a>
      </div>
    </div>
    
    <!-- FORM SECTION -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <h2 class="mb-4 text-center">Data Buku</h2>
          <form>
            <div class="form-group">
              <label for="Judul">Judul</label>
              <input type="text" class="form-control" id="Judul" name="Judul" maxlength="255" required>
            </div>
            
            <div class="form-group">
              <label for="Author">Author</label>
              <input type="text" class="form-control" id="Author" name="Author" maxlength="100">
            </div>

            <div class="form-group">
              <label for="Sampul">Sampul (URL)</label>
              <input type="url" class="form-control" id="Sampul" name="Sampul" maxlength="255" required>
            </div>

            <div class="form-group">
              <label for="Deskripsi">Deskripsi</label>
              <textarea class="form-control" id="Deskripsi" name="Deskripsi" maxlength="999" required></textarea>
            </div>

            <!-- Additional fields here -->

            <div class="form-group">
              <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-primary ml-2">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
