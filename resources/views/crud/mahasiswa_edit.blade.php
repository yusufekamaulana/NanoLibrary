{{-- resources/views/crud/mahasiswa_edit.blade.php --}}
<h3 class="fw-bold mb-3">Edit Mahasiswa</h3>
<form action="{{ route('adm-mahasiswa.update', $mahasiswa->ID_User) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" value="{{ old('Nama', $mahasiswa->Nama) }}" required>
        @error('Nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM" name="NIM" value="{{ old('NIM', $mahasiswa->NIM) }}" required>
        @error('NIM')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" value="{{ old('Email', $mahasiswa->Email) }}" required>
        @error('Email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="No_Telp">No. Telepon</label>
        <input type="text" class="form-control @error('No_Telp') is-invalid @enderror" id="No_Telp" name="No_Telp" value="{{ old('No_Telp', $mahasiswa->No_Telp) }}" required>
        @error('No_Telp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="Program_Studi">Program Studi</label>
        <input type="text" class="form-control @error('Program_Studi') is-invalid @enderror" id="Program_Studi" name="Program_Studi" value="{{ old('Program_Studi', $mahasiswa->Program_Studi) }}" required>
        @error('Program_Studi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="Angkatan">Angkatan</label>
        <input type="number" class="form-control @error('Angkatan') is-invalid @enderror" id="Angkatan" name="Angkatan" value="{{ old('Angkatan', $mahasiswa->Angkatan) }}" required>
        @error('Angkatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="{{ route('adm-mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>