
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka' }}</title>

    <link rel="icon" href="{{ asset('images/logo_mts.jpg') }}">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="{{ asset('css/school.css') }}">

    <style>
        .public-hero {
            background:
                linear-gradient(
                    rgba(0, 45, 80, 0.35),
                    rgba(0, 45, 80, 0.35)
                ),
                url("/images/morning%20at%20school.jpg")
                center center / cover no-repeat !important;

            color: white;
            padding: 90px 0;
            position: relative;
            overflow: hidden;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg public-navbar navbar-dark sticky-top">
        <div class="container py-2">

            <a class="navbar-brand d-flex align-items-center fw-bold" href="#">
                <img
                    src="{{ asset('images/logo-sekolah.png') }}"
                    style="width:45px;height:45px;object-fit:contain;background:#fff;border-radius:10px;padding:3px"
                    class="me-2"
                    alt="Logo sekolah">

                {{ $profil->nama_sekolah ?? 'MTS Alhidayah' }}
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#publicNav"
                aria-controls="publicNav"
                aria-expanded="false"
                aria-label="Buka menu navigasi">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="publicNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#berita">Berita</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ekskul">Ekstrakurikuler</a>
                    </li>

                    {{-- Tombol Login Admin di navbar sudah dihapus --}}

                </ul>
            </div>

        </div>
    </nav>

    {{-- HERO --}}
    <section class="public-hero">
        <div class="container position-relative" style="z-index:1">
            <div class="row align-items-center g-5">

                <div class="col-lg-8">

                    <span class="badge bg-light text-success mb-3 px-3 py-2">
                        WEBSITE RESMI SEKOLAH
                    </span>

                    <h1 class="display-4 fw-bold">
                        {{ $profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka' }}
                    </h1>

                    <p class="lead opacity-75 mt-3">
                        {{ $profil->deskripsi ?? 'Website informasi sekolah untuk mengenal profil, guru, siswa, berita, kegiatan, dan dokumentasi sekolah.' }}
                    </p>

                    <a href="#profil" class="btn btn-yellow btn-lg mt-2">
                        Kenali Sekolah
                        <i class="mdi mdi-arrow-down"></i>
                    </a>

                </div>

                <div class="col-lg-4 text-center">
                    <img
                        src="{{ $profil && $profil->logo
                            ? asset('uploads/profil/' . $profil->logo)
                            : asset('images/logo-sekolah.png') }}"
                        class="public-logo"
                        alt="Logo sekolah">
                </div>

            </div>
        </div>
    </section>

    {{-- PROFIL SEKOLAH --}}
    <section id="profil" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="text-green fw-bold">Profil Sekolah</h2>
                <p class="text-muted">
                    Mengenal lebih dekat MTS Alhidayah Bojongnangka.
                </p>
            </div>

            @if($profil)

                <div class="row g-4">

                    <div class="col-lg-4">
                        <div class="public-card bg-white p-4 h-100">

                            <h5 class="text-green">Identitas</h5>

                            <p class="mb-2">
                                <b>Kepala Sekolah:</b><br>
                                {{ $profil->kepala_sekolah ?: '-' }}
                            </p>

                            <p class="mb-2">
                                <b>NPSN:</b><br>
                                {{ $profil->npsn ?: '-' }}
                            </p>

                            <p class="mb-0">
                                <b>Kontak:</b><br>
                                {{ $profil->kontak ?: '-' }}
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="public-card bg-white p-4 h-100">

                            <h5 class="text-green">Visi &amp; Misi</h5>

                            <p style="white-space:pre-line">
                                {{ $profil->visi_misi ?: '-' }}
                            </p>

                            <p class="mb-0">
                                <b>Alamat:</b>
                                {{ $profil->alamat ?: '-' }}
                            </p>

                        </div>
                    </div>

                </div>

            @else

                <div class="alert alert-warning text-center">
                    Profil sekolah belum diisi oleh admin.
                </div>

            @endif

        </div>
    </section>

    {{-- BERITA TERBARU --}}
    <section id="berita" class="py-5 bg-white">
        <div class="container">

            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h2 class="text-green fw-bold mb-1">Berita Terbaru</h2>
                    <p class="text-muted mb-0">
                        Informasi dan kegiatan terbaru sekolah.
                    </p>
                </div>
            </div>

            <div class="row g-4">

                @forelse($berita as $item)

                    <div class="col-md-6 col-lg-4">
                        <article class="public-card bg-white h-100">

                            <img
                                class="public-img"
                                src="{{ $item->gambar
                                    ? asset('uploads/berita/' . $item->gambar)
                                    : asset('images/auth/login-bg.jpg') }}"
                                alt="{{ $item->judul }}">

                            <div class="p-4">

                                <small class="text-success fw-bold">
                                    {{ optional($item->tanggal)->format('d M Y') }}
                                </small>

                                <h5 class="fw-bold mt-2">
                                    {{ $item->judul }}
                                </h5>

                                <p class="text-muted mb-0">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 130) }}
                                </p>

                            </div>
                        </article>
                    </div>

                @empty

                    <div class="col-12 text-center text-muted">
                        Belum ada berita.
                    </div>

                @endforelse

            </div>
        </div>
    </section>

    {{-- EKSTRAKURIKULER --}}
    <section id="ekskul" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="text-green fw-bold">Ekstrakurikuler</h2>
                <p class="text-muted">
                    Kegiatan untuk mengembangkan bakat, minat, dan karakter siswa.
                </p>
            </div>

            <div class="row g-4">

                @forelse($ekstrakulikuler as $item)

                    <div class="col-md-6 col-lg-4">
                        <article class="public-card bg-white h-100">

                            <img
                                class="public-img"
                                src="{{ $item->gambar
                                    ? asset('uploads/ekstrakulikuler/' . $item->gambar)
                                    : asset('images/auth/login-bg.jpg') }}"
                                alt="{{ $item->nama_ekskul }}">

                            <div class="p-4">

                                <h5 class="fw-bold">
                                    {{ $item->nama_ekskul }}
                                </h5>

                                <span class="badge-green">
                                    {{ $item->jadwal_latihan ?: 'Jadwal belum diisi' }}
                                </span>

                                <p class="text-muted mt-3 mb-1">
                                    <b>Pembina:</b>
                                    {{ $item->pembina ?: '-' }}
                                </p>

                                <p class="text-muted mb-0">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi, 120) }}
                                </p>

                            </div>
                        </article>
                    </div>

                @empty

                    <div class="col-12 text-center text-muted">
                        Belum ada data ekstrakurikuler.
                    </div>

                @endforelse

            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="public-footer">
        <div class="container">

            <div class="row g-4">

                <div class="col-md-8">
                    <div class="d-flex align-items-center">

                        <img
                            src="{{ asset('images/logo-sekolah.png') }}"
                            style="width:58px;height:58px;object-fit:contain;background:#fff;border-radius:12px;padding:4px"
                            class="me-3"
                            alt="Logo sekolah">

                        <div>
                            <h5 class="mb-1">
                                {{ $profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka' }}
                            </h5>

                            <p class="mb-0 opacity-75">
                                Sistem Informasi Sekolah
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 text-md-end">
                    <p class="mb-0">
                        &copy; {{ date('Y') }} MTS Alhidayah
                    </p>

                    <small class="opacity-75">Bojongnangka</small>
                </div>

            </div>
        </div>
    </footer>

    {{-- JAVASCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
