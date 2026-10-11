@extends('admin_app')

@section('title', 'Edit Profil Sekolah')

@section('content')

<div class="page-head">
    <div>
        <h2>Edit Profil Sekolah</h2>
        <p>Perbarui identitas, logo, atau foto sekolah.</p>
    </div>
</div>

<div class="card-school form-card">
    <form
        action="{{ route('profil.update', ['id' => $profil->id_profil]) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div class="row g-3">

            {{-- Nama Sekolah --}}
            <div class="col-md-6">
                <label for="nama_sekolah" class="form-label">
                    Nama Sekolah
                </label>

                <input
                    type="text"
                    id="nama_sekolah"
                    name="nama_sekolah"
                    class="form-control @error('nama_sekolah') is-invalid @enderror"
                    value="{{ old('nama_sekolah', $profil->nama_sekolah) }}"
                    maxlength="150"
                    required
                >

                @error('nama_sekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Kepala Sekolah --}}
            <div class="col-md-6">
                <label for="kepala_sekolah" class="form-label">
                    Kepala Sekolah
                </label>

                <input
                    type="text"
                    id="kepala_sekolah"
                    name="kepala_sekolah"
                    class="form-control @error('kepala_sekolah') is-invalid @enderror"
                    value="{{ old('kepala_sekolah', $profil->kepala_sekolah) }}"
                    maxlength="150"
                >

                @error('kepala_sekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- NPSN --}}
            <div class="col-md-6">
                <label for="npsn" class="form-label">NPSN</label>

                <input
                    type="text"
                    id="npsn"
                    name="npsn"
                    class="form-control @error('npsn') is-invalid @enderror"
                    value="{{ old('npsn', $profil->npsn) }}"
                    maxlength="30"
                >

                @error('npsn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Kontak --}}
            <div class="col-md-6">
                <label for="kontak" class="form-label">Kontak</label>

                <input
                    type="text"
                    id="kontak"
                    name="kontak"
                    class="form-control @error('kontak') is-invalid @enderror"
                    value="{{ old('kontak', $profil->kontak) }}"
                    maxlength="100"
                >

                @error('kontak')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Alamat --}}
            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>

                <textarea
                    id="alamat"
                    name="alamat"
                    class="form-control @error('alamat') is-invalid @enderror"
                    rows="3"
                >{{ old('alamat', $profil->alamat) }}</textarea>

                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Visi dan Misi --}}
            <div class="col-12">
                <label for="visi_misi" class="form-label">
                    Visi &amp; Misi
                </label>

                <textarea
                    id="visi_misi"
                    name="visi_misi"
                    class="form-control @error('visi_misi') is-invalid @enderror"
                    rows="5"
                >{{ old('visi_misi', $profil->visi_misi) }}</textarea>

                @error('visi_misi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tahun Berdiri --}}
            <div class="col-md-6">
                <label for="tahun_berdiri" class="form-label">
                    Tahun Berdiri
                </label>

                <input
                    type="number"
                    id="tahun_berdiri"
                    name="tahun_berdiri"
                    class="form-control @error('tahun_berdiri') is-invalid @enderror"
                    value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}"
                    min="1900"
                    max="2100"
                >

                @error('tahun_berdiri')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Logo Sekolah --}}
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="logo" class="form-label">Ganti Logo</label>

                    @if ($profil->logo)
                        <div class="mb-2">
                            <img
                                src="{{ asset('uploads/profil/' . $profil->logo) }}"
                                class="thumb"
                                alt="Logo {{ $profil->nama_sekolah }}"
                            >
                        </div>
                    @endif

                    <input
                        type="file"
                        id="logo"
                        name="logo"
                        class="form-control @error('logo') is-invalid @enderror"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    >

                    @error('logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <small class="text-muted">
                        Kosongkan jika tetap menggunakan logo lama.
                        Format JPG, JPEG, PNG, atau WEBP, maksimal 4 MB.
                    </small>
                </div>
            </div>

            {{-- Foto Sekolah --}}
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="foto" class="form-label">
                        Ganti Foto Sekolah
                    </label>

                    @if ($profil->foto)
                        <div class="mb-2">
                            <img
                                src="{{ asset('uploads/profil/' . $profil->foto) }}"
                                class="thumb-wide"
                                alt="Foto sekolah {{ $profil->nama_sekolah }}"
                            >
                        </div>
                    @endif

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
                        Kosongkan jika foto tidak ingin diganti.
                        Format JPG, JPEG, PNG, atau WEBP, maksimal 4 MB.
                    </small>
                </div>
            </div>

            {{-- Deskripsi --}}
            <div class="col-12">
                <label for="deskripsi" class="form-label">Deskripsi</label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    class="form-control @error('deskripsi') is-invalid @enderror"
                    rows="5"
                >{{ old('deskripsi', $profil->deskripsi) }}</textarea>

                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-4">
            <a href="{{ route('admin.profil') }}" class="btn btn-light">
                Kembali
            </a>

            <button type="submit" class="btn btn-school">
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>

@endsection
