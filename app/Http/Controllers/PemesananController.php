<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PemesananController extends Controller
{

    public function index()
    {
        $pemesanan = Pemesanan::with('user', 'book')->get();
        return view('adm.layanan_pemesanan', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        $pemesanan = new Pemesanan();
        $pemesanan->ID_Pemesanan = Str::random(8); // Generate a random ID
        $pemesanan->User_ID_User = auth()->id();
        $pemesanan->Buku_ID_Buku = $request->Buku_ID_Buku;
        $pemesanan->Tanggal_Pemesanan = now();
        $pemesanan->save();

        // Simpan ID pemesanan ke session
        session(['order_id' => $pemesanan->ID_Pemesanan, 'success' => 'Peminjaman berhasil dilakukan!']);

        // Redirect back
        return redirect()->back();
    }
}
