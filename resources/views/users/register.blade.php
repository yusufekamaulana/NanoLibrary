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
            max-width: 600px;
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
            background-color:  #1E90FF;
            border-color:  #1E90FF;
        }
        .registration-form .btn-primary:hover {
            background-color:  #006ad5;
            border-color:  #006ad5;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('assets1/img/logo.svg') }}" alt="Logo" style="height: 30px;">
                </a>
                <!-- Add your navbar content here -->
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Registration Form Start -->
    <div class="container-fluid py-5">
        <div class="container">
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
    <!-- Registration Form End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <!-- Include your footer content here -->
        <div class="container text-center">
            <p class="mb-0">&copy; 2023 ALL RIGHTS RESERVED</p>
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
