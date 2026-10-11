<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($profil->nama_sekolah ?? 'MTS Al-Hidayah Bojongnangka'); ?></title>
    
    <!-- CSS Lokal & Bootstrap / MDI Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/school.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; color: #333; margin: 0; }
        
        /* Top Bar */
        .top-bar { background-color: #0b2239; color: #adb5bd; font-size: 12px; padding: 7px 0; }
        .top-bar a { color: #adb5bd; text-decoration: none; margin-left: 15px; }
        .top-bar a:hover { color: #fff; }

        /* Main Navbar */
        .main-navbar { background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 12px 0; position: sticky; top: 0; z-index: 1000; }
        .nav-menu a { color: #333; text-decoration: none; font-weight: 600; margin-left: 22px; font-size: 14px; transition: color 0.2s; }
        .nav-menu a:hover, .nav-menu a.active { color: #0b2239; }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(11,34,57,0.75), rgba(11,34,57,0.75)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1400&auto=format&fit=crop') center/cover;
            color: white;
            padding: 100px 0;
        }

        /* Stats Bar */
        .stats-bar { background-color: #0b2239; color: white; padding: 30px 0; border-top: 4px solid #f0e500; }
        .stat-box { text-align: center; border-right: 1px solid rgba(255,255,255,0.1); }
        .stat-box:last-child { border-right: none; }
        .stat-num { font-size: 30px; font-weight: 800; color: #f0e500; margin-bottom: 2px; }
        .stat-lbl { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: #ced4da; }

        /* Section Styling */
        .section-title { font-weight: 800; color: #0b2239; margin-bottom: 10px; }
        .card-custom { border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: #fff; transition: transform 0.2s; }
        .card-custom:hover { transform: translateY(-3px); }

        /* Footer */
        .main-footer { background-color: #08192b; color: #adb5bd; padding: 50px 0 20px; font-size: 14px; }
        .main-footer h5 { color: #fff; font-weight: 700; margin-bottom: 20px; font-size: 16px; border-bottom: 2px solid #f0e500; display: inline-block; padding-bottom: 5px; }
        .footer-links a { display: block; color: #adb5bd; text-decoration: none; margin-bottom: 10px; transition: color 0.2s; }
        .footer-links a:hover { color: #fff; }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <span><i class="mdi mdi-phone me-1"></i> (0265) 1234-5678</span>
                <span><i class="mdi mdi-email me-1"></i> info@mts-alhidayah.sch.id</span>
                <span><i class="mdi mdi-map-marker me-1"></i> Bojongnangka, Tasikmalaya</span>
            </div>
            <div>
                <a href="#"><i class="mdi mdi-facebook"></i> Facebook</a>
                <a href="#"><i class="mdi mdi-instagram"></i> Instagram</a>
            </div>
        </div>
    </div>

    <!-- NAVBAR UTAMA -->
    <nav class="main-navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="<?php echo e(asset('images/logo_mts.jpg')); ?>" alt="Logo" style="width: 44px; height: 44px; object-fit: contain;">
                <div>
                    <h5 class="mb-0 fw-bold text-dark" style="font-size: 16px;">MTS Al-Hidayah</h5>
                    <small class="text-muted" style="font-size: 10px;">Cerdas - Berakhlak - Berprestasi</small>
                </div>
            </a>
            <div class="nav-menu d-flex align-items-center">
                <a href="<?php echo e(url('/')); ?>" class="active">Beranda</a>
                <a href="<?php echo e(route('public.profil')); ?>">Profil Sekolah</a>
                <a href="<?php echo e(route('public.ekstrakulikuler')); ?>">Ekstrakurikuler</a>
                <a href="<?php echo e(route('public.galeri')); ?>">Galeri</a>
                <a href="<?php echo e(route('public.berita')); ?>">Berita</a>
                <a href="<?php echo e(route('admin.login')); ?>" class="btn btn-warning btn-sm fw-bold px-3 ms-3 text-dark rounded-pill">
                    <i class="mdi mdi-login me-1"></i> Login Admin
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2 fw-bold text-uppercase" style="font-size: 11px;">Selamat Datang di Website Resmi</span>
                    <h1 class="display-4 fw-bold mb-3" style="font-size: 40px;"><?php echo e($profil->nama_sekolah ?? 'MTS Al-Hidayah Bojongnangka'); ?></h1>
                    <p class="lead opacity-90 mb-4" style="font-size: 15px; line-height: 1.6;">
                        <?php echo e($profil->deskripsi ?? 'Membangun generasi unggul dalam pencapaian akademik dan teknologi, serta memiliki fondasi keimanan, ketakwaan, dan akhlak mulia yang kokoh.'); ?>

                    </p>
                    <div class="d-flex gap-3">
                        <a href="<?php echo e(route('public.profil')); ?>" class="btn btn-warning fw-bold px-4 py-2 text-dark rounded-pill shadow-sm">
                            Profil Sekolah <i class="mdi mdi-arrow-right ms-1"></i>
                        </a>
                        <a href="<?php echo e(route('public.berita')); ?>" class="btn btn-outline-light fw-bold px-4 py-2 rounded-pill">
                            Berita Terbaru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATISTIK BAR -->
    <div class="stats-bar">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahSiswa ?? 3); ?></div>
                    <div class="stat-lbl">Jumlah Siswa</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahGuru ?? 5); ?></div>
                    <div class="stat-lbl">Tenaga Pendidik</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahBerita ?? 3); ?></div>
                    <div class="stat-lbl">Berita & Informasi</div>
                </div>
                <div class="col-6 col-md-3 stat-box">
                    <div class="stat-num"><?php echo e($jumlahEkskul ?? 6); ?></div>
                    <div class="stat-lbl">Ekstrakurikuler</div>
                </div>
            </div>
        </div>
    </div>

    <!-- SAMBUTAN KEPALA SEKOLAH -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-4 text-center">
                    <div class="p-3 bg-light rounded-4 shadow-sm border">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=500&auto=format&fit=crop" alt="Kepala Sekolah" class="img-fluid rounded-3 mb-3" style="height: 280px; width: 100%; object-fit: cover;">
                        <h5 class="fw-bold mb-1 text-dark">Drs. H. Kepala Sekolah, M.Pd.</h5>
                        <small class="text-muted">Kepala Madrasah</small>
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="badge bg-light text-success border mb-2 px-3 py-1 fw-bold">SAMBUTAN PIMPINAN</span>
                    <h2 class="section-title mb-3">Sambutan Kepala Madrasah</h2>
                    <p class="text-muted fst-italic mb-3">"Assalamu'alaikum Warahmatullahi Wabarakatuh, Salam Sejahtera bagi Kita Semua."</p>
                    <p class="text-muted" style="line-height: 1.7;">
                        Selamat datang di website resmi MTs Al-Hidayah Bojongnangka. Kami berkomitmen mencetak siswa yang tidak hanya unggul dalam ilmu pengetahuan dan teknologi, tetapi juga memiliki integritas, kedisiplinan, serta akhlakul karimah yang kuat. Melalui pembinaan karakter dan kegiatan ekstrakurikuler, kami mendampingi siswa untuk mengembangkan potensinya secara optimal.
                    </p>
                    <div class="mt-4">
                        <a href="<?php echo e(route('public.profil')); ?>" class="btn btn-dark btn-sm rounded-pill px-4 py-2 fw-semibold">Profil Lengkap <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA TERBARU -->
    <section class="py-5 bg-light border-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <span class="text-success fw-bold text-uppercase small">Informasi Terkini</span>
                    <h3 class="section-title mb-0">Berita & Kegiatan Sekolah</h3>
                </div>
                <a href="<?php echo e(route('public.berita')); ?>" class="btn btn-outline-dark btn-sm rounded-pill px-3 fw-bold">Semua Berita <i class="mdi mdi-arrow-right"></i></a>
            </div>
            
            <div class="row g-4">
                <?php $__empty_1 = true; $__currentLoopData = $berita ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <div class="card-body">
                            <span class="badge bg-success mb-2 small"><?php echo e($item->tanggal ?? 'Terbaru'); ?></span>
                            <h5 class="fw-bold text-dark mb-2" style="font-size: 17px;"><?php echo e($item->judul); ?></h5>
                            <p class="text-muted small mb-3"><?php echo e(Str::limit(strip_tags($item->konten), 90)); ?></p>
                            <a href="<?php echo e(url('/berita/' . $item->id)); ?>" class="text-success fw-bold text-decoration-none small">Baca Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12 text-center py-4">
                    <p class="text-muted">Belum ada berita yang dipublikasikan.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- BANNER PPDB -->
    <section class="py-4" style="background-color: #f0e500;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <h4 class="fw-bold text-dark mb-1"><i class="mdi mdi-school me-2"></i> Pendaftaran Peserta Didik Baru (PPDB) Tahun Ajaran <?php echo e(date('Y')); ?>/<?php echo e(date('Y')+1); ?></h4>
                    <p class="mb-0 text-dark opacity-80 small">Kuota terbatas! Segera daftarkan diri Anda dan raih masa depan cerah bersama MTs Al-Hidayah Bojongnangka.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="<?php echo e(route('admin.login')); ?>" class="btn btn-dark fw-bold px-4 py-2 rounded-pill shadow-sm">Daftar Sekarang <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="main-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="<?php echo e(asset('images/logo_mts.jpg')); ?>" alt="Logo" style="width: 40px; height: 40px; background: #fff; padding: 3px; border-radius: 8px;">
                        <h5 class="mb-0 text-white" style="border: none; padding: 0; font-size: 18px;">MTS Al-Hidayah</h5>
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
                        <p class="mb-2"><i class="mdi mdi-map-marker text-warning me-2"></i> Jl. Pesantren Bojongnangka, Tasikmalaya, Jawa Barat</p>
                        <p class="mb-2"><i class="mdi mdi-phone text-warning me-2"></i> (0265) 1234-5678</p>
                        <p class="mb-2"><i class="mdi mdi-email text-warning me-2"></i> info@mts-alhidayah.sch.id</p>
                        <p class="mb-0"><i class="mdi mdi-clock text-warning me-2"></i> Senin - Sabtu: 07.30 - 14.00 WIB</p>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start small text-muted">
                    © <?php echo e(date('Y')); ?> MTS Al-Hidayah Bojongnangka. Hak Cipta Dilindungi.
                </div>
                <div class="col-md-6 text-center text-md-end small text-muted">
                    Dibuat dengan <i class="mdi mdi-heart text-danger"></i> untuk Pendidikan
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/public/home.blade.php ENDPATH**/ ?>