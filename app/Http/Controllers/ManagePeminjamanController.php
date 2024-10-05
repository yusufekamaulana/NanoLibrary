<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ManagePeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Transaksi::where('Tipe_Transaksi', 'Peminjaman')->with(['user', 'buku'])->get();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function create()
    {
        return view('peminjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'User_ID_User' => 'required|exists:user,ID_User',
            'Buku_ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Transaksi' => 'required|date',
        ]);

        Transaksi::create(array_merge($request->all(), ['Tipe_Transaksi' => 'Peminjaman']));

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function show($id)
    {
        $peminjaman = Transaksi::with(['user', 'buku'])->findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    public function edit($id)
    {
        $peminjaman = Transaksi::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'User_ID_User' => 'required|exists:user,ID_User',
            'Buku_ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Transaksi' => 'required|date',
        ]);

        $peminjaman = Transaksi::findOrFail($id);
        $peminjaman->update(array_merge($request->all(), ['Tipe_Transaksi' => 'Peminjaman']));

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $peminjaman = Transaksi::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}