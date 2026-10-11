@extends('admin_app')

@section('title', 'Detail Berita')

@section('content')

    {{-- Judul halaman dan tombol kembali --}}
    <div class="page-head">
        <div>
            <h2>Detail Berita</h2>
            <p>Informasi lengkap berita sekolah.</p>
        </div>

        <a
            href="{{ route('admin.berita') }}"
            class="btn btn-light"
        >
            <i class="mdi mdi-arrow-left me-1"></i>
            Kembali
        </a>
    </div>


    {{-- Kartu detail berita --}}
    <div class="card-school p-4">

        <div class="row g-4">

            {{-- Kolom foto berita --}}
            <div class="col-lg-5">

                @if ($berita->gambar)

                    {{-- Menampilkan foto berita jika tersedia --}}
                    <img
                        src="{{ asset('uploads/berita/' . $berita->gambar) }}"
                        class="detail-image"
                        alt="{{ $berita->judul }}"
                    >

                @else

                    {{-- Menampilkan foto cadangan --}}
                    <img
                        src="{{ asset('images/auth/login-bg.jpg') }}"
                        class="detail-image"
                        alt="Foto berita"
                    >

                @endif

            </div>


            {{-- Kolom informasi berita --}}
            <div class="col-lg-7">

                {{-- Tanggal berita --}}
                <span class="badge-green">
                    {{ optional($berita->tanggal)->format('d M Y') }}
                </span>

                {{-- Judul berita --}}
                <h1 class="h3 mt-3">
                    {{ $berita->judul }}
                </h1>

                {{-- Isi lengkap berita --}}
                <div
                    class="text-muted"
                    style="white-space: pre-line"
                >
                    {{ $berita->isi }}
                </div>


                {{-- Tombol untuk mengedit berita --}}
                <div class="mt-4">

                    <a
                        href="{{ route('berita.edit', $berita->id) }}"
                        class="btn btn-school"
                    >
                        <i class="mdi mdi-pencil me-1"></i>
                        Edit Berita
                    </a>

                    {{-- Tombol kembali ke daftar berita --}}
                    <a
                        href="{{ route('admin.berita') }}"
                        class="btn btn-light"
                    >
                        Kembali ke Daftar
                    </a>

                </div>

            </div>

        </div>

    </div>

@endsection
