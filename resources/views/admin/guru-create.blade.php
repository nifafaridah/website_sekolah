@extends('admin_app')

@section('title', 'Tambah Guru')

@section('content')

    {{-- Judul halaman --}}
    <div class="page-head">
        <div>
            <h2>Tambah Guru</h2>
            <p>Tambahkan data guru beserta foto.</p>
        </div>
    </div>

    {{-- Form tambah data guru --}}
    <div class="card-school form-card">
        <form
            action="{{ route('guru.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf

            <div class="row g-3">

                {{-- Nama guru --}}
                <div class="col-md-6">
                    <label for="nama_guru" class="form-label">
                        Nama Guru
                    </label>

                    <input
                        type="text"
                        id="nama_guru"
                        name="nama_guru"
                        class="form-control"
                        value="{{ old('nama_guru') }}"
                        placeholder="Masukkan nama guru"
                        maxlength="100"
                        required
                    >

                    @error('nama_guru')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                {{-- NIP guru --}}
                <div class="col-md-6">
                    <label for="nip" class="form-label">
                        NIP
                    </label>

                    <input
                        type="text"
                        id="nip"
                        name="nip"
                        class="form-control"
                        value="{{ old('nip') }}"
                        placeholder="Masukkan NIP jika ada"
                        maxlength="30"
                    >

                    @error('nip')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                {{-- Mata pelajaran --}}
                <div class="col-md-6">
                    <label for="mapel" class="form-label">
                        Mata Pelajaran
                    </label>

                    <input
                        type="text"
                        id="mapel"
                        name="mapel"
                        class="form-control"
                        value="{{ old('mapel') }}"
                        placeholder="Masukkan mata pelajaran"
                        maxlength="100"
                    >

                    @error('mapel')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                {{-- Foto guru --}}
                <div class="col-md-6">
                    <div class="upload-box">
                        <label for="foto" class="form-label">
                            Foto Guru
                        </label>

                        <input
                            type="file"
                            id="foto"
                            name="foto"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                        >

                        <small class="text-muted">
                            Format JPG, JPEG, PNG, atau WEBP.
                            Ukuran maksimal 2 MB.
                        </small>

                        @error('foto')
                            <small class="text-danger d-block">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

            </div>

            {{-- Tombol aksi --}}
            <div class="mt-4">
                <a
                    href="{{ route('admin.guru') }}"
                    class="btn btn-light"
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-school"
                >
                    <i class="mdi mdi-content-save me-1"></i>
                    Simpan Guru
                </button>
            </div>

        </form>
    </div>

@endsection
