@extends('admin_app')

@section('title', 'Edit Guru')

@section('content')

<div class="page-head">
    <div>
        <h2>Edit Guru</h2>
        <p>Perbarui data guru dan ganti foto bila diperlukan.</p>
    </div>
</div>

<div class="card-school form-card">
    <form
        action="{{ route('guru.update', ['id' => $guru->id]) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div class="row g-3">

            {{-- Nama Guru --}}
            <div class="col-md-6">
                <label for="nama_guru" class="form-label">Nama Guru</label>
                <input
                    type="text"
                    id="nama_guru"
                    name="nama_guru"
                    class="form-control @error('nama_guru') is-invalid @enderror"
                    value="{{ old('nama_guru', $guru->nama_guru) }}"
                    maxlength="100"
                    required
                >

                @error('nama_guru')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- NIP --}}
            <div class="col-md-6">
                <label for="nip" class="form-label">NIP</label>
                <input
                    type="text"
                    id="nip"
                    name="nip"
                    class="form-control @error('nip') is-invalid @enderror"
                    value="{{ old('nip', $guru->nip) }}"
                    maxlength="30"
                >

                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Mata Pelajaran --}}
            <div class="col-md-6">
                <label for="mapel" class="form-label">Mata Pelajaran</label>
                <input
                    type="text"
                    id="mapel"
                    name="mapel"
                    class="form-control @error('mapel') is-invalid @enderror"
                    value="{{ old('mapel', $guru->mapel) }}"
                    maxlength="100"
                >

                @error('mapel')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Foto Guru --}}
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="foto" class="form-label">Ganti Foto</label>

                    @if ($guru->foto)
                        <div class="mb-2">
                            <img
                                src="{{ asset('uploads/guru/' . $guru->foto) }}"
                                class="thumb"
                                alt="Foto {{ $guru->nama_guru }}"
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
                        Format JPG, JPEG, PNG, atau WEBP, maksimal 2 MB.
                    </small>
                </div>
            </div>

        </div>

        {{-- Tombol Aksi --}}
        <div class="mt-4">
            <a href="{{ route('admin.guru') }}" class="btn btn-light">
                Kembali
            </a>

            <button type="submit" class="btn btn-school">
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>

@endsection
