{{-- resources/views/crud/mahasiswa_create.blade.php --}}
<h3 class="fw-bold mb-3">Tambah Mahasiswa</h3>
<form action="{{ route('adm-mahasiswa.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" value="{{ old('Nama') }}" required>
        @error('Nama')
            <div class="invalid-feedback">Kolom Nama wajib diisi.</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM" name="NIM" value="{{ old('NIM') }}" required>
        @error('NIM')
            <div class="invalid-feedback">Format NIM yang Anda masukkan salah.</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" value="{{ old('Email') }}" required>
        @error('Email')
            <div class="invalid-feedback">Format Email yang Anda masukkan salah. Format yang benar adalah: contoh@ftmm.unair.ac.id.</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="No_Telp">No. Telepon</label>
        <input type="text" class="form-control @error('No_Telp') is-invalid @enderror" id="No_Telp" name="No_Telp" value="{{ old('No_Telp') }}" required>
        @error('No_Telp')
            <div class="invalid-feedback">Format Nomor Telepon yang Anda masukkan salah.</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="Program_Studi">Program Studi</label>
        <input type="text" class="form-control @error('Program_Studi') is-invalid @enderror" id="Program_Studi" name="Program_Studi" value="{{ old('Program_Studi') }}" required>
        @error('Program_Studi')
            <div class="invalid-feedback">Kolom Program Studi wajib diisi.</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="Angkatan">Angkatan</label>
        <input type="number" class="form-control @error('Angkatan') is-invalid @enderror" id="Angkatan" name="Angkatan" value="{{ old('Angkatan') }}" required>
        @error('Angkatan')
            <div class="invalid-feedback">Kolom Angkatan harus berupa angka.</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
    <a href="{{ route('adm-mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>