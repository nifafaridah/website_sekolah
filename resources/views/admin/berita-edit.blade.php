@extends('admin_app')

@section('title', 'Edit Berita')

@section('content')

    {{-- Judul halaman --}}
    <div class="page-head">
        <div>
            <h2>Edit Berita</h2>
            <p>Perbarui isi berita atau ganti foto sampul.</p>
        </div>
    </div>


    {{-- Form untuk mengedit berita --}}
    <div class="card-school form-card">

        <form
            action="{{ route('berita.update', $berita->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            {{-- Token keamanan Laravel --}}
            @csrf

            {{-- Mengubah metode POST menjadi PUT --}}
            @method('PUT')

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
                        value="{{ old('judul', $berita->judul) }}"
                        placeholder="Masukkan judul berita"
                        required
                    >

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
                        value="{{ old(
                            'tanggal',
                            optional($berita->tanggal)->format('Y-m-d')
                        ) }}"
                        required
                    >

                    @error('tanggal')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- Bagian foto berita --}}
                <div class="col-md-6">
                    <div class="upload-box">

                        <label for="gambar" class="form-label">
                            Ganti Foto Berita
                        </label>

                        {{-- Menampilkan foto yang sedang digunakan --}}
                        @if ($berita->gambar)
                            <div class="mb-2">
                                <img
                                    src="{{ asset('uploads/berita/' . $berita->gambar) }}"
                                    class="thumb-wide"
                                    alt="Foto berita saat ini"
                                >
                            </div>
                        @endif

                        {{-- Input untuk memilih foto baru --}}
                        <input
                            type="file"
                            id="gambar"
                            name="gambar"
                            class="form-control"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                            Format JPG, PNG, atau WEBP, maksimal 2 MB.
                        </small>

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
                    >{{ old('isi', $berita->isi) }}</textarea>

                    @error('isi')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

            </div>


            {{-- Tombol navigasi dan simpan perubahan --}}
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
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

@endsection
