@extends('admin_app')

@section('title', 'Tambah Siswa')

@section('content')

<div class="page-head">
    <div>
        <h2>Tambah Siswa</h2>
        <p>Tambahkan data peserta didik beserta foto.</p>
    </div>
</div>

<div class="card-school form-card">
    <form
        action="{{ route('siswa.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="row g-3">

            {{-- NISN --}}
            <div class="col-md-6">
                <label for="nisn" class="form-label">NISN</label>
                <input
                    type="text"
                    id="nisn"
                    name="nisn"
                    class="form-control @error('nisn') is-invalid @enderror"
                    value="{{ old('nisn') }}"
                    maxlength="30"
                    required
                >

                @error('nisn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Nama Siswa --}}
            <div class="col-md-6">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input
                    type="text"
                    id="nama_siswa"
                    name="nama_siswa"
                    class="form-control @error('nama_siswa') is-invalid @enderror"
                    value="{{ old('nama_siswa') }}"
                    maxlength="100"
                    required
                >

                @error('nama_siswa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Jenis Kelamin --}}
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">
                    Jenis Kelamin
                </label>

                <select
                    id="jenis_kelamin"
                    name="jenis_kelamin"
                    class="form-select @error('jenis_kelamin') is-invalid @enderror"
                    required
                >
                    <option value="">Pilih jenis kelamin</option>

                    <option
                        value="Laki-Laki"
                        @selected(old('jenis_kelamin') === 'Laki-Laki')
                    >
                        Laki-Laki
                    </option>

                    <option
                        value="Perempuan"
                        @selected(old('jenis_kelamin') === 'Perempuan')
                    >
                        Perempuan
                    </option>
                </select>

                @error('jenis_kelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tahun Masuk --}}
            <div class="col-md-6">
                <label for="tahun_masuk" class="form-label">
                    Tahun Masuk
                </label>

                <input
                    type="number"
                    id="tahun_masuk"
                    name="tahun_masuk"
                    class="form-control @error('tahun_masuk') is-invalid @enderror"
                    value="{{ old('tahun_masuk', date('Y')) }}"
                    min="2000"
                    max="2100"
                    required
                >

                @error('tahun_masuk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Foto Siswa --}}
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="foto" class="form-label">Foto Siswa</label>

                    <input
                        type="file"
                        id="foto"
                        name="foto"
                        class="form-control @error('foto') is-invalid @enderror"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    >

                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <small class="text-muted">
                        Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                        Foto boleh dikosongkan.
                    </small>
                </div>
            </div>

        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-4">
            <a href="{{ route('admin.siswa') }}" class="btn btn-light">
                Kembali
            </a>

            <button type="submit" class="btn btn-school">
                Simpan Siswa
            </button>
        </div>

    </form>
</div>

@endsection
