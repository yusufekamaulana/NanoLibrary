{{-- resources/views/crud/mahasiswa_view.blade.php --}}
<h3 class="fw-bold mb-3">Detail Mahasiswa</h3>
<div>
    <strong>Nama:</strong> {{ $mahasiswa->Nama }}
</div>
<div>
    <strong>NIM:</strong> {{ $mahasiswa->NIM }}
</div>
<div>
    <strong>Email:</strong> {{ $mahasiswa->Email }}
</div>
<div>
    <strong>No. Telepon:</strong> {{ $mahasiswa->No_Telp }}
</div>
<div>
    <strong>Program Studi:</strong> {{ $mahasiswa->Program_Studi }}
</div>
<div>
    <strong>Angkatan:</strong> {{ $mahasiswa->Angkatan }}
</div>
<a href="{{ route('adm-mahasiswa.edit', $mahasiswa->ID_User) }}" class="btn btn-warning">Edit</a>
<a href="{{ route('adm-mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>