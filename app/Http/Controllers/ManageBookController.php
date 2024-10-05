<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ManageBookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10); // Paginate results, 10 books per page
        return view('adm.data_buku', compact('books'));
    }

    public function create()
    {
        return view('crud.book_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Sampul' => 'required|url',
            'Author' => 'required',
            'Tahun' => 'required|integer',
            'Kategori' => 'required',
            'Stok' => 'required|integer',
            'Dipinjam' => 'nullable|integer',
            'Akses' => 'required|in:Dapat dipinjam,Baca di tempat',
            'Status' => 'required|in:Tersedia,Reservasi,Dipinjam',
            'Ketersediaan' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        Book::create([
            'Judul' => $request->Judul,
            'Sampul' => $request->Sampul,
            'Author' => $request->Author,
            'Tahun' => $request->Tahun,
            'Kategori' => $request->Kategori,
            'Stok' => $request->Stok,
            'Dipinjam' => $request->Dipinjam ?? 0,
            'Akses' => $request->Akses,
            'Status' => $request->Status,
            'Ketersediaan' => $request->Ketersediaan,
        ]);

        return redirect()->route('adm-buku.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('crud.book_view', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('crud.book_edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Judul' => 'required',
            'Sampul' => 'url',
            'Author' => 'required',
            'Tahun' => 'required|integer',
            'Kategori' => 'required',
            'Stok' => 'required|integer',
            'Dipinjam' => 'nullable|integer',
            'Akses' => 'required|in:Dapat dipinjam,Baca di tempat',
            'Status' => 'required|in:Tersedia,Reservasi,Dipinjam',
            'Ketersediaan' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        $book = Book::findOrFail($id);

        if ($request->has('Sampul')) {
            $book->Sampul = $request->Sampul; // Update with the new URL
        }

        $book->update([
            'Judul' => $request->Judul,
            'Author' => $request->Author,
            'Tahun' => $request->Tahun,
            'Kategori' => $request->Kategori,
            'Stok' => $request->Stok,
            'Dipinjam' => $request->Dipinjam ?? 0,
            'Akses' => $request->Akses,
            'Status' => $request->Status,
            'Ketersediaan' => $request->Ketersediaan,
        ]);

        return redirect()->route('adm-buku.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('adm-buku.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
