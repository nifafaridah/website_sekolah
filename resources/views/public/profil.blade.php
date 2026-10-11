<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah | {{ $profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka' }}</title>
    
    <!-- Bootstrap 5 CSS & Material Design Icons (MDI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <style>
        :root {
            --green-primary: #1e8f38;   /* Hijau Utama Logo */
            --green-dark: #0e471c;      /* Hijau Tua Topbar/Footer */
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

        /* PAGE HEADER BANNER */
        .page-header {
            background: linear-gradient(rgba(14, 71, 28, 0.90), rgba(14, 71, 28, 0.90)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1400&auto=format&fit=crop') center/cover;
            color: white;
            padding: 50px 0;
        }

        /* SECTION STYLING */
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
        .card-custom { 
            border: none; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
            background: #fff; 
        }
        .table-custom th {
            background-color: var(--green-dark) !important;
            color: #fff !important;
            font-size: 14px;
        }

        /* CUSTOM BUTTONS */
        .btn-green { 
            background-color: var(--green-primary); 
            color: #fff; 
            border: none; 
            font-weight: 600; 
        }
        .btn-green:hover { 
            background-color: var(--green-subtle); 
            color: #fff; 
        }
        .btn-yellow { 
            background-color: var(--yellow-accent); 
            color: var(--green-dark); 
            border: none; 
            font-weight: 700; 
        }
        .btn-yellow:hover { 
            background-color: var(--yellow-hover); 
            color: var(--green-dark); 
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

    <!-- TOP BAR -->
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

    <!-- NAVBAR UTAMA -->
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
                <a href="{{ route('public.profil') }}" class="active">Profil Sekolah</a>
                <a href="{{ route('public.ekstrakulikuler') }}">Ekstrakurikuler</a>
                <a href="{{ route('public.galeri') }}">Galeri</a>
                <a href="{{ route('public.berita') }}">Berita</a>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container">
            <span class="section-badge bg-warning text-dark mb-2">PROFIL SEKOLAH</span>
            <h2 class="fw-bold text-white mb-1">Informasi Lengkap Profil Sekolah</h2>
            <p class="text-white-50 small mb-2">Informasi resmi tentang identitas, visi, misi, fasilitas, dan data MTs Al-Hidayah.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size: 13px;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-yellow text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Profil Sekolah</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- KONTEN UTAMA PROFIL -->
    <section class="py-5">
        <div class="container">
            
            <!-- BAGIAN 1: IDENTITAS & KEPALA SEKOLAH -->
            <div class="row g-4 mb-5">
                <div class="col-lg-8">
                    <div class="card card-custom p-4 h-100">
                        <span class="section-badge">DATA RESMI</span>
                        <h3 class="section-title mb-3">Identitas Sekolah</h3>
                        <p class="text-muted mb-4 small">Data identitas resmi MTs Al-Hidayah Bojongnangka.</p>

                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <tbody>
                                    <tr class="border-bottom"><th class="text-muted py-2" style="width: 35%;">Nama Sekolah</th><td class="fw-bold py-2">: {{ $profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka' }}</td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">NPSN</th><td class="fw-bold py-2">: {{ $profil->npsn ?? '20299999' }}</td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">Akreditasi</th><td class="py-2">: <span class="badge bg-success">Baik (B)</span></td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">Alamat Sekolah</th><td class="fw-bold py-2">: {{ $profil->alamat ?? 'Bojongnangka, Tasikmalaya, Jawa Barat' }}</td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">Telepon / Kontak</th><td class="fw-bold py-2">: {{ $profil->kontak ?? '(0265) 1234-5678' }}</td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">Email Resmi</th><td class="fw-bold py-2">: info@mts-alhidayah.sch.id</td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">Status Sekolah</th><td class="fw-bold py-2">: <span class="text-green">Swasta</span></td></tr>
                                    <tr class="border-bottom"><th class="text-muted py-2">Tahun Berdiri</th><td class="fw-bold py-2">: {{ $profil->tahun_berdiri ?? '2005' }}</td></tr>
                                    <tr><th class="text-muted py-2">Kepala Sekolah</th><td class="fw-bold py-2">: {{ $profil->kepala_sekolah ?? 'Drs. H. Kepala Sekolah, M.Pd.' }}</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- KANAN: KARTU KEPALA SEKOLAH & STATISTIK -->
                <div class="col-lg-4">
                    <div class="card card-custom p-4 text-white text-center mb-4" style="background-color: var(--green-dark);">
                        <img src="/images/download.jpg" class="rounded-circle mx-auto mb-3 border border-3 border-warning shadow" style="width: 90px; height: 90px; object-fit: cover;" alt="Kepala Sekolah">
                        <h5 class="fw-bold mb-1">{{ $profil->kepala_sekolah ?? 'Drs. H. Kepala Sekolah, M.Pd.' }}</h5>
                        <p class="text-warning small mb-3">Kepala Madrasah</p>
                        <p class="small text-white-50 fst-italic mb-0">"Berkomitmen memberikan pendidikan berkualitas yang mempersiapkan siswa berakhlak mulia dan berprestasi."</p>
                    </div>

                    <div class="card card-custom p-3 border">
                        <h6 class="fw-bold text-dark mb-3"><i class="mdi mdi-chart-bar text-green me-2"></i> Statistik Sekolah</h6>
                        <div class="d-flex justify-content-between py-2 border-bottom text-muted small">
                            <span><i class="mdi mdi-school me-1 text-warning"></i> Total Siswa</span>
                            <span class="fw-bold text-dark">{{ $jumlahSiswa ?? 320 }} Orang</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom text-muted small">
                            <span><i class="mdi mdi-account-tie me-1 text-green"></i> Guru / Pengajar</span>
                            <span class="fw-bold text-dark">{{ $jumlahGuru ?? 24 }} Orang</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom text-muted small">
                            <span><i class="mdi mdi-door me-1 text-primary"></i> Rombongan Belajar</span>
                            <span class="fw-bold text-dark">12 Kelas</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 text-muted small">
                            <span><i class="mdi mdi-certificate me-1 text-success"></i> Akreditasi</span>
                            <span class="fw-bold text-success">Baik (B)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN 2: VISI & MISI SEKOLAH -->
            <div class="card card-custom p-4 mb-5">
                <div class="text-center mb-4">
                    <span class="section-badge">ARAH & TUJUAN</span>
                    <h3 class="section-title">Visi & Misi Sekolah</h3>
                </div>
                <div class="row g-4">
                    <div class="col-md-5">
                        <div class="p-4 bg-light rounded-4 h-100 border-start border-4 border-success">
                            <h4 class="fw-bold text-dark mb-3"><i class="mdi mdi-eye text-green me-2"></i> Visi</h4>
                            <p class="text-muted mb-0 fst-italic" style="line-height: 1.8;">
                                "{{ $profil->visi ?? 'Menjadi madrasah yang unggul dalam ilmu pengetahuan, berprestasi, berlandaskan iman dan takwa, serta berkarakter mulia.' }}"
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="p-4 bg-light rounded-4 h-100 border-start border-4 border-warning">
                            <h4 class="fw-bold text-dark mb-3"><i class="mdi mdi-target text-warning me-2"></i> Misi</h4>
                            <ul class="text-muted ps-3 mb-0 small" style="line-height: 1.8;">
                                <li class="mb-2">Menyelenggarakan pendidikan dan pelatihan berbasis kompetensi berlandaskan nilai-nilai Islami.</li>
                                <li class="mb-2">Mengembangkan potensi siswa melalui pembelajaran aktif, kreatif, efektif, dan menyenangkan (PAIKEM).</li>
                                <li class="mb-2">Membangun karakter siswa yang beriman, disiplin, bertanggung jawab, dan cinta tanah air.</li>
                                <li class="mb-2">Meningkatkan kualitas tenaga pendidik secara berkelanjutan melalui pelatihan profesional.</li>
                                <li class="mb-0">Menyediakan fasilitas pembelajaran modern yang mendukung proses kegiatan belajar mengajar.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN 3: STRUKTUR ORGANISASI -->
            <div class="card card-custom p-4 mb-5 text-center">
                <span class="section-badge">TATA KELOLA</span>
                <h3 class="section-title mb-4">Struktur Organisasi Sekolah</h3>
                
                <div class="row justify-content-center mb-4">
                    <div class="col-md-4">
                        <div class="p-3 text-white rounded-4 shadow-sm" style="background-color: var(--green-dark);">
                            <i class="mdi mdi-account-star fs-3 text-warning"></i>
                            <h6 class="fw-bold mb-1 mt-2">Kepala Madrasah</h6>
                            <small class="text-white-50">{{ $profil->kepala_sekolah ?? 'Drs. H. Kepala Sekolah, M.Pd.' }}</small>
                        </div>
                    </div>
                </div>

                <div class="row g-3 justify-content-center">
                    <div class="col-md-3">
                        <div class="p-3 bg-light border rounded-3">
                            <small class="text-muted d-block">Waka Kurikulum</small>
                            <span class="fw-bold text-dark">Dra. Hj. Siti Nurjanah, M.Pd.</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-light border rounded-3">
                            <small class="text-muted d-block">Waka Kesiswaan</small>
                            <span class="fw-bold text-dark">Budi Santoso, S.Pd., M.M.</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-light border rounded-3">
                            <small class="text-muted d-block">Waka Sarpras</small>
                            <span class="fw-bold text-dark">Ahmad Fauzi, S.T., M.T.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN 4: FASILITAS SEKOLAH -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <span class="section-badge">SARANA & PRASARANA</span>
                    <h3 class="section-title">Fasilitas Sekolah</h3>
                    <p class="text-muted small">Menunjang kenyamanan dan kelancaran proses kegiatan belajar mengajar.</p>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-md-3">
                        <div class="p-4 bg-white border rounded-4 card-custom h-100">
                            <i class="mdi mdi-laptop text-green display-6 mb-2"></i>
                            <h6 class="fw-bold text-dark mb-1">Lab. Komputer</h6>
                            <p class="text-muted small mb-0">Unit komputer modern dengan koneksi internet berkecepatan tinggi.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-4 bg-white border rounded-4 card-custom h-100">
                            <i class="mdi mdi-wifi text-green display-6 mb-2"></i>
                            <h6 class="fw-bold text-dark mb-1">Area Wi-Fi Fiber</h6>
                            <p class="text-muted small mb-0">Akses jaringan internet merata di seluruh lingkungan madrasah.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-4 bg-white border rounded-4 card-custom h-100">
                            <i class="mdi mdi-book-open-page-variant text-green display-6 mb-2"></i>
                            <h6 class="fw-bold text-dark mb-1">Perpustakaan Digital</h6>
                            <p class="text-muted small mb-0">Koleksi buku cetak dan e-book lengkap untuk literasi siswa.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-4 bg-white border rounded-4 card-custom h-100">
                            <i class="mdi mdi-soccer text-green display-6 mb-2"></i>
                            <h6 class="fw-bold text-dark mb-1">Lapangan Olahraga</h6>
                            <p class="text-muted small mb-0">Fasilitas lapangan luas untuk kegiatan olahraga dan ekstrakurikuler.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER UTAMA -->
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
                        <p class="mb-0"><i class="mdi mdi-clock text-yellow me-2"></i> Senin - Sabtu: 07.30