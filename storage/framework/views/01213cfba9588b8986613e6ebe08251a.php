<?php $__env->startSection('title', 'Edit Ekstrakurikuler'); ?>

<?php $__env->startSection('content'); ?>

    
    <div class="page-head">
        <div>
            <h2>Edit Ekstrakurikuler</h2>
            <p>Perbarui data dan ganti foto jika diperlukan.</p>
        </div>
    </div>


    
    <div class="card-school form-card">

        <form
            action="<?php echo e(route('ekstrakulikuler.update', $ekstrakulikuler->id)); ?>"
            method="POST"
            enctype="multipart/form-data"
        >

            
            <?php echo csrf_field(); ?>

            
            <?php echo method_field('PUT'); ?>

            <div class="row g-3">

                
                <div class="col-md-6">
                    <label for="nama_ekskul" class="form-label">
                        Nama Ekstrakurikuler
                    </label>

                    <input
                        type="text"
                        id="nama_ekskul"
                        name="nama_ekskul"
                        class="form-control"
                        value="<?php echo e(old('nama_ekskul', $ekstrakulikuler->nama_ekskul)); ?>"
                        required
                    >

                    <?php $__errorArgs = ['nama_ekskul'];
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
                    <label for="pembina" class="form-label">
                        Pembina
                    </label>

                    <input
                        type="text"
                        id="pembina"
                        name="pembina"
                        class="form-control"
                        value="<?php echo e(old('pembina', $ekstrakulikuler->pembina)); ?>"
                    >

                    <?php $__errorArgs = ['pembina'];
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
                    <label for="jadwal_latihan" class="form-label">
                        Jadwal Latihan
                    </label>

                    <input
                        type="text"
                        id="jadwal_latihan"
                        name="jadwal_latihan"
                        class="form-control"
                        value="<?php echo e(old('jadwal_latihan', $ekstrakulikuler->jadwal_latihan)); ?>"
                    >

                    <?php $__errorArgs = ['jadwal_latihan'];
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
                            Ganti Foto Ekstrakurikuler
                        </label>

                        
                        <?php if($ekstrakulikuler->gambar): ?>
                            <div class="mb-2">
                                <img
                                    src="<?php echo e(asset('uploads/ekstrakulikuler/' . $ekstrakulikuler->gambar)); ?>"
                                    class="thumb-wide"
                                    alt="Foto ekstrakurikuler saat ini"
                                >
                            </div>
                        <?php endif; ?>

                        
                        <input
                            type="file"
                            id="gambar"
                            name="gambar"
                            class="form-control"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                            Maksimal 2 MB.
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
                    <label for="deskripsi" class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        class="form-control"
                        rows="6"
                        placeholder="Tuliskan deskripsi kegiatan ekstrakurikuler..."
                    ><?php echo e(old('deskripsi', $ekstrakulikuler->deskripsi)); ?></textarea>

                    <?php $__errorArgs = ['deskripsi'];
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
                    href="<?php echo e(route('admin.ekstrakulikuler')); ?>"
                    class="btn btn-light"
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-school"
                >
                    <i class="mdi mdi-content-save me-1"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/ekstrakulikuler-edit.blade.php ENDPATH**/ ?>