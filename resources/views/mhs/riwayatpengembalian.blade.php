@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto py-5">
    <h2 class="text-3xl font-bold text-black text-center mb-4">Riwayat Peminjaman Buku</h2>
    <div class="w-full">
        <div class="bg-white rounded-lg shadow-xl">
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead class="border-b border-gray-200 bg-gray-100 p-4">
                    </tr>

                            <th class="px-4 py-2 text-left"></th>
                            <th class="px-4 py-2 text-left">Judul</th>
                            <th class="px-4 py-2 text-left">No. Peminjaman</th>
                            <th class="px-4 py-2 text-left">Tgl. Peminjaman</th>
                            <th class="px-4 py-2 text-left">Tgl. Harus Kembali</th>
                            <th class="px-4 py-2 text-left">Tgl. Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="{{asset('assets1/img/buku1.jpg')}}" alt="Foto Buku" class="w-16 h-16 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">Belajar Laravel</td>
                            <td class="px-4 py-2">#12345</td>
                            <td class="px-4 py-2">01/10/2024</td>
                            <td class="px-4 py-2">15/10/2024</td>
                            <td class="px-4 py-2">15/10/2024</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="{{asset('assets1/img/buku1.jpg')}}" alt="Foto Buku" class="w-16 h-16 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">Belajar Laravel</td>
                            <td class="px-4 py-2">#12345</td>
                            <td class="px-4 py-2">01/10/2024</td>
                            <td class="px-4 py-2">15/10/2024</td>
                            <td class="px-4 py-2">15/10/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
