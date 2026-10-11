<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Informasi | <?php echo e($profil->nama_sekolah ?? 'MTs Al-Hidayah Bojongnangka'); ?></title>
    
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

        /* STYLING BADGE & SECTION */
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

        /* CARD BERITA STYLING */
        .card-news {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            background: #fff;
            transition: transform 0.2s;
        }
        .card-news:hover {
            transform: translateY(-4px);
        }
        .news-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
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
                <a href="<?php echo e(route('public.ekstrakulikuler')); ?>">Ekstrakurikuler</a>
                <a href="<?php echo e(route('public.galeri')); ?>">Galeri</a>
                <a href="<?php echo e(route('public.berita')); ?>" class="active">Berita</a>
            </div>
        </div>
    </nav>

    <!-- 3. PAGE HEADER -->
    <section class="page-header">
        <div class="container">
            <h2 class="fw-bold text-white mb-2"><i class="mdi mdi-newspaper text-yellow me-2"></i> Berita & Kegiatan Sekolah</h2>
            <p class="text-white-50 mb-3" style="font-size: 15px;">Informasi, pengumuman, dan berita seputar kegiatan MTs Al-Hidayah Bojongnangka.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="font-size: 13px;">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="text-yellow text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 4. KONTEN BERITA -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                
                <!-- LIST BERITA UTAMA -->
                <div class="col-lg-8">
                    <div class="row g-4">
                        <?php $__empty_1 = true; $__currentLoopData = $berita ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-6">
                            <div class="card card-news h-100 d-flex flex-column">
                                <?php if(!empty($item->gambar)): ?>
                                    <img src="<?php echo e(asset('uploads/berita/' . $item->gambar)); ?>" class="news-img" alt="<?php echo e($item->judul); ?>">
                                <?php else: ?>
                                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=500&auto=format&fit=crop" class="news-img" alt="Gambar Berita">
                                <?php endif; ?>
                                <div class="card-body p-4 d-flex flex-column">
                                    <small class="text-muted mb-2 d-block">
                                        <i class="mdi mdi-calendar-blank text-green me-1"></i> <?php echo e(\Carbon\Carbon::parse($item->created_at ?? now())->format('d M Y')); ?>

                                    </small>
                                    <h5 class="fw-bold text-dark mb-2" style="font-size: 17px; line-height: 1.4;"><?php echo e($item->judul); ?></h5>
                                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                                        <?php echo e(Str::limit(strip_tags($item->konten ?? $item->isi), 110)); ?>

                                    </p>
                                    <a href="<?php echo e(url('/berita/' . $item->id)); ?>" class="text-green fw-bold text-decoration-none small mt-auto">
                                        Baca selengkapnya <i class="mdi mdi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Belum ada berita yang dipublikasikan.</p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- PAGINATION -->
                    <div class="d-flex justify-content-center mt-5">
                        <?php if(isset($berita) && method_exists($berita, 'links')): ?>
                            <?php echo e($berita->links('pagination::bootstrap-5')); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <!-- SIDEBAR KANAN -->
                <div class="col-lg-4">
                    <!-- WIDGET PENCARIAN -->
                    <div class="card card-news p-4 mb-4 border">
                        <h6 class="fw-bold text-dark mb-3"><i class="mdi mdi-magnify text-green me-1"></i> Cari Berita</h6>
                        <form action="<?php echo e(route('public.berita')); ?>" method="GET">
                            <div class="input-group">
                                <input type="text" name="cari" class="form-control form-control-sm" placeholder="Kata kunci berita..." value="<?php echo e(request('cari')); ?>">
                                <button class="btn btn-green btn-sm" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- WIDGET TENTANG SEKOLAH RINGKAS -->
                    <div class="card card-news p-4 border text-center">
                        <img src="<?php echo e(asset('images/logo_mts.jpg')); ?>" class="mx-auto mb-3" style="width: 70px; height: 70px; object-fit: contain;" alt="Logo MTs">
                        <h6 class="fw-bold text-dark mb-1">MTs Al-Hidayah</h6>
                        <p class="text-muted small mb-3">Sampaikan saran, masukan, atau pertanyaan mengenai informasi sekolah melalui kontak resmi kami.</p>
                        <a href="<?php echo e(route('public.profil')); ?>" class="btn btn-outline-dark btn-sm rounded-pill w-100">
                            Profil Sekolah
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. FOOTER UTAMA -->
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
</html><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/public/berita.blade.php ENDPATH**/ ?>