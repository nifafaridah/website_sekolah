<?php $__env->startSection('title', 'Tambah Foto Galeri'); ?>

<?php $__env->startSection('content'); ?>


<div class="page-head">
    <div>
        <h2>Tambah Foto Galeri</h2>
        <p>Tambahkan dokumentasi kegiatan sekolah.</p>
    </div>
</div>


<div class="card-school form-card">
    <form
        action="<?php echo e(route('galeri.store')); ?>"
        method="POST"
        enctype="multipart/form-data"
    >
        <?php echo csrf_field(); ?>

        <div class="row g-3">

            
            <div class="col-md-6">
                <label for="judul" class="form-label">Judul</label>

                <input
                    type="text"
                    name="judul"
                    id="judul"
                    class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('judul')); ?>"
                    maxlength="100"
                    required
                >

                <?php $__errorArgs = ['judul'];
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
                <label for="tanggal" class="form-label">Tanggal</label>

                <input
                    type="date"
                    name="tanggal"
                    id="tanggal"
                    class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('tanggal', date('Y-m-d'))); ?>"
                    required
                >

                <?php $__errorArgs = ['tanggal'];
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
                <label for="keterangan" class="form-label">Keterangan</label>

                <textarea
                    name="keterangan"
                    id="keterangan"
                    class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    rows="4"
                ><?php echo e(old('keterangan')); ?></textarea>

                <?php $__errorArgs = ['keterangan'];
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
                    <label for="file" class="form-label">Foto</label>

                    <input
                        type="file"
                        name="file"
                        id="file"
                        class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        accept=".jpg,.jpeg,.png,.webp"
                        required
                    >

                    <small class="text-muted">
                        Format JPG, PNG, atau WEBP. Maksimal 4 MB.
                    </small>

                    <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small mt-1">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

        </div>

        
        <input type="hidden" name="kategori" value="Foto">

        
        <div class="mt-4">
            <a href="<?php echo e(route('admin.galeri')); ?>" class="btn btn-light">
                Kembali
            </a>

            <button type="submit" class="btn btn-school">
                <i class="mdi mdi-content-save me-1"></i>
                Simpan Foto
            </button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/galeri-create.blade.php ENDPATH**/ ?>