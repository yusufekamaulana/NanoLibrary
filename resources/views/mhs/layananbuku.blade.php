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
                            @foreach($books as $book)
                            <div class="col-md-4 col-lg-2 col-xl-2">
                                <div class="rounded position-relative fruite-item h-100 clickable-box" onclick="window.location.href='/mhs/detailbuku/{{ $book->ID_Buku }}'">
                                    <div class="book-img">
                                        <img src="{{ asset($book->Sampul) }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{ $book->Kategori }}</div>
                                    <div class="p-2 border border-secondary border-top-0 rounded-bottom d-flex flex-column">
                                        <h5 class="text-wrapped text-center">{{ $book->Judul }}</h5>
                                        <span class="text-wrapped text-center">{{ $book->Author }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Manga Shop End-->


@endsection