@extends('admin_app')

@section('title', 'Tambah Foto Galeri')

@section('content')

{{-- Judul halaman --}}
<div class="page-head">
    <div>
        <h2>Tambah Foto Galeri</h2>
        <p>Tambahkan dokumentasi kegiatan sekolah.</p>
    </div>
</div>

{{-- Form tambah foto --}}
<div class="card-school form-card">
    <form
        action="{{ route('galeri.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="row g-3">

            {{-- Input judul --}}
            <div class="col-md-6">
                <label for="judul" class="form-label">Judul</label>

                <input
                    type="text"
                    name="judul"
                    id="judul"
                    class="form-control @error('judul') is-invalid @enderror"
                    value="{{ old('judul') }}"
                    maxlength="100"
                    required
                >

                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input tanggal --}}
            <div class="col-md-6">
                <label for="tanggal" class="form-label">Tanggal</label>

                <input
                    type="date"
                    name="tanggal"
                    id="tanggal"
                    class="form-control @error('tanggal') is-invalid @enderror"
                    value="{{ old('tanggal', date('Y-m-d')) }}"
                    required
                >

                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input keterangan --}}
            <div class="col-12">
                <label for="keterangan" class="form-label">Keterangan</label>

                <textarea
                    name="keterangan"
                    id="keterangan"
                    class="form-control @error('keterangan') is-invalid @enderror"
                    rows="4"
                >{{ old('keterangan') }}</textarea>

                @error('keterangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input file foto --}}
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="file" class="form-label">Foto</label>

                    <input
                        type="file"
                        name="file"
                        id="file"
                        class="form-control @error('file') is-invalid @enderror"
                        accept=".jpg,.jpeg,.png,.webp"
                        required
                    >

                    <small class="text-muted">
                        Format JPG, PNG, atau WEBP. Maksimal 4 MB.
                    </small>

                    @error('file')
                        <div class="text-danger small mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

        </div>

        {{-- Kategori galeri --}}
        <input type="hidden" name="kategori" value="Foto">

        {{-- Tombol aksi --}}
        <div class="mt-4">
            <a href="{{ route('admin.galeri') }}" class="btn btn-light">
                Kembali
            </a>

            <button type="submit" class="btn btn-school">
                <i class="mdi mdi-content-save me-1"></i>
                Simpan Foto
            </button>
        </div>
    </form>
</div>

@endsection
