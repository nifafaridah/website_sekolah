<?php $__env->startSection('title', 'Profil Sekolah'); ?>

<?php $__env->startSection('content'); ?>

<div class="page-head">
    <div>
        <h2>Profil Sekolah</h2>
        <p>Identitas resmi MTS Alhidayah Bojongnangka.</p>
    </div>

    <?php if($profil): ?>
        <a
            href="<?php echo e(route('profil.edit', ['id' => $profil->id_profil])); ?>"
            class="btn btn-school"
        >
            <i class="mdi mdi-pencil me-1"></i>
            Edit Profil
        </a>
    <?php else: ?>
        <a href="<?php echo e(route('profil.create')); ?>" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Profil
        </a>
    <?php endif; ?>
</div>

<?php if($profil): ?>

    <div class="row g-4">

        
        <div class="col-lg-4">
            <div class="card-school p-4 text-center h-100">

                <?php if($profil->logo): ?>
                    <img
                        src="<?php echo e(asset('uploads/profil/' . $profil->logo)); ?>"
                        class="photo-large"
                        alt="Logo <?php echo e($profil->nama_sekolah); ?>"
                    >
                <?php else: ?>
                    <img
                        src="<?php echo e(asset('images/logo-sekolah.png')); ?>"
                        class="photo-large"
                        alt="Logo sekolah"
                    >
                <?php endif; ?>

                <h3 class="text-green mt-3">
                    <?php echo e($profil->nama_sekolah); ?>

                </h3>

                <p class="text-muted">
                    <?php echo e($profil->alamat ?: 'Alamat belum diisi'); ?>

                </p>

                <?php if($profil->foto): ?>
                    <img
                        src="<?php echo e(asset('uploads/profil/' . $profil->foto)); ?>"
                        class="photo-school mt-2"
                        alt="Foto sekolah <?php echo e($profil->nama_sekolah); ?>"
                    >
                <?php endif; ?>

                <div class="mt-3">
                    <form
                        action="<?php echo e(route('profil.destroy', ['id' => $profil->id_profil])); ?>"
                        method="POST"
                        onsubmit="return confirm('Hapus profil sekolah ini?')"
                    >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button
                            type="submit"
                            class="btn btn-outline-danger btn-sm"
                        >
                            Hapus Profil
                        </button>
                    </form>
                </div>

            </div>
        </div>

        
        <div class="col-lg-8">
            <div class="card-school p-4 h-100">
                <div class="row g-4">

                    <div class="col-md-6">
                        <strong>Kepala Sekolah</strong>
                        <p class="mb-0">
                            <?php echo e($profil->kepala_sekolah ?: '-'); ?>

                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>NPSN</strong>
                        <p class="mb-0">
                            <?php echo e($profil->npsn ?: '-'); ?>

                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>Kontak</strong>
                        <p class="mb-0">
                            <?php echo e($profil->kontak ?: '-'); ?>

                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>Tahun Berdiri</strong>
                        <p class="mb-0">
                            <?php echo e($profil->tahun_berdiri ?: '-'); ?>

                        </p>
                    </div>

                    <div class="col-12">
                        <strong>Visi &amp; Misi</strong>
                        <p class="mb-0 mt-1" style="white-space: pre-line">
                            <?php echo e($profil->visi_misi ?: '-'); ?>

                        </p>
                    </div>

                    <div class="col-12">
                        <strong>Deskripsi</strong>
                        <p class="mb-0 mt-1" style="white-space: pre-line">
                            <?php echo e($profil->deskripsi ?: '-'); ?>

                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

<?php else: ?>

    
    <div class="card-school empty-state">
        <img
            src="<?php echo e(asset('images/logo-sekolah.png')); ?>"
            class="school-logo-mini mx-auto"
            alt="Logo sekolah"
        >

        <h4 class="mt-3 text-green">
            Profil sekolah belum tersedia
        </h4>

        <p>
            Tambahkan identitas sekolah, logo, dan foto sekolah.
        </p>

        <a href="<?php echo e(route('profil.create')); ?>" class="btn btn-school">
            Tambah Profil Sekolah
        </a>
    </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/admin/profil.blade.php ENDPATH**/ ?>