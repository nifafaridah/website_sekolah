@extends('admin_app')

@section('title', 'Tambah Berita')

@section('content')

    {{-- Judul halaman --}}
    <div class="page-head">
        <div>
            <h2>Tambah Berita</h2>
            <p>Buat berita sekolah dengan foto sampul.</p>
        </div>
    </div>


    {{-- Form untuk menambahkan berita --}}
    <div class="card-school form-card">

        <form
            action="{{ route('berita.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            {{-- Token keamanan Laravel --}}
            @csrf

            <div class="row g-3">

                {{-- Input judul berita --}}
                <div class="col-12">
                    <label for="judul" class="form-label">
                        Judul Berita
                    </label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul') }}"
                        placeholder="Masukkan judul berita"
                        required
                    >

                    {{-- Menampilkan kesalahan validasi judul --}}
                    @error('judul')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- Input tanggal berita --}}
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        class="form-control"
                        value="{{ old('tanggal', date('Y-m-d')) }}"
                        required
                    >

                    {{-- Menampilkan kesalahan validasi tanggal --}}
                    @error('tanggal')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- Input foto berita --}}
                <div class="col-md-6">
                    <div class="upload-box">

                        <label for="gambar" class="form-label">
                            Foto Berita
                        </label>

                        <input
                            type="file"
                            id="gambar"
                            name="gambar"
                            class="form-control"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <small class="text-muted">
                            Format JPG, PNG, atau WEBP. Maksimal 2 MB.
                        </small>

                        {{-- Menampilkan kesalahan validasi foto --}}
                        @error('gambar')
                            <small class="text-danger d-block">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>
                </div>


                {{-- Input isi berita --}}
                <div class="col-12">
                    <label for="isi" class="form-label">
                        Isi Berita
                    </label>

                    <textarea
                        id="isi"
                        name="isi"
                        rows="9"
                        class="form-control"
                        placeholder="Tuliskan isi berita di sini..."
                        required
                    >{{ old('isi') }}</textarea>

                    {{-- Menampilkan kesalahan validasi isi berita --}}
                    @error('isi')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

            </div>


            {{-- Tombol kembali dan simpan --}}
            <div class="mt-4">

                <a
                    href="{{ route('admin.berita') }}"
                    class="btn btn-light"
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-school"
                >
                    <i class="mdi mdi-content-save me-1"></i>
                    Simpan Berita
                </button>

            </div>

        </form>

    </div>

@endsection
