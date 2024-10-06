<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ManagePemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with('user', 'book')->get();
        return view('adm.layanan_pemesanan', compact('pemesanan'));
    }

    public function pinjamkan($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);

        $peminjaman = new Peminjaman();
        $peminjaman->User_ID_User = $pemesanan->User_ID_User;
        $peminjaman->Buku_ID_Buku = $pemesanan->Buku_ID_Buku;
        $peminjaman->Tanggal_Peminjaman = Carbon::now();
        $peminjaman->Tenggat_Pengembalian = Carbon::now()->addDays(7);

        $peminjaman->save();

        $pemesanan->delete();

        return redirect()->route('admin.peminjaman.index')->with('success', 'Buku berhasil dipinjamkan.');
    }
}
