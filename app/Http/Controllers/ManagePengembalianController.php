<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class ManagePengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::with('user', 'book')->get();
        return view('adm.layanan_pengembalian', compact('pengembalian'));
    }
}
