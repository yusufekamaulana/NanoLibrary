<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('mhs.layananbuku', compact('books')); // Ganti 'your_view_name' dengan nama view yang sesuai
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('mhs.detailbuku', compact('book')); // Ganti 'detail_buku' dengan nama view yang sesuai
    }
}
