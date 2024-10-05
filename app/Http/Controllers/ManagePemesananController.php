<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ManagePemesananController extends Controller
{
    public function index()
    {
        // Retrieve all pemesanan transactions
        $pemesananList = Transaksi::where('Tipe_Transaksi', 'Pemesanan')->with(['user', 'buku'])->get();
        return view('pemesanan.index', compact('pemesananList'));
    }

    public function create()
    {
        // Load necessary data for creating a pemesanan
        return view('pemesanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'User_ID_User' => 'required|exists:user,ID_User',
            'Buku_ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Pemesanan' => 'required|date',
        ]);

        Transaksi::create(array_merge($request->all(), [
            'Tipe_Transaksi' => 'Pemesanan',
            'Status' => 'Dipesan',
        ]));

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Show details of a specific pemesanan
        $pemesanan = Transaksi::with(['user', 'buku'])->findOrFail($id);
        return view('pemesanan.show', compact('pemesanan'));
    }

    public function edit($id)
    {
        // Get the pemesanan for editing
        $pemesanan = Transaksi::findOrFail($id);
        return view('pemesanan.edit', compact('pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'User_ID_User' => 'required|exists:user,ID_User',
            'Buku_ID_Buku' => 'required|exists:buku,ID_Buku',
            'Tanggal_Pemesanan' => 'required|date',
        ]);

        $pemesanan = Transaksi::findOrFail($id);
        $pemesanan->update(array_merge($request->all(), [
            'Tipe_Transaksi' => 'Pemesanan',
            'Status' => 'Dipesan',
        ]));

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Delete the specified pemesanan
        $pemesanan = Transaksi::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil dihapus.');
    }
}