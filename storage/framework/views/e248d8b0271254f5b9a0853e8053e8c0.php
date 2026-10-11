<?php $__env->startSection('title', 'Edit Profil Sekolah'); ?>

<?php $__env->startSection('content'); ?>

<div class="page-head">
    <div>
        <h2>Edit Profil Sekolah</h2>
        <p>Perbarui identitas, logo, atau foto sekolah.</p>
    </div>
</div>

<div class="card-school form-card">
    <form
        action="<?php echo e(route('profil.update', ['id' => $profil->id_profil])); ?>"
        method="POST"
        enctype="multipart/form-data"
    >
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row g-3">

            
            <div class="col-md-6">
                <label for="nama_sekolah" class="form-label">
                    Nama Sekolah
                </label>

                <input
                    type="text"
                    id="nama_sekolah"
                    name="nama_sekolah"
                    class="form-control <?php $__errorArgs = ['nama_sekolah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('nama_sekolah', $profil->nama_sekolah)); ?>"
                    maxlength="150"
                    required
                >

                <?php $__errorArgs = ['nama_sekolah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-md-6">
                <label for="kepala_sekolah" class="form-label">
                    Kepala Sekolah
                </label>

                <input
                    type="text"
                    id="kepala_sekolah"
                    name="kepala_sekolah"
                    class="form-control <?php $__errorArgs = ['kepala_sekolah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('kepala_sekolah', $profil->kepala_sekolah)); ?>"
                    maxlength="150"
                >

                <?php $__errorArgs = ['kepala_sekolah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-md-6">
                <label for="npsn" class="form-label">NPSN</label>

                <input
                    type="text"
                    id="npsn"
                    name="npsn"
                    class="form-control <?php $__errorArgs = ['npsn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('npsn', $profil->npsn)); ?>"
                    maxlength="30"
                >

                <?php $__errorArgs = ['npsn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-md-6">
                <label for="kontak" class="form-label">Kontak</label>

                <input
                    type="text"
                    id="kontak"
                    name="kontak"
                    class="form-control <?php $__errorArgs = ['kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('kontak', $profil->kontak)); ?>"
                    maxlength="100"
                >

                <?php $__errorArgs = ['kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>

                <textarea
                    id="alamat"
                    name="alamat"
                    class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    rows="3"
                ><?php echo e(old('alamat', $profil->alamat)); ?></textarea>

                <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-12">
                <label for="visi_misi" class="form-label">
                    Visi &amp; Misi
                </label>

                <textarea
                    id="visi_misi"
                    name="visi_misi"
                    class="form-control <?php $__errorArgs = ['visi_misi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    rows="5"
                ><?php echo e(old('visi_misi', $profil->visi_misi)); ?></textarea>

                <?php $__errorArgs = ['visi_misi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-md-6">
                <label for="tahun_berdiri" class="form-label">
                    Tahun Berdiri
                </label>

                <input
                    type="number"
                    id="tahun_berdiri"
                    name="tahun_berdiri"
                    class="form-control <?php $__errorArgs = ['tahun_berdiri'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('tahun_berdiri', $profil->tahun_berdiri)); ?>"
                    min="1900"
                    max="2100"
                >

                <?php $__errorArgs = ['tahun_berdiri'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="logo" class="form-label">Ganti Logo</label>

                    <?php if($profil->logo): ?>
                        <div class="mb-2">
                            <img
                                src="<?php echo e(asset('uploads/profil/' . $profil->logo)); ?>"
                                class="thumb"
                                alt="Logo <?php echo e($profil->nama_sekolah); ?>"
                            >
                        </div>
                    <?php endif; ?>

                    <input
                        type="file"
                        id="logo"
                        name="logo"
                        class="form-control <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    >

                    <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <small class="text-muted">
                        Kosongkan jika tetap menggunakan logo lama.
                        Format JPG, JPEG, PNG, atau WEBP, maksimal 4 MB.
                    </small>
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="upload-box">
                    <label for="foto" class="form-label">
                        Ganti Foto Sekolah
                    </label>

                    <?php if($profil->foto): ?>
                        <div class="mb-2">
                            <img
                                src="<?php echo e(asset('uploads/profil/' . $profil->foto)); ?>"
                                class="thumb-wide"
                                alt="Foto sekolah <?php echo e($profil->nama_sekolah); ?>"
                            >
                        </div>
                    <?php endif; ?>

                    <input
                        type="file"
                        id="foto"
                        name="foto"
                        class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    >

                    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <small class="text-muted">
                        Kosongkan jika foto tidak ingin diganti.
                        Format JPG, JPEG, PNG, atau WEBP, maksimal 4 MB.
                    </small>
                </div>
            </div>

            
            <div class="col-12">
                <label for="deskripsi" class="form-label">Deskripsi</label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    rows="5"
                ><?php echo e(old('deskripsi', $profil->deskripsi)); ?></textarea>

                <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

        </div>

        
        <div class="mt-4">
            <a href="<?php echo e(route('admin.profil')); ?>" class="btn btn-light">
                Kembali
            </a>

            <button type="submit" class="btn btn-school">
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/admin/profil-edit.blade.php ENDPATH**/ ?>