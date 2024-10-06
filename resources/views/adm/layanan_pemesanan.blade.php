@extends('layouts.admin')

@section('content')

<div class="container mt-5 pt-5">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Data Pemesanan</h3>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="#" class="btn btn-label-info btn-round me-2">Atur</a>
        <a href="#" class="btn btn-primary btn-round">Tambah Pemesanan</a>
      </div>
    </div>

    <!-- Table Section Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <h2 class="mb-4 text-center">Data Pemesanan</h2>
          <table id="dataPeminjamanTable" class="table table-hover table-striped align-middle text-center">
            <thead class="bg-primary text-white">
              <tr>
                <th>No</th>
                <th>No. Pemesanan</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Tgl. Pemesanan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($pemesanan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->ID_Pemesanan }}</td>
                    <td>{{ $item->user->NIM }}</td>
                    <td>{{ $item->user->Nama }}</td>
                    <td>{{ $item->book->Judul }}</td>
                    <td>{{ $item->Tanggal_Pemesanan }}</td>
                    <td>Dipesan</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <!-- Tombol Dipinjamkan -->
                            <a href="{{ route('admin.pemesanan.pinjamkan', $item->ID_Pemesanan) }}" class="btn btn-outline-primary btn-sm me-2" title="Dipinjamkan">
                                <i class="fas fa-undo"></i> Dipinjamkan
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>                      
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection