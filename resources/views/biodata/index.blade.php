<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nano Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('assets1/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets1/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-primary" style="z-index: 1030;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('assets1/img/logo.svg') }}" alt="Logo" style="height: 30px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link text-white">Beranda</a>
                        <a href="/profile" class="nav-item nav-link text-white">Profil</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/peminjaman" class="dropdown-item">Peminjaman Buku</a>
                                <a href="/e-book" class="dropdown-item">E-Book</a>
                            </div>
                        </div>
                        <a href="/user" class="nav-item nav-link">
                            <button type="button" class="btn text-white p-0 d-none d-lg-block">
                                <i class="fa fa-user"></i>
                            </button>
                        </a>
                        <a href="#" class="nav-item nav-link">
                            <button type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Navbar End -->

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-4 wow fadeIn text-center" data-wow-delay="0.5s">
                    <img class="img-fluid rounded-circle mx-auto" src="{{ asset('assets1/img/team-1.jpg') }}" alt="Profile Picture">
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <table class="table text-left">
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <h1 class="text-3xl font-bold mb-3">Hallo, Agus !!!</h1>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-bold">Nama Lengkap</td>
                                <td>Agus Santoso</td>
                            </tr>
                            <tr>
                                <td class="font-bold">NIM</td>
                                <td>123456789</td>
                            </tr>
                            <tr>
                                <td class="font-bold">Program Studi</td>
                                <td>Teknologi Sains Data</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                    <a class="btn btn-link" href="">Ruang Baca</a>
                    <a class="btn btn-link" href="">Peminjaman Buku</a>
                    <a class="btn btn-link" href="">E-Book</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets1/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets1/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets1/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets1/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets1/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets1/js/main.js')}}"></script>
</body>

</html>