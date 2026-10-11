<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri | {{ $profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka' }}</title>
    
    <!-- Bootstrap 5 CSS & Material Design Icons (MDI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <style>
        :root {
            --green-primary: #1e8f38;   /* Hijau Utama Logo */
            --green-dark: #0e471c;      /* Hijau Tua Header/Footer */
            --green-subtle: #16702c;    /* Hijau Sub-elemen */
            --yellow-accent: #f3c614;   /* Kuning Emas Logo */
            --yellow-hover: #e0b40d;
        }

        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f8f9fa; 
            color: #333; 
        }

        /* 1. TOP BAR */
        .top-bar { 
            background-color: var(--green-dark); 
            color: #d1e7dd; 
            font-size: 12px; 
            padding: 8px 0; 
        }
        .top-bar a { 
            color: #d1e7dd; 
            text-decoration: none; 
            transition: color 0.2s; 
        }
        .top-bar a:hover { 
            color: var(--yellow-accent); 
        }

        /* 2. NAVBAR UTAMA */
        .main-navbar { 
            background: #fff; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.08); 
            padding: 12px 0; 
            position: sticky; 
            top: 0; 
            z-index: 1000; 
            border-top: 3px solid var(--green-primary); 
        }
        .nav-menu a { 
            color: #212529; 
            text-decoration: none; 
            font-weight: 600; 
            margin-left: 20px; 
            font-size: 14px; 
            transition: color 0.2s; 
        }
        .nav-menu a:hover, .nav-menu a.active { 
            color: var(--green-primary); 
        }

        /* 3. HERO BANNER HEADER */
        .page-header {
            background: linear-gradient(rgba(14, 71, 28, 0.90), rgba(14, 71, 28, 0.90)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1400&auto=format&fit=crop') center/cover;
            color: white;
            padding: 50px 0;
        }

        /* BADGE & SECTION STYLING */
        .section-badge {
            background-color: #e8f5e9;
            color: var(--green-primary);
            font-weight: 700;
            font-size: 11px;
            letter-spacing: 1px;
            padding: 5px 14px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 10px;
        }
        .section-title { 
            font-weight: 800; 
            color: var(--green-dark); 
            margin-bottom: 12px; 
        }

        /* FILTER BUTTONS */
        .btn-filter {
            border: 2px solid var(--green-primary);
            color: var(--green-primary);
            font-weight: 600;
            padding: 6px 20px;
            border-radius: 8px;
            background: transparent;
            transition: all 0.2s;
        }
        .btn-filter:hover, .btn-filter.active {
            background-color: var(--green-primary);
            color: white;
        }

        /* GALLERY CARD STYLING */
        .card-gallery {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            background: #fff;
            transition: transform 0.2s;
        }
        .card-gallery:hover {
            transform: translateY(-4px);
        }
        .card-gallery img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        /* PAGINATION STYLING */
        .pagination .page-item.active .page-link {
            background-color: var(--green-primary);
            border-color: var(--green-primary);
        }
        .pagination .page-link {
            color: var(--green-primary);
        }

        /* CUSTOM BUTTONS */
        .btn-yellow { 
            background-color: var(--yellow-accent); 
            color: var(--green-dark); 
            border: none; 
            font-weight: 700; 
        }
        .text-green { color: var(--green-primary) !important; }
        .text-yellow { color: var(--yellow-accent) !important; }

        /* FOOTER UTAMA */
        .main-footer { 
            background-color: #082b11; 
            color: #b7d7be; 
            padding: 60px 0 20px; 
            font-size: 14px; 
        }
        .main-footer h5 { 
            color: #fff; 
            font-weight: 700; 
            margin-bottom: 20px; 
            font-size: 16px; 
            border-bottom: 2px solid var(--yellow-accent); 
            display: inline-block; 
            padding-bottom: 5px; 
        }
        .footer-links a { 
            display: block; 
            color: #b7d7be; 
            text-decoration: none; 
            margin-bottom: 10px; 
            transition: color 0.2s; 
        }
        .footer-links a:hover { 
            color: var(--yellow-accent); 
        }
    </style>
</head>
<body>

    <!-- 1. TOP BAR -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center flex-wrap">
                <span><i class="mdi mdi-phone text-yellow me-1"></i> (0265) 1234-5678</span>
                <span class="text-white-50 mx-2">|</span>
                <span><i class="mdi mdi-email text-yellow me-1"></i> info@mts-alhidayah.sch.id</span>
                <span class="text-white-50 mx-2">|</span>
                <span><i class="mdi mdi-map-marker text-yellow me-1"></i> Bojongnangka, Tasikmalaya</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="#" target="_blank"><i class="mdi mdi-facebook text-yellow me-1"></i> Facebook</a>
                <a href="#" target="_blank"><i class="mdi mdi-instagram text-yellow me-1"></i> Instagram</a>
            </div>
        </div>
    </div>

    <!-- 2. NAVBAR UTAMA -->
    <nav class="main-navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ url('/') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="{{ asset('images/logo_mts.jpg') }}" alt="Logo MTs Al-Hidayah" style="width: 44px; height: 44px; object-fit: contain;">
                <div>
                    <h5 class="mb-0 fw-bold text-dark" style="font-size: 16px;">MTs Al-Hidayah</h5>
                    <small class="text-muted" style="font-size: 10px;">Cerdas - Berakhlak - Berprestasi</small>
                </div>
            </a>
            <div class="nav-menu d-flex align-items-center">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ route('public.profil') }}">Profil Sekolah</a>
                <a href="{{ route('public.ekstrakulikuler') }}">Ekstrakurikuler</a>
                <a href="{{ route('public.galeri') }}" class="active">Galeri</a>
                <a href="{{ route('public.berita') }}">Berita</a>
            </div>
        </div>
    </nav>

    <!-- 3. PAGE HEADER -->
    <section class="page-header">
        <div class="container">
            <h2 class="fw-bold text-white mb-2"><i class="mdi mdi-image-multiple text-yellow me-2"></i> Galeri Foto</h2>
            <p class="text-white-50 mb-3" style="font-size: 15px;">Dokumentasi kegiatan belajar, ekskul, prestasi, dan momen berharga di MTs Al-Hidayah.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size: 13px;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-yellow text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 4. SECTION FOTO KEGIATAN SEKOLAH -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="text-center mb-4">
                <span class="section-badge">DOKUMENTASI</span>
                <h2 class="section-title">Foto Kegiatan Sekolah</h2>
                <p class="text-muted small">Klik foto untuk melihat tampilan lebih jelas.</p>
            </div>

            <!-- FILTER KATEGORI -->
            <div class="d-flex justify-content-center gap-2 flex-wrap mb-5">
                <button class="btn btn-filter active">Semua</button>
                <button class="btn btn-filter">Akademik</button>
                <button class="btn btn-filter">Ekstrakurikuler</button>
                <button class="btn btn-filter">Fasilitas</button>
                <button class="btn btn-filter">Event</button>
                <button class="btn btn-filter">Prestasi</button>
            </div>

            <!-- GRID GALERI FOTO -->
            <div class="row g-4 mb-4">
                @forelse($galeri ?? [] as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="card card-gallery h-100">
                        @php
                            $fotoGaleri = $item->gambar ?? $item->foto ?? $item->file ?? null;
                        @endphp

                        @if(!empty($fotoGaleri))
                            <img src="{{ asset('uploads/galeri/' . $fotoGaleri) }}" alt="{{ $item->judul ?? 'Galeri Sekolah' }}">
                        @else
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500&auto=format&fit=crop" alt="Foto Galeri">
                        @endif

                        <div class="p-3 text-center mt-auto">
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;">{{ $item->judul ?? 'Kegiatan Sekolah' }}</h6>
                        </div>
                    </div>
                </div>
                @empty
                <!-- DUMMY DATA FOTO JIKA KOSONG -->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-gallery">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=500&auto=format&fit=crop" alt="Gedung Utama">
                        <div class="p-3 text-center">
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;">Gedung Utama MTs Al-Hidayah</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card card-gallery">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=500&auto=format&fit=crop" alt="Kegiatan Belajar">
                        <div class="p-3 text-center">
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;">Kegiatan Belajar Mengajar</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card card-gallery">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=500&auto=format&fit=crop" alt="Kegiatan Ekskul">
                        <div class="p-3 text-center">
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;">Kegiatan Ekstrakurikuler</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card card-gallery">
                        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=500&auto=format&fit=crop" alt="Perpustakaan">
                        <div class="p-3 text-center">
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;">Perpustakaan Digital</h6>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-center mt-4">
                @if(isset($galeri) && method_exists($galeri, 'links'))
                    {{ $galeri->links('pagination::bootstrap-5') }}
                @endif
            </div>

        </div>
    </section>

    <!-- 5. FOOTER UTAMA -->
    <footer class="main-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="{{ asset('images/logo_mts.jpg') }}" alt="Logo MTs" style="width: 40px; height: 40px; background: #fff; padding: 3px; border-radius: 8px;">
                        <h5 class="mb-0 text-white" style="border: none; padding: 0; font-size: 18px;">MTs Al-Hidayah</h5>
                    </div>
                    <p class="small text-muted mb-3">Madrasah Tsanawiyah unggulan yang mendidik generasi berilmu, berakhlak mulia, mandiri, dan berprestasi.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 32px; height: 32px; display: grid; place-items: center;"><i class="mdi mdi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 32px; height: 32px; display: grid; place-items: center;"><i class="mdi mdi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Menu Utama</h5>
                    <div class="footer-links">
                        <a href="{{ url('/') }}">Beranda</a>
                        <a href="{{ route('public.profil') }}">Profil Sekolah</a>
                        <a href="{{ route('public.ekstrakulikuler') }}">Ekstrakurikuler</a>
                        <a href="{{ route('public.galeri') }}">Galeri</a>
                        <a href="{{ route('public.berita') }}">Berita</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h5>Kontak & Lokasi</h5>
                    <div class="footer-links">
                        <p class="mb-2"><i class="mdi mdi-map-marker text-yellow me-2"></i> {{ $profil->alamat ?? 'Bojongnangka, Tasikmalaya, Jawa Barat' }}</p>
                        <p class="mb-2"><i class="mdi mdi-phone text-yellow me-2"></i> {{ $profil->kontak ?? '(0265) 1234-5678' }}</p>
                        <p class="mb-2"><i class="mdi mdi-email text-yellow me-2"></i> info@mts-alhidayah.sch.id</p>
                        <p class="mb-0"><i class="mdi mdi-clock text-yellow me-2"></i> Senin - Sabtu: 07.30 - 14.00 WIB</p>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start small text-muted">
                    © {{ date('Y') }} MTs Al-Hidayah Bojongnangka. Hak Cipta Dilindungi.
                </div>
                <div class="col-md-6 text-center text-md-end small text-muted">
                    Dibuat dengan <i class="mdi mdi-heart text-danger"></i> untuk Pendidikan
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>