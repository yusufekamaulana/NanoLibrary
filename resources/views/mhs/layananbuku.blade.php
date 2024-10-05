@extends('layouts.app')

@section('content')

<!-- Book Collection-->
<div class="container-fluid fruite py-4">
    <div class="container py-4">
        <h1 class="mb-4">Koleksi Buku Ruang Baca FTMM</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords"
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i
                                    class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="Manga">Kategori:</label>
                            <select id="Manga" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                form="fruitform">
                                <option value="volvo">Matematika</option>
                                <option value="saab">Statistika</option>
                                <option value="opel">Coding</option>
                                <option value="audi">Manajemen</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="Manga">Default Sorting:</label>
                            <select id="Manga" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                form="fruitform">
                                <option value="volvo">Nothing</option>
                                <option value="saab">Popularity</option>
                                <option value="opel">Organic</option>
                                <option value="audi">Fantastic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-2 justify-content-left">
                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/buku1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku'">
                                    <div class="book-img">
                                        <img src="{{asset('assets1/img/hero-img.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Manga</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">Juijutsu Kaisen</h5>
                                        <span class="text-wrapped text-center">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Manga Shop End-->


@endsection