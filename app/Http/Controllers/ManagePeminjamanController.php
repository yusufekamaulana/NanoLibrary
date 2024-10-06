<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ManagePeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('user', 'book')->get();
        return view('adm.layanan_peminjaman', compact('peminjaman'));
    }

    public function dikembalikan($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $pengembalian = new Pengembalian();
        $pengembalian->User_ID_User = $peminjaman->User_ID_User;
        $pengembalian->Buku_ID_Buku = $peminjaman->Buku_ID_Buku;
        $pengembalian->Tanggal_Peminjaman = $peminjaman->Tanggal_Peminjaman;
        $pengembalian->Tenggat_Pengembalian = $peminjaman->Tenggat_Pengembalian;
        $pengembalian->Tanggal_Pengembalian = Carbon::now(); // Mengganti nama kolom

        $pengembalian->save();

        $peminjaman->delete();

        return redirect()->route('admin.pengembalian.index')->with('success', 'Buku berhasil dikembalikan.');
    }
}
