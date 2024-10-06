@extends('layouts.admin')

@section('content')
<div class="container mt-5 pt-5">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Data Buku</h3>
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
          <div class="row g-5">
            <div class="col-lg-12">
              <h1 class="mb-2">Natural Language Processing with Python</h1>
              <h4 class="text-secondary mb-3">Steven Bird, Ewan Klein, Edward Loper</h4>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-lg-5">
              <img class="img-fluid align-items-center" src="{{ asset('assets1/img/buku1.jpg') }}" alt="Book Image" width="100%">
            </div>
            <div class="col-lg-7">
              <h4 class="mb-3">Deskripsi Buku</h4>
              <p class="mb-4" style="text-align: justify;">
                Buku ini adalah panduan praktis untuk pemrosesan bahasa alami (NLP) menggunakan bahasa pemrograman Python. Cocok untuk mereka yang ingin memahami konsep NLP dan implementasinya menggunakan pustaka NLTK di Python.
              </p>

              <h4 class="mb-3">Detail Buku</h4>
              <div class="row mb-4">
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li><strong>Jumlah Halaman</strong><br>368 halaman</li>
                    <li><strong>Penerbit</strong><br>Gramedia Widiasarana Indonesia</li>
                    <li><strong>Tahun Terbit</strong><br>23 Mar 2020</li>
                    <li><strong>Berat</strong><br>0.25 kg</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li><strong>ISBN</strong><br>9786020523316</li>
                    <li><strong>Lebar</strong><br>13.5 cm</li>
                    <li><strong>Panjang</strong><br>20.0 cm</li>
                    <li><strong>Bahasa</strong><br>Indonesia</li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <!-- Button section with back button first (red), then edit button (yellow) -->
                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-warning ml-2">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
