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
        // Mengambil buku dengan ID tertentu beserta jumlah pemesanan dan peminjaman
        $book = Book::withCount(['pemesanan', 'peminjaman'])->findOrFail($id);

        // Jumlah pemesanan untuk buku ini
        $dipesanCount = $book->pemesanan_count;

        // Jumlah buku yang sedang dipinjam
        $dipinjamCount = $book->peminjaman_count;

        // Menghitung stok tersedia untuk buku ini
        $stokTersedia = $book->Stok - $dipesanCount - $dipinjamCount;
        $stokTersedia = max($stokTersedia, 0); // Pastikan stok tidak negatif

        // Mengirim data ke view
        return view('mhs.detailbuku', [
            'book' => $book,
            'dipesanCount' => $dipesanCount,
            'dipinjamCount' => $dipinjamCount,
            'stokTersedia' => $stokTersedia,
        ]);
    }

}
