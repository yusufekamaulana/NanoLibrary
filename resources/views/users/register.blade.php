<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registrasi Mahasiswa - Nano Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('assets1/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Include any other fonts you need -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets1/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">

    <!-- Include any custom CSS needed for the form -->
    <style>
        /* Custom styles for the registration form */
        .registration-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .registration-form .form-control {
            border-radius: 0.5rem;
            padding: 1rem;
        }

        .registration-form label {
            margin-bottom: 0.5rem;
        }

        .registration-form .btn-primary {
            background-color: #1E90FF;
            border-color: #1E90FF;
        }

        .registration-form .btn-primary:hover {
            background-color: #006ad5;
            border-color: #006ad5;
        }
    </style>
</head>

<body>
    <!-- Login Form Start -->
    <div class="container-fluid pt-2 mb-5">
        <div class="container pt-3">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-md-end fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid animated slideInRight" src="{{asset('assets1/img/ftmm.png')}}" alt="">
                </div>
                <div class="col-lg-6 align-self-center text-left">
                    <div class="registration-form">
                        <h2 class="text-center mb-5">Daftar Akun</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
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

                            <!-- Nama Lengkap -->
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama Lengkap" value="{{ old('Nama') }}" required>
                            </div>
                            <!-- NIM -->
                            <div class="mb-3">
                                <label for="NIM" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="NIM" name="NIM" placeholder="NIM" value="{{ old('NIM') }}" required>
                            </div>
                            <!-- Nomor Telepon -->
                            <div class="mb-3">
                                <label for="No_Telp" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="No_Telp" name="No_Telp" placeholder="085754028591" value="{{ old('No_Telp') }}" required>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="Email" name="Email" placeholder="email@ftmm.unair.ac.id" value="{{ old('Email') }}" required>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="Password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Kata Sandi" required>
                            </div>
                            <!-- Konfirmasi Password -->
                            <div class="mb-4">
                                <label for="Password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="Password_confirmation" name="Password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 py-2">Daftar</button>
                        </form>
                        <p class="mt-3 text-center">
                            Sudah punya akun? <a href="/login" class="text-primary">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Form End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <img src="{{ asset('assets1/img/logo.svg') }}" alt="Logo" style="height: 30px;">
                    </a>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="http://twitter.com/ftmmunair"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@ftmmunair"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ftmmunair/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/ftmm-universitas-airlangga-8161ab207"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Hubungi kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Gedung Nano, Kampus C UNAIR kota Surabaya</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62881-0360-00830</p>
                    <p><i class="fa fa-envelope me-3"></i>info@ftmm.unair.ac.id</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Layanan Kami</h5>
                    <a class="btn btn-link" href="/mhs-profil">Ruang Baca</a>
                    <a class="btn btn-link" href="/mhs-peminjaman">Peminjaman Buku</a>
                    <a class="btn btn-link" href="/mhs-ebook">E-Book</a>
                    <a class="btn btn-link" href="https://e-journal.unair.ac.id/JATM">E-Journal</a>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <img class="align-center" src="{{ asset('assets1/img/footer@300x.png') }}" alt="img-fluid" width="100%">
                </div>
            </div>

        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">NANO Library
                            Created By Kelompok 8 Basis Data A1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('assets1/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets1/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets1/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets1/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets1/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets1/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets1/js/main.js') }}"></script>
</body>

</html>