@extends('layouts.admin')

@section('content')

<div class="container mt-5 pt-5">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Data Mahasiswa</h3>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="#" class="btn btn-label-info btn-round me-2">Atur</a>
        <a href="{{ route('adm-mahasiswa.create') }}" class="btn btn-primary btn-round">Tambah Mahasiswa</a>
      </div>
    </div>

    <!-- Table Section Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <h2 class="mb-4 text-center">Data Mahasiswa</h2>
          <table id="dataMahasiswaTable" class="table table-hover table-striped align-middle text-center">
            <thead class="bg-primary text-white">
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswas as $index => $mahasiswa)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mahasiswa->NIM }}</td>
                <td>{{ $mahasiswa->Nama }}</td>
                <td>{{ $mahasiswa->Program_Studi }}</td>
                <td>{{ $mahasiswa->Angkatan }}</td>
                <td>{{ $mahasiswa->Email }}</td>
                <td>{{ $mahasiswa->No_Telp }}</td>
                <td>
                  <div class="d-flex justify-content-center">
                    <!-- View Button -->
                    <a href="{{ route('adm-mahasiswa.show', $mahasiswa->ID_User) }}" class="btn btn-outline-primary btn-sm me-2" title="View">
                      <i class="fas fa-eye"></i>
                    </a>
                    <!-- Edit Button -->
                    <a href="{{ route('adm-mahasiswa.edit', $mahasiswa->ID_User) }}" class="btn btn-outline-warning btn-sm me-2" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('adm-mahasiswa.destroy', $mahasiswa->ID_User) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');" class="d-inline">
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
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection