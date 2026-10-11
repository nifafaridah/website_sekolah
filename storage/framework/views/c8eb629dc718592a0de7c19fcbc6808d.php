<?php $__env->startSection('title', 'Edit Foto Galeri'); ?>

<?php $__env->startSection('content'); ?>


<div class="page-head">
    <div>
        <h2>Edit Foto Galeri</h2>
        <p>Perbarui informasi atau ganti foto dokumentasi sekolah.</p>
    </div>
</div>


<div class="card-school form-card">
    <form
        action="<?php echo e(route('galeri.update', ['id' => $galeri->id])); ?>"
        method="POST"
        enctype="multipart/form-data"
    >
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

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
                    value="<?php echo e(old('judul', $galeri->judul)); ?>"
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
                    value="<?php echo e(old('tanggal', $galeri->tanggal
                        ? \Illuminate\Support\Carbon::parse($galeri->tanggal)->format('Y-m-d')
                        : '')); ?>"
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
                ><?php echo e(old('keterangan', $galeri->keterangan)); ?></textarea>

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
                    <label class="form-label">Foto Saat Ini</label>

                    <?php if($galeri->file): ?>
                        <div class="mb-3">
                            <img
                                src="<?php echo e(asset('uploads/galeri/' . $galeri->file)); ?>"
                                class="thumb-wide"
                                alt="<?php echo e($galeri->judul); ?>"
                            >
                        </div>
                    <?php else: ?>
                        <p class="text-muted">Belum ada foto.</p>
                    <?php endif; ?>

                    <label for="file" class="form-label">Ganti Foto</label>

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
                    >

                    <small class="text-muted">
                        Kosongkan jika foto tidak ingin diganti.
                        Maksimal 4 MB.
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
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/galeri-edit.blade.php ENDPATH**/ ?>