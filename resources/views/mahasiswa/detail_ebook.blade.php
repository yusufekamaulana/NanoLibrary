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
    <div class="container-fluid sticky-top bg-primary" style="z-index: 1030;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('assets1/img/logo.svg') }}" alt="Logo" style="height: 30px;">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/mhs-home" class="nav-item nav-link text-white">Beranda</a>
                        <a href="/mhs-profil" class="nav-item nav-link text-white">Tentang Kami</a>
                
                        <!-- Dropdown Layanan -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/mhs-peminjaman" class="dropdown-item">Peminjaman Buku</a>
                                <a href="/mhs-ebook" class="dropdown-item">E-Book</a>
                                <a href="https://e-journal.unair.ac.id/JATM" class="dropdown-item">E-Journal</a>
                            </div>
                        </div>
                
                        <!-- Dropdown Status -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Status</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/mhs-riwayat_peminjaman" class="dropdown-item">Riwayat Peminjaman</a>
                                <a href="/mhs-riwayat_pengembalian" class="dropdown-item">Riwayat Pengembalian</a>
                            </div>
                        </div>
                
                        <a href="/mhs-biodata" class="nav-item nav-link">
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
                        <a class="btn btn-primary rounded px-4" href="https://mangaplus.shueisha.co.jp/viewer/4000164" target="_blank">Akses Buku</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="loginModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                    <h2 class="text-xl font-bold mb-6" style="text-align: center;">Login</h2>
                    <form>
                        <div class="mb-5">
                            <label for="uemail" class="block text-sm font-medium">Email</label>
                            <input type="text" id="email" class="mt-1 p-3 border border-gray-300 rounded w-full" required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block text-sm font-medium">Password</label>
                            <input type="password" id="password" class="mt-1 p-3 border border-gray-300 rounded w-full" required>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" class="btn btn-danger rounded px-4 mr-2" onclick="toggleModal('loginModal')">Batal</button>
                            <button type="submit" class="btn btn-primary rounded px-4">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    </script>


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