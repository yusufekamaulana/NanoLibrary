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
        <a href="#" class="btn btn-primary btn-round">Tambah Mahasiswa</a>
      </div>
    </div>
    
    <!-- SECTION -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="table-responsive bg-white p-4 rounded shadow-sm">
          <div class="row g-5 align-items-center justify-content-center">
            <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
              <table class="table text-align center">
                <thead>
                  <tr>
                    <td colspan="2" class="text-center">
                      <h1 class="text-3xl font-bold mb-3">Biodata Mahasiswa</h1>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-bold" style="width: 30%;">Nama Lengkap</td>
                    <td>Arkan Syafiq At'taqy</td>
                  </tr>
                  <tr>
                    <td class="font-bold">NIM</td>
                    <td>164221062</td>
                  </tr>
                  <tr>
                    <td class="font-bold">Email</td>
                    <td>arkan.syafiq.attaqy-2022@ftmm.unair.ac.id</td>
                  </tr>
                  <tr>
                    <td class="font-bold">Nomor Telepon</td>
                    <td>085754028591</td>
                  </tr>
                  <tr>
                    <td class="font-bold">Program Studi</td>
                    <td>Teknologi Sains Data</td>
                  </tr>
                  <tr>
                    <td class="font-bold">Angkatan</td>
                    <td>2022</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group text-center mt-4">
              <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
