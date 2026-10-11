<!DOCTYPE html>
<html lang="id">

<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $__env->yieldContent('title', $profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka'); ?>
    </title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css"
          rel="stylesheet">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --navy: #17365d;
            --navy-dark: #102744;
            --gold: #d8a93b;
            --light: #f5f7fb;
            --text: #333333;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: var(--text);
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        .site-nav {
            background: #ffffff;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            padding: 12px 0;
            z-index: 1000;
        }

        .navbar-brand img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .navbar-brand strong {
            display: block;
            color: var(--navy);
            font-size: 15px;
            font-weight: 700;
        }

        .navbar-brand small {
            display: block;
            color: #777777;
            font-size: 10px;
        }

        .site-nav .nav-link {
            color: #333333;
            font-size: 13px;
            font-weight: 500;
            padding: 10px 13px !important;
            transition: 0.3s;
        }

        .site-nav .nav-link:hover,
        .site-nav .nav-link.active {
            color: var(--gold);
        }

        .navbar-toggler {
            border: 1px solid #dddddd;
            padding: 6px 10px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* KONTEN */
        main {
            min-height: 65vh;
        }

        .section-title {
            color: var(--navy);
            font-weight: 700;
        }

        /* FOOTER */
        .site-footer {
            background: var(--navy-dark);
            color: #ffffff;
            padding: 35px 0 20px;
            margin-top: 50px;
        }

        .site-footer h5 {
            color: var(--gold);
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .site-footer p {
            color: #e0e6ef;
            font-size: 13px;
            line-height: 1.8;
            margin-bottom: 8px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            margin-top: 25px;
            padding-top: 15px;
            text-align: center;
            color: #cbd3df;
            font-size: 12px;
        }

        @media (max-width: 991px) {
            .site-nav .navbar-nav {
                padding-top: 12px;
            }

            .site-nav .nav-link {
                padding: 10px 0 !important;
            }

            .navbar-brand strong {
                font-size: 13px;
            }

            .navbar-brand small {
                font-size: 9px;
            }
        }
    </style>

    <link rel="stylesheet" href="<?php echo e(asset('css/school.css')); ?>?v=2">

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>

    
    <nav class="navbar navbar-expand-lg site-nav sticky-top">
        <div class="container">

            
            <a class="navbar-brand d-flex align-items-center gap-2"
               href="<?php echo e(route('public.dashboard')); ?>">

                <img
                    src="<?php echo e(isset($profil) && $profil && $profil->logo
                        ? asset('uploads/profil/' . $profil->logo)
                        : asset('images/logo-sekolah.png')); ?>"
                    alt="Logo sekolah">

                <span>
                    <strong>
                        <?php echo e($profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka'); ?>

                    </strong>

                    <small>Cerdas · Berakhlak · Berprestasi</small>
                </span>
            </a>

            
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                    aria-controls="mainNav"
                    aria-expanded="false"
                    aria-label="Buka menu navigasi">

                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="mainNav">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo e(route('public.dashboard')); ?>">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo e(route('public.profil')); ?>">
                            Profil Sekolah
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo e(route('public.ekstrakulikuler')); ?>">
                            Ekstrakurikuler
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo e(route('public.galeri')); ?>">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo e(route('public.berita')); ?>">
                            Berita
                        </a>
                    </li>

                    
                </ul>

            </div>
        </div>
    </nav>

    
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <footer class="site-footer">
        <div class="container">

            <div class="row g-4">

                <div class="col-md-6">
                    <h5>
                        <?php echo e($profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka'); ?>

                    </h5>

                    <p>
                        <?php echo e($profil->deskripsi ?? 'MTS Alhidayah Bojongnangka merupakan sekolah yang mengembangkan ilmu pengetahuan, keterampilan, karakter, dan prestasi peserta didik.'); ?>

                    </p>
                </div>

                <div class="col-md-6">
                    <h5>Informasi Kontak</h5>

                    <p>
                        <i class="mdi mdi-map-marker-outline"></i>
                        <?php echo e($profil->alamat ?? 'Alamat sekolah belum tersedia.'); ?>

                    </p>

                    <p>
                        <i class="mdi mdi-phone-outline"></i>
                        <?php echo e($profil->telepon ?? 'Kontak sekolah belum tersedia.'); ?>

                    </p>

                    <p>
                        <i class="mdi mdi-email-outline"></i>
                        <?php echo e($profil->email ?? 'Email sekolah belum tersedia.'); ?>

                    </p>
                </div>

            </div>

            <div class="footer-bottom">
                &copy; <?php echo e(date('Y')); ?>

                <?php echo e($profil->nama_sekolah ?? 'MTS Alhidayah Bojongnangka'); ?>.
                Semua Hak Dilindungi.
            </div>

        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/public/layout.blade.php ENDPATH**/ ?>