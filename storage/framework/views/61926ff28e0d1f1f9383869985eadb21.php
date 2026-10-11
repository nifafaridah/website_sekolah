<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka'); ?></title>
    
    <!-- Bootstrap 5 CSS & Material Design Icons (MDI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <style>
        :root {
            --green-primary: #1e8f38;   /* Hijau Utama Logo */
            --green-dark: #0e471c;      /* Hijau Tua Topbar/Footer */
            --green-subtle: #16702c;    /* Hijau Statistik */
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

        /* 3. HERO BANNER */
        .hero-section {
            background: linear-gradient(rgba(14, 71, 28, 0.85), rgba(14, 71, 28, 0.85)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1400&auto=format&fit=crop') center/cover;
            color: white;
            padding: 110px 0;
        }

        /* 4. STATISTIK BAR */
        .stats-bar { 
            background-color: var(--green-subtle); 
            color: white; 
            padding: 35px 0; 
            border-top: 4px solid var(--yellow-accent); 
        }
        .stat-box { 
            text-align: center; 
            border-right: 1px solid rgba(255,255,255,0.15); 
        }
        .stat-box:last-child { 
            border-right: none; 
        }
        .stat-num { 
            font-size: 32px; 
            font-weight: 800; 
            color: var(--yellow-accent); 
            margin-bottom: 2px; 
        }
        .stat-lbl { 
            font-size: 11px; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            color: #e8f5e9; 
        }

        /* CARD & UTILITY CLASSES */
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
            transition: transform 0.2s, box-shadow 0.2s; 
        }
        .card-custom:hover { 
            transform: translateY(-4px); 
            box-shadow: 0 8px 25px rgba(0,0,0,0.1); 
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

        /* 11. FOOTER */
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
            <a href="#" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="<?php echo e(asset('images/logo_mts.jpg')); ?>" alt="Logo MTs Al-Hidayah" style="width: 44px; height: 44px; object-fit: contain;">
                <div>
                    <h5 class="mb-0 fw-bold text-dark" style="font-size: 16px;">MTs Al-Hidayah</h5>
                    <small class="text-muted" style="font-size: 10px;">Cerdas - Berakhlak - Berprestasi</small>
                </div>
            </a>
            <div class="nav-menu d-flex align-items-center">
                <a href="<?php echo e(url('/')); ?>" class="active">Beranda</a>
                <a href="<?php echo e(route('public.profil')); ?>">Profil Sekolah</a>
                <a href="<?php echo e(route('public.ekstrakulikuler')); ?>">Ekstrakurikuler</a>
                <a href="<?php echo e(route('public.galeri')); ?>">Galeri</a>
                <a href="<?php echo e(route('public.berita')); ?>">Berita</a>
                <a href="<?php echo e(route('admin.login')); ?>" class="btn btn-yellow btn-sm px-3 ms-3 rounded-pill shadow-sm">
                    <i class="mdi mdi-login me-1"></i> Login Admin
                </a>
            </div>
        </div>
    </nav>

    <!-- 3. HERO BANNER -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge btn-yellow text-uppercase mb-3 px-3 py-2 fw-bold" style="font-size: 11px;">Selamat Datang di MTs Al-Hidayah</span>
                    <h1 class="display-4 fw-bold mb-3" style="font-size: 42px;"><?php echo e($profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka'); ?></h1>
                    <p class="lead opacity-90 mb-4" style="font-size: 15px; line-height: 1.7;">
                        <?php echo e($profil->deskripsi ?? 'Mencetak generasi Islami, berprestasi, berakhlak mulia, serta siap bersaing dalam era teknologi global.'); ?>

                    </p>
                    <div class="d-flex gap-3">
                        <a href="<?php echo e(route('public.profil')); ?>" class="btn btn-yellow px-4 py-2 rounded-pill shadow-sm">
                            Profil Sekolah <i class="mdi mdi-arrow-right ms-1"></i>
                        </a>
                        <!-- <a href="<?php echo e(route('admin.login')); ?>" class="btn btn-outline-light fw-bold px-4 py-2 rounded-pill">
                            Daftar PPDB
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- 4. STATISTIK COUNTER -->
    <div class="stats-bar">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahSiswa ?? 320); ?></div>
                    <div class="stat-lbl">Jumlah Siswa</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahGuru ?? 24); ?></div>
                    <div class="stat-lbl">Tenaga Pendidik</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num">48</div>
                    <div class="stat-lbl">Prestasi & Penghargaan</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahEkskul ?? 8); ?></div>
                    <div class="stat-lbl">Ekstrakurikuler</div>
                </div>
            </div>
        </div>
    </div>

    <!-- SAMBUTAN KEPALA MADRASAH -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-4">
                    <div class="card card-custom p-3 border text-center shadow-sm">
                        <?php
                            // Mengecek berbagai kemungkinan nama kolom foto kepala madrasah di database
                            $fotoKepala = $profil->foto_kepala ?? $profil->kepala_foto ?? $profil->gambar ?? null;
                        ?>

                        <?php if(!empty($fotoKepala)): ?>
                            <img src="<?php echo e(asset('uploads/profil/' . $fotoKepala)); ?>" class="img-fluid rounded-3 mb-3 w-100" style="height: 320px; object-fit: cover;" alt="<?php echo e($profil->nama_kepala ?? 'Kepala Madrasah'); ?>">
                        <?php else: ?>
                            <!-- Fallback Foto Default jika belum di-upload -->
                            <img src="/images/download.jpg" class="img-fluid rounded-3 mb-3 w-100" style="height: 320px; object-fit: cover;" alt="Kepala Madrasah">
                        <?php endif; ?>

                        <h5 class="fw-bold text-dark mb-1"><?php echo e($profil->nama_kepala ?? 'Titim Fatimah, S.Pd.'); ?></h5>
                        <p class="text-muted small mb-0"><?php echo e($profil->jabatan_kepala ?? 'Kepala MTs Al-Hidayah'); ?></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="section-badge">SAMBUTAN PIMPINAN</span>
                    <h2 class="section-title">Sambutan Kepala Madrasah</h2>
                    <blockquote class="text-muted fst-italic mb-3">
                        "Assalamu'alaikum Warahmatullahi Wabarakatuh, Salam Sejahtera Bagi Kita Semua."
                    </blockquote>
                    <p class="text-muted small mb-4" style="line-height: 1.8;">
                        <?php echo e($profil->sambutan ?? 'Selamat datang di website resmi MTs Al-Hidayah Bojongnangka. Sebagai lembaga pendidikan berlandaskan nilai-nilai Islami, kami berkomitmen mencetak lulusan yang tidak hanya terampil dan berilmu, tetapi juga memiliki integritas moral serta akhlakul karimah yang kokoh.'); ?>

                    </p>
                    <a href="<?php echo e(route('public.profil')); ?>" class="btn btn-green px-4 py-2 rounded-pill shadow-sm small fw-bold">
                        Profil Lengkap <i class="mdi mdi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TENTANG KAMI -->
    <section class="py-5 bg-light border-top">
        <div class="container py-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <?php
                        $fotoProfil = $profil->gambar ?? $profil->foto ?? null;
                    ?>

                    <?php if(!empty($fotoProfil)): ?>
                        <img src="<?php echo e(asset('uploads/profil/' . $fotoProfil)); ?>" class="img-fluid rounded-4 shadow-sm w-100" style="height: 380px; object-fit: cover;" alt="Fasilitas Sekolah">
                    <?php else: ?>
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm w-100" style="height: 380px; object-fit: cover;" alt="Fasilitas Sekolah">
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <span class="section-badge">TENTANG KAMI</span>
                    <h2 class="section-title">Membangun Generasi Unggul & Berakhlak Mulia</h2>
                    <p class="text-muted mb-4" style="line-height: 1.7;">
                        MTs Al-Hidayah Bojongnangka berdedikasi menciptakan lingkungan belajar yang kondusif, didukung oleh tenaga pendidik profesional dan fasilitas pembinaan karakter Islami yang lengkap.
                    </p>
                    <ul class="list-unstyled mb-4 text-muted">
                        <li class="mb-2"><i class="mdi mdi-check-circle text-green me-2"></i> Akreditasi Terakreditasi dengan Standar Mutu Baik</li>
                        <li class="mb-2"><i class="mdi mdi-check-circle text-green me-2"></i> Pembinaan Karakter & Tahfidz Al-Qur'an</li>
                        <li class="mb-2"><i class="mdi mdi-check-circle text-green me-2"></i> Fasilitas Lab Komputer & Perpustakaan Lengkap</li>
                        <li class="mb-2"><i class="mdi mdi-check-circle text-green me-2"></i> Beragam Kegiatan Ekstrakurikuler Kebanggaan</li>
                    </ul>
                    <a href="<?php echo e(route('public.profil')); ?>" class="btn btn-outline-dark btn-sm rounded-pill px-4 py-2">
                        Selengkapnya <i class="mdi mdi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

   <!-- PROGRAM & EKSTRAKURIKULER UNGGULAN -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="text-center mb-5">
                <span class="section-badge">KEGIATAN SISWA</span>
                <h2 class="section-title">Ekstrakurikuler Unggulan</h2>
                <p class="text-muted">Mendukung pengembangan bakat dan minat seluruh siswa-siswi secara optimal.</p>
            </div>
            
            <div class="row g-4">
            <?php $__empty_1 = true; $__currentLoopData = $ekstrakulikuler ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4">
                <div class="card card-custom h-100 overflow-hidden border">
                    <?php if(!empty($item->gambar)): ?>
                        <!-- Diubah mengarah ke folder public/uploads/ekstrakulikuler/ -->
                        <img src="<?php echo e(asset('uploads/ekstrakulikuler/' . $item->gambar)); ?>" class="card-img-top" style="height: 180px; object-fit: cover;" alt="<?php echo e($item->nama_ekskul); ?>">
                    <?php else: ?>
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=500&auto=format&fit=crop" class="card-img-top" style="height: 180px; object-fit: cover;" alt="Ekskul">
                    <?php endif; ?>

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-dark mb-2"><?php echo e($item->nama_ekskul); ?></h5>
                        <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                            <?php echo e(Str::limit(strip_tags($item->deskripsi), 90)); ?>

                        </p>
                        <div class="border-top pt-2 text-muted small d-flex justify-content-between align-items-center">
                            <span><i class="mdi mdi-account-tie text-green me-1"></i> Pembina: <strong><?php echo e($item->pembina); ?></strong></span>
                            <span class="badge bg-success text-light"><?php echo e($item->jadwal_latihan); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12 text-center py-4">
                <p class="text-muted">Belum ada data ekstrakurikuler yang ditambahkan.</p>
            </div>
            <?php endif; ?>
        </div>
        </div>
    </section>

    <!-- BERITA & KEGIATAN SEKOLAH -->
    <section class="py-5 bg-light border-top">
        <div class="container py-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <span class="section-badge">INFORMASI TERKINI</span>
                    <h3 class="section-title mb-0">Berita & Kegiatan Sekolah</h3>
                </div>
                <a href="<?php echo e(route('public.berita')); ?>" class="btn btn-outline-dark btn-sm rounded-pill px-3 fw-bold">Semua Berita <i class="mdi mdi-arrow-right"></i></a>
            </div>

            <!-- PASTA / TEMPELKAN KODE KAMU TEPAT DI SINI -->
            <div class="row g-4">
                <?php $__empty_1 = true; $__currentLoopData = $berita ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4">
                    <div class="card card-custom h-100 overflow-hidden border">
                        <!-- Menampilkan Gambar Berita -->
                        <?php
                            $gambarBerita = $item->gambar ?? $item->foto ?? null;
                        ?>

                        <?php if(!empty($gambarBerita)): ?>
                            <img src="<?php echo e(asset('uploads/berita/' . $gambarBerita)); ?>" class="card-img-top" style="height: 180px; object-fit: cover;" alt="<?php echo e($item->judul); ?>">
                        <?php else: ?>
                            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=500&auto=format&fit=crop" class="card-img-top" style="height: 180px; object-fit: cover;" alt="Berita">
                        <?php endif; ?>

                        <div class="card-body d-flex flex-column">
                            <div class="mb-2 text-muted small">
                                <i class="mdi mdi-calendar text-green me-1"></i> 
                                <?php echo e(\Carbon\Carbon::parse($item->created_at ?? $item->tanggal)->format('d M Y')); ?>

                            </div>
                            <h5 class="fw-bold text-dark mb-2"><?php echo e($item->judul); ?></h5>
                            <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                                <?php echo e(Str::limit(strip_tags($item->isi ?? $item->konten), 90)); ?>

                            </p>
                            <a href="<?php echo e(route('public.berita.detail', $item->id ?? $item->slug)); ?>" class="text-green fw-bold small text-decoration-none">
                                Baca selengkapnya <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12 text-center py-4">
                    <p class="text-muted">Belum ada berita yang tersedia.</p>
                </div>
                <?php endif; ?>
            </div>
            <!-- AKHIR TEMPAT TEMPEL KODE -->

        </div>
    </section>

    <!-- 9. GALERI FOTO KEGIATAN -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <span class="section-badge">DOKUMENTASI</span>
                    <h3 class="section-title mb-0">Galeri Foto Kegiatan</h3>
                </div>
                <a href="<?php echo e(route('public.galeri')); ?>" class="btn btn-outline-dark btn-sm rounded-pill px-3 fw-bold">Lihat Semua <i class="mdi mdi-arrow-right"></i></a>
            </div>
            
            <div class="row g-3">
                <?php $__empty_1 = true; $__currentLoopData = $galeri ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4">
                    <?php
                        $fotoGaleri = $item->gambar ?? $item->foto ?? $item->file ?? null;
                    ?>

                    <?php if(!empty($fotoGaleri)): ?>
                        <img src="<?php echo e(asset('uploads/galeri/' . $fotoGaleri)); ?>" class="img-fluid rounded-3 card-custom w-100" style="height: 220px; object-fit: cover;" alt="<?php echo e($item->judul ?? 'Kegiatan'); ?>">
                    <?php else: ?>
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=500&auto=format&fit=crop" class="img-fluid rounded-3 card-custom w-100" style="height: 220px; object-fit: cover;" alt="Kegiatan">
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <!-- Fallback jika data galeri kosong -->
                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=500&auto=format&fit=crop" class="img-fluid rounded-3 card-custom w-100" style="height: 220px; object-fit: cover;" alt="Kegiatan 1">
                </div>
                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=500&auto=format&fit=crop" class="img-fluid rounded-3 card-custom w-100" style="height: 220px; object-fit: cover;" alt="Kegiatan 2">
                </div>
                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=500&auto=format&fit=crop" class="img-fluid rounded-3 card-custom w-100" style="height: 220px; object-fit: cover;" alt="Kegiatan 3">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    

    <!-- 11. FOOTER UTAMA -->
    <footer class="main-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="<?php echo e(asset('images/logo_mts.jpg')); ?>" alt="Logo MTs" style="width: 40px; height: 40px; background: #fff; padding: 3px; border-radius: 8px;">
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
                        <a href="<?php echo e(url('/')); ?>">Beranda</a>
                        <a href="<?php echo e(route('public.profil')); ?>">Profil Sekolah</a>
                        <a href="<?php echo e(route('public.ekstrakulikuler')); ?>">Ekstrakurikuler</a>
                        <a href="<?php echo e(route('public.galeri')); ?>">Galeri</a>
                        <a href="<?php echo e(route('public.berita')); ?>">Berita</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h5>Kontak & Lokasi</h5>
                    <div class="footer-links">
                        <p class="mb-2"><i class="mdi mdi-map-marker text-yellow me-2"></i> Jl. Pesantren Bojongnangka, Tasikmalaya, Jawa Barat</p>
                        <p class="mb-2"><i class="mdi mdi-phone text-yellow me-2"></i> (0265) 1234-5678</p>
                        <p class="mb-2"><i class="mdi mdi-email text-yellow me-2"></i> info@mts-alhidayah.sch.id</p>
                        <p class="mb-0"><i class="mdi mdi-clock text-yellow me-2"></i> Senin - Sabtu: 07.30 - 14.00 WIB</p>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start small text-muted">
                    © <?php echo e(date('Y')); ?> MTs Al-Hidayah Bojongnangka. Hak Cipta Dilindungi.
                </div>
                <div class="col-md-6 text-center text-md-end small text-muted">
                    Dibuat dengan <i class="mdi mdi-heart text-danger"></i> untuk Pendidikan
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/public/home.blade.php ENDPATH**/ ?>