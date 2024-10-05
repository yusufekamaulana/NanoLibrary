<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan model User sudah ada
use Illuminate\Http\Request;

class ManageMahasiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua data mahasiswa
        $mahasiswas = User::paginate(10); // Menggunakan pagination
        return view('adm.data_mahasiswa', compact('mahasiswas'));
    }

    public function create()
    {
        return view('crud.mahasiswa_create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'Nama' => 'required|string|max:255',
            'NIM' => [
                'required',
                'regex:/^(\d{9}|\d{12})$/',
            ],
            'No_Telp' => [
                'required',
                'digits_between:9,13',
                'regex:/^\d+$/',
            ],
            'Email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:user,Email', 
                'regex:/^[a-zA-Z0-9._%+-]+@ftmm\.unair\.ac\.id$/',
            ],
            'Program_Studi' => 'required',
            'Angkatan' => 'required|integer',
        ], [
            // Pesan kesalahan kustom
            'Nama.required' => 'Kolom Nama wajib diisi.',
            'NIM.required' => 'Kolom NIM wajib diisi.',
            'NIM.regex' => 'Format NIM yang Anda masukkan salah.',
            'No_Telp.required' => 'Kolom Nomor Telepon wajib diisi.',
            'No_Telp.regex' => 'Format Nomor Telepon yang Anda masukkan salah.',
            'Email.required' => 'Kolom Email wajib diisi.',
            'Email.unique' => 'Email sudah terdaftar.',
            'Email.regex' => 'Format Email yang Anda masukkan salah. Format yang benar adalah: contoh@ftmm.unair.ac.id.',
            'Program_Studi.required' => 'Kolom Program Studi wajib diisi.',
            'Angkatan.required' => 'Kolom Angkatan wajib diisi.',
            'Angkatan.integer' => 'Kolom Angkatan harus berupa angka.',
        ]);

        // Membuat data mahasiswa baru
        User::create($request->all());

        return redirect()->route('adm-mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $mahasiswa = User::findOrFail($id);
        return view('crud.mahasiswa_view', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = User::findOrFail($id);
        return view('crud.mahasiswa_edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'Nama' => 'required|string|max:255',
            'NIM' => [
                'required',
                'regex:/^(\d{9}|\d{12})$/',
            ],
            'No_Telp' => [
                'required',
                'digits_between:9,13',
                'regex:/^\d+$/',
            ],
            'Email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:user,Email,' . $id . ',ID_User', // Exclude current record from unique check
                'regex:/^[a-zA-Z0-9._%+-]+@ftmm\.unair\.ac\.id$/',
            ],
            'Program_Studi' => 'required|string|max:255',
            'Angkatan' => 'required|integer|max:4',
        ], [
            // Pesan kesalahan kustom
            'Nama.required' => 'Kolom Nama wajib diisi.',
            'NIM.required' => 'Kolom NIM wajib diisi.',
            'Email.required' => 'Kolom Email wajib diisi.',
            'Email.unique' => 'Email sudah terdaftar.',
            'No_Telp.required' => 'Kolom Nomor Telepon wajib diisi.',
            // Tambahkan pesan kesalahan lainnya sesuai kebutuhan
        ]);

        // Memperbarui data mahasiswa
        $mahasiswa = User::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('adm-mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mahasiswa = User::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('adm-mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil dihapus.');
    }
}