@extends('layouts.admin')

@section('content')

<div class="container mt-5 pt-5">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Data Pengembalian</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Atur</a>
                <a href="#" class="btn btn-primary btn-round">Tambah Pengembalian</a>
            </div>
        </div>

        <!-- Table Section Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="table-responsive bg-white p-4 rounded shadow-sm">
                    <h2 class="mb-4 text-center">Data Pengembalian</h2>
                    <table id="dataPengembalianTable" class="table table-hover table-striped align-middle text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No</th>
                                <th>No. Peminjaman</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Judul Buku</th>
                                <th>Tgl. Peminjaman</th>
                                <th>Tgl. Pengembalian</th>
                                <th>Status</th>
                                <th>Tgl. Dikembalikan</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>123</td>
                                <td>164221062</td>
                                <td>Arkan Syafiq At'taqy</td>
                                <td>Attack on Titan Vol. 1</td>
                                <td>13-09-2024</td>
                                <td>16-09-2024</td>
                                <td>Dikembalikan</td>
                                <td>15-09-2024</td>
                                <td>Rp. 0</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-outline-primary btn-sm me-2" title="View"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>456</td>
                                <td>163221062</td>
                                <td>Franky</td>
                                <td>Attack on Titan Vol. 2</td>
                                <td>16-09-2024</td>
                                <td>19-09-2024</td>
                                <td>Dikembalikan</td>
                                <td>18-09-2024</td>
                                <td>Rp. 0</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-outline-primary btn-sm me-2" title="View"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>789</td>
                                <td>162112333031</td>
                                <td>Brook</td>
                                <td>Attack on Titan Vol. 3</td>
                                <td>19-09-2024</td>
                                <td>22-09-2024</td>
                                <td>Dikembalikan</td>
                                <td>25-09-2024</td>
                                <td>Rp. 15000</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-outline-primary btn-sm me-2" title="View"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection