<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler | <?php echo e($profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka'); ?></title>
    
    <!-- Bootstrap 5 CSS & Material Design Icons (MDI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <style>
        :root {
            --green-primary: #1e8f38;   /* Hijau Utama Logo */
            --green-dark: #0e471c;      /* Hijau Tua Header/Footer */
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

        /* 3. HERO BANNER HEADER */
        .page-header {
            background: linear-gradient(rgba(14, 71, 28, 0.90), rgba(14, 71, 28, 0.90)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1400&auto=format&fit=crop') center/cover;
            color: white;
            padding: 60px 0;
        }

        /* 4. STATISTIK COUNTER BAR */
        .stats-bar { 
            background-color: var(--green-subtle); 
            color: white; 
            padding: 30px 0; 
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
            font-size: 30px; 
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
            transition: transform 0.2s;
        }
        .card-custom:hover {
            transform: translateY(-4px);
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
            <a href="<?php echo e(url('/')); ?>" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="<?php echo e(asset('images/logo_mts.jpg')); ?>" alt="Logo MTs Al-Hidayah" style="width: 44px; height: 44px; object-fit: contain;">
                <div>
                    <h5 class="mb-0 fw-bold text-dark" style="font-size: 16px;">MTs Al-Hidayah</h5>
                    <small class="text-muted" style="font-size: 10px;">Cerdas - Berakhlak - Berprestasi</small>
                </div>
            </a>
            <div class="nav-menu d-flex align-items-center">
                <a href="<?php echo e(url('/')); ?>">Beranda</a>
                <a href="<?php echo e(route('public.profil')); ?>">Profil Sekolah</a>
                <a href="<?php echo e(route('public.ekstrakulikuler')); ?>" class="active">Ekstrakurikuler</a>
                <a href="<?php echo e(route('public.galeri')); ?>">Galeri</a>
                <a href="<?php echo e(route('public.berita')); ?>">Berita</a>
            </div>
        </div>
    </nav>

    <!-- 3. PAGE HEADER -->
    <section class="page-header">
        <div class="container">
            <h2 class="fw-bold text-white mb-2"><i class="mdi mdi-star text-yellow me-2"></i> Ekstrakurikuler</h2>
            <p class="text-white-50 mb-3" style="font-size: 15px;">Kembangkan bakat dan potensi terbaik Anda melalui berbagai kegiatan unggulan.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size: 13px;">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="text-yellow text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Ekstrakurikuler</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 4. STATISTIK EKSKUL BAR -->
    <div class="stats-bar">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahEkskul ?? 12); ?></div>
                    <div class="stat-lbl">Unit Ekskul</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num">280</div>
                    <div class="stat-lbl">Siswa Aktif</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num">35</div>
                    <div class="stat-lbl">Kejuaraan Diraih</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num">14</div>
                    <div class="stat-lbl">Pelatih & Pembina</div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. KONTEN PILIHAN EKSTRAKURIKULER -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="text-center mb-4">
                <span class="section-badge">KEGIATAN UNGGULAN</span>
                <h2 class="section-title">Pilihan Ekstrakurikuler</h2>
            </div>

            <!-- FILTER KATEGORI -->
            <div class="d-flex justify-content-center gap-2 flex-wrap mb-5">
                <button class="btn btn-filter active">Semua</button>
                <button class="btn btn-filter">Olahraga</button>
                <button class="btn btn-filter">Seni & Budaya</button>
                <button class="btn btn-filter">Keagamaan & IT</button>
                <button class="btn btn-filter">Organisasi</button>
            </div>

            <!-- GRID KARTU EKSTRAKURIKULER -->
            <div class="row g-4">
                <?php
                    // Mengecek apakah data ekskul dari controller ada
                    $dataEkskul = $ekstrakulikuler ?? $ekskul ?? [];
                ?>

                <?php $__empty_1 = true; $__currentLoopData = $dataEkskul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4">
                    <div class="card card-custom h-100 overflow-hidden border">
                        <?php
                            $fotoEkskul = $item->foto ?? $item->gambar ?? $item->logo ?? null;
                        ?>

                        <?php if(!empty($fotoEkskul)): ?>
                            <img src="<?php echo e(asset('uploads/ekstrakulikuler/' . $fotoEkskul)); ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="<?php echo e($item->nama ?? $item->nama_ekskul); ?>">
                        <?php else: ?>
                            <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=500&auto=format&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Ekskul">
                        <?php endif; ?>

                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="fw-bold text-dark mb-2"><?php echo e($item->nama ?? $item->nama_ekskul); ?></h5>
                            <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                                <?php echo e(Str::limit(strip_tags($item->deskripsi ?? $item->keterangan), 110)); ?>

                            </p>
                            <div class="border-top pt-2 text-muted small d-flex justify-content-between align-items-center mt-auto">
                                <span><i class="mdi mdi-calendar-range text-green me-1"></i> <?php echo e($item->hari ?? $item->jadwal ?? 'Jadwal Rutin'); ?></span>
                                <span><i class="mdi mdi-clock-outline text-green me-1"></i> <?php echo e($item->jam ?? 'Sore'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <!-- TAMPILAN GAMBAR LOKAL / DIUBAH JIKA DATA KOSONG -->
                <div class="col-md-4">
                    <div class="card card-custom h-100 overflow-hidden border">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=500&auto=format&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Pramuka">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-dark mb-2">Pramuka Wira Nusantara</h5>
                            <p class="text-muted small mb-3 flex-grow-1">Gerakan Pramuka Penegak Ambalan aktif dalam pembentukan kedisiplinan dan kemandirian.</p>
                            <div class="border-top pt-2 text-muted small d-flex justify-content-between">
                                <span><i class="mdi mdi-calendar text-green me-1"></i> Sabtu</span>
                                <span><i class="mdi mdi-clock text-green me-1"></i> 13.30 - 16.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom h-100 overflow-hidden border">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=500&auto=format&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Marching Band">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-dark mb-2">Marching Band / Hadroh</h5>
                            <p class="text-muted small mb-3 flex-grow-1">Ekstrakurikuler seni musik islami dan olah nada memadukan keindahan harmoni.</p>
                            <div class="border-top pt-2 text-muted small d-flex justify-content-between">
                                <span><i class="mdi mdi-calendar text-green me-1"></i> Jumat</span>
                                <span><i class="mdi mdi-clock text-green me-1"></i> 14.00 - 16.30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom h-100 overflow-hidden border">
                        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=500&auto=format&fit=crop" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Futsal">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-dark mb-2">Futsal & Olahraga</h5>
                            <p class="text-muted small mb-3 flex-grow-1">Tim olahraga futsal dan bola voli putra/putri aktif mengikuti kejuaraan daerah.</p>
                            <div class="border-top pt-2 text-muted small d-flex justify-content-between">
                                <span><i class="mdi mdi-calendar text-green me-1"></i> Rabu & Minggu</span>
                                <span><i class="mdi mdi-clock text-green me-1"></i> 15.30 - 17.30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- 6. DAFTAR LENGKAP EKSTRAKURIKULER LIST -->
    <section class="py-5 bg-light border-top">
        <div class="container">
            <h4 class="fw-bold text-dark mb-4"><i class="mdi mdi-format-list-bulleted-square text-green me-2"></i> Daftar Lengkap Ekstrakurikuler</h4>
            <div class="row g-3">
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-volleyball text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">Bola Voli</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-karate text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">Pencak Silat</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-palette text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">Kaligrafi & Seni</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-camera text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">Fotografi & Jurnalistik</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-book-open-variant text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">KIR (Karya Tulis)</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-book-alphabet text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">English Club</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-flag-variant text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">Paskibra</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 bg-white border rounded-3 d-flex align-items-center gap-2">
                        <i class="mdi mdi-book-cross text-green fs-4"></i>
                        <span class="fw-semibold text-dark small">Tahfidz Qur'an</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA BANNER "TERTARIK BERGABUNG?" -->
    <section class="py-5 text-white text-center" style="background-color: var(--green-dark);">
        <div class="container py-2">
            <h3 class="fw-bold mb-2">Tertarik Bergabung?</h3>
            <p class="text-white-50 mb-4 small">Daftarkan diri ke ekstrakurikuler pilihan dan kembangkan potensimu bersama MTs Al-Hidayah.</p>
            <a href="<?php echo e(url('/')); ?>" class="btn btn-yellow px-4 py-2 rounded-pill shadow-sm">
                Kembali ke Beranda <i class="mdi mdi-arrow-right ms-1"></i>
            </a>
        </div>
    </section>

    <!-- 8. FOOTER UTAMA -->
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
                        <p class="mb-2"><i class="mdi mdi-map-marker text-yellow me-2"></i> <?php echo e($profil->alamat ?? 'Bojongnangka, Tasikmalaya, Jawa Barat'); ?></p>
                        <p class="mb-2"><i class="mdi mdi-phone text-yellow me-2"></i> <?php echo e($profil->kontak ?? '(0265) 1234-5678'); ?></p>
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
</html><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/public/ekstrakulikuler.blade.php ENDPATH**/ ?>