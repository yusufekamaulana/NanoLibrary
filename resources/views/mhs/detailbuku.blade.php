@extends('layouts.app')

@section('content')

<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <h1 class="mb-2">Juijutsu Kaisen Vol. 5</h1>
                <h4 class="text-secondary mb-3">Gege Akutami</h4>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5">
                <img class="img-fluid align-items-center" src="{{asset('assets1/img/buku1.jpg')}}" alt="Book Image" width="100%">
            </div>
            <div class="col-lg-7">
                <h4 class="mb-3">Deskripsi Buku</h4>
                <p class="mb-4" style="text-align: justify;">Juijutsu Kaisen Vol. 5 melanjutkan petualangan Yuji Itadori bersama teman-temannya dalam menghadapi kutukan yang mengancam dunia. Volume ini dipenuhi dengan aksi intens dan perkembangan karakter yang menarik, membuatnya menjadi salah satu seri manga yang paling digemari saat ini.</p>

                <h4 class="mb-3">Detail Buku</h4>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><strong>Jumlah Halaman</strong><br>368 halaman</li>
                            <li><strong>Penerbit</strong><br>Gramedia Widiasarana Indonesia</li>
                            <li><strong>Tanggal Terbit</strong><br>23 Mar 2020</li>
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
                <div class="d-flex gap-3 mt-3">
                    @if(auth()->check())
                    <button class="btn btn-primary rounded px-4" data-bs-toggle="modal" data-bs-target="#borrowModal">
                        Pinjam Buku
                    </button>
                    @else
                    <button class="btn btn-primary rounded px-4" onclick="toggleModal('loginModal')">Pinjam Buku</button>
                    @endif
                </div>

                <h4 class="mt-4">Status Buku</h4>
                <div class="overflow-x-auto mt-3">
                    <table class="min-w-full bg-white rounded-lg shadow-md">
                        <thead class="bg-gray-200 rounded-t-lg">
                            <tr>
                                <th class="py-3 px-5 text-left">Status</th>
                                <th class="py-3 px-5 text-left">Jumlah Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-3 px-5">Tersedia</td>
                                <td class="py-3 px-5">10</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-5">Reservasi</td>
                                <td class="py-3 px-5">1</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-5">Dipinjam</td>
                                <td class="py-3 px-5">2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="loginModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="redirect_to" value="{{ request()->fullUrl() }}">
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email-20xx@ftmm.unair.ac.id"
                            value="{{ old('Email') }}" required autofocus>
                    </div>
                    <!-- Password -->
                    <div class="mb-4">
                        <label for="Password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Minimal 8 Karakter"
                            required>
                    </div>
                    <!-- Remember Me -->
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ingat Saya</label>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn w-100 py-2" style="background-color: #1E90FF; color: white;">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Full Screen Borrowing Modal Start -->
<div class="modal fade" id="borrowModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
            <div class="modal-header border-0">
                <h3 class="modal-title text-white">Pilih Buku untuk Dipinjam</h3>
                <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-md">
                        <thead class="bg-gray-200 rounded-t-lg">
                            <tr>
                                <th class="py-3 px-5 text-left">Nomor Barcode</th>
                                <th class="py-3 px-5 text-left">Nama Buku</th>
                                <th class="py-3 px-5 text-left">Akses</th>
                                <th class="py-3 px-5 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example of a book entry. Replace this with dynamic data -->
                            <tr class="border-b">
                                <td class="py-3 px-5">1234567890</td>
                                <td class="py-3 px-5">Juijutsu Kaisen Vol. 5</td>
                                <td class="py-3 px-5">Tersedia</td>
                                <td class="py-3 px-5">
                                    <button class="btn btn-primary" onclick="borrowBook(1)">Pinjam</button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-5">0987654321</td>
                                <td class="py-3 px-5">Another Book Title</td>
                                <td class="py-3 px-5">Tersedia</td>
                                <td class="py-3 px-5">
                                    <button class="btn btn-primary" onclick="borrowBook(2)">Pinjam</button>
                                </td>
                            </tr>
                            <!-- Add more entries as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
    }
</script>

@endsection
