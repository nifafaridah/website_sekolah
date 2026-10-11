<?php $__env->startSection('title', 'Tambah Berita'); ?>

<?php $__env->startSection('content'); ?>

    
    <div class="page-head">
        <div>
            <h2>Tambah Berita</h2>
            <p>Buat berita sekolah dengan foto sampul.</p>
        </div>
    </div>


    
    <div class="card-school form-card">

        <form
            action="<?php echo e(route('berita.store')); ?>"
            method="POST"
            enctype="multipart/form-data"
        >

            
            <?php echo csrf_field(); ?>

            <div class="row g-3">

                
                <div class="col-12">
                    <label for="judul" class="form-label">
                        Judul Berita
                    </label>

                    <input
                        type="text"
                        id="judul"
                        name="judul"
                        class="form-control"
                        value="<?php echo e(old('judul')); ?>"
                        placeholder="Masukkan judul berita"
                        required
                    >

                    
                    <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <?php echo e($message); ?>

                        </small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        class="form-control"
                        value="<?php echo e(old('tanggal', date('Y-m-d'))); ?>"
                        required
                    >

                    
                    <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <?php echo e($message); ?>

                        </small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                
                <div class="col-md-6">
                    <div class="upload-box">

                        <label for="gambar" class="form-label">
                            Foto Berita
                        </label>

                        <input
                            type="file"
                            id="gambar"
                            name="gambar"
                            class="form-control"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <small class="text-muted">
                            Format JPG, PNG, atau WEBP. Maksimal 2 MB.
                        </small>

                        
                        <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger d-block">
                                <?php echo e($message); ?>

                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                </div>


                
                <div class="col-12">
                    <label for="isi" class="form-label">
                        Isi Berita
                    </label>

                    <textarea
                        id="isi"
                        name="isi"
                        rows="9"
                        class="form-control"
                        placeholder="Tuliskan isi berita di sini..."
                        required
                    ><?php echo e(old('isi')); ?></textarea>

                    
                    <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <?php echo e($message); ?>

                        </small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

            </div>


            
            <div class="mt-4">

                <a
                    href="<?php echo e(route('admin.berita')); ?>"
                    class="btn btn-light"
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-school"
                >
                    <i class="mdi mdi-content-save me-1"></i>
                    Simpan Berita
                </button>

            </div>

        </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/berita-create.blade.php ENDPATH**/ ?>