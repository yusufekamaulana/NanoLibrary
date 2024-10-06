<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class MahasiswaController extends Controller
{
    public function show($ID_User)
    {
        // Periksa apakah pengguna yang sedang login sama dengan ID yang diminta
        if (Auth::id() !== (int) $ID_User) {
            return redirect()->route('home')->withErrors(['message' => 'Anda tidak memiliki akses ke biodata ini.']);
        }

        // Ambil data pengguna berdasarkan ID
        $user = User::findOrFail($ID_User);

        // Hasilkan QR Code
        $qrCodePath = $this->generateQRCode($user->NIM);

        return view('mhs.biodata', compact('user', 'qrCodePath'));
    }

    public function generateQRCode($NIM)
    {
        // Buat QR Code
        $qrCode = QrCode::create($NIM);
        $writer = new PngWriter();

        // Dapatkan konten QR Code sebagai string
        $result = $writer->write($qrCode);

        // Tentukan path untuk menyimpan file QR Code
        $qrCodePath = public_path('qr_codes/' . $NIM . '.png');

        // Simpan QR Code ke file
        file_put_contents($qrCodePath, $result->getString());

        // Kembalikan path untuk ditampilkan di view
        return asset('qr_codes/' . $NIM . '.png');
    }
}
