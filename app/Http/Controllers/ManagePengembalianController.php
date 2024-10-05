<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ManagePengembalianController extends Controller
{
    public function index()
    {
        $pengembalians = Transaksi::where('Tipe_Transaksi', 'Pengembalian')->with(['user', 'buku'])->get();
        return view('pengembalian.index', compact('pengembalians'));
    }

    public function create()
    {
        return view('pengembalian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'User_ID_User' => 'required|exists:user,ID_User',
            'Buku_ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Transaksi' => 'required|date',
        ]);

        Transaksi::create(array_merge($request->all(), ['Tipe_Transaksi' => 'Pengembalian']));

        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pengembalian = Transaksi::with(['user', 'buku'])->findOrFail($id);
        return view('pengembalian.show', compact('pengembalian'));
    }

    public function edit($id)
    {
        $pengembalian = Transaksi::findOrFail($id);
        return view('pengembalian.edit', compact('pengembalian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'User_ID_User' => 'required|exists:user,ID_User',
            'Buku_ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Transaksi' => 'required|date',
        ]);

        $pengembalian = Transaksi::findOrFail($id);
        $pengembalian->update(array_merge($request->all(), ['Tipe_Transaksi' => 'Pengembalian']));

        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengembalian = Transaksi::findOrFail($id);
        $pengembalian->delete();

        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil dihapus.');
    }
}