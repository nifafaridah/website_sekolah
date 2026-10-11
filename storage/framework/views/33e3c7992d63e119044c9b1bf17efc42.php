<?php $__env->startSection('title','Dashboard Admin'); ?>
<?php $__env->startSection('content'); ?>
<div class="dashboard-hero">
    <img src="<?php echo e(asset('images/logo-sekolah.png')); ?>" class="dashboard-logo" alt="Logo MTS Alhidayah">
    <h1>Selamat datang, <?php echo e(auth()->user()->name ?? 'Admin'); ?> 👋</h1>
    <p>Kelola informasi MTS Alhidayah Bojongnangka dari satu dashboard.</p>
</div>
<div class="dashboard-stats">
<a class="dashboard-stat" href="<?php echo e(route('admin.guru')); ?>"><div class="stat-top"><div><div class="stat-label">Guru</div><div class="stat-number"><?php echo e($jumlahGuru); ?></div></div><div class="stat-icon-box"><i class="mdi mdi-account-tie"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
<a class="dashboard-stat" href="<?php echo e(route('admin.siswa')); ?>"><div class="stat-top"><div><div class="stat-label">Siswa</div><div class="stat-number"><?php echo e($jumlahSiswa); ?></div></div><div class="stat-icon-box"><i class="mdi mdi-account-group"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
<a class="dashboard-stat" href="<?php echo e(route('admin.berita')); ?>"><div class="stat-top"><div><div class="stat-label">Berita</div><div class="stat-number"><?php echo e($jumlahBerita); ?></div></div><div class="stat-icon-box"><i class="mdi mdi-newspaper"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
<a class="dashboard-stat" href="<?php echo e(route('admin.ekstrakulikuler')); ?>"><div class="stat-top"><div><div class="stat-label">Ekstrakurikuler</div><div class="stat-number"><?php echo e($jumlahEkstrakulikuler); ?></div></div><div class="stat-icon-box"><i class="mdi mdi-trophy"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
</div>
<div class="dashboard-grid">
<div class="dashboard-card"><h2>Profil Sekolah</h2><p>Identitas utama sekolah.</p><?php if($profil): ?><div class="profile-flex"><?php if($profil->logo): ?><img src="<?php echo e(asset('uploads/profil/'.$profil->logo)); ?>" alt="Logo"><?php else: ?><img src="<?php echo e(asset('images/logo-sekolah.png')); ?>" alt="Logo"><?php endif; ?><div class="profile-info"><h3><?php echo e($profil->nama_sekolah); ?></h3><p><b>Kepala Sekolah:</b> <?php echo e($profil->kepala_sekolah ?: '-'); ?></p><p><b>NPSN:</b> <?php echo e($profil->npsn ?: '-'); ?></p><p><b>Alamat:</b> <?php echo e($profil->alamat ?: '-'); ?></p></div></div><?php else: ?><p>Profil sekolah belum tersedia.</p><a href="<?php echo e(route('profil.create')); ?>">Tambah Profil</a><?php endif; ?></div>
<div class="dashboard-card"><h2>Akses Cepat</h2><a class="quick-item" href="<?php echo e(route('guru.create')); ?>"><i class="mdi mdi-account-plus"></i>Tambah Guru</a><a class="quick-item" href="<?php echo e(route('siswa.create')); ?>"><i class="mdi mdi-account-plus"></i>Tambah Siswa</a><a class="quick-item" href="<?php echo e(route('berita.create')); ?>"><i class="mdi mdi-newspaper-plus"></i>Tambah Berita</a><a class="quick-item" href="<?php echo e(route('ekstrakulikuler.create')); ?>"><i class="mdi mdi-trophy-award"></i>Tambah Ekstrakurikuler</a></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>