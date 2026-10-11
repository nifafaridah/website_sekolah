<?php $__env->startSection('title', 'Berita'); ?>

<?php $__env->startSection('content'); ?>

    
    <div class="page-head">
        <div>
            <h2>Berita Sekolah</h2>
            <p>Kelola berita dan informasi terbaru sekolah.</p>
        </div>

        <a href="<?php echo e(route('berita.create')); ?>" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Berita
        </a>
    </div>

    
    <div class="card-school table-card">
        <div class="table-responsive">

            <table class="table align-middle" data-datatable>

                
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Ringkasan</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            
                            <td><?php echo e($loop->iteration); ?></td>

                            
                            <td>
                                <img
                                    class="thumb-wide"
                                    src="<?php echo e($item->gambar
                                        ? asset('uploads/berita/' . $item->gambar)
                                        : asset('images/auth/login-bg.jpg')); ?>"
                                    alt="Foto berita"
                                >
                            </td>

                            
                            <td class="fw-semibold">
                                <?php echo e($item->judul); ?>

                            </td>

                            
                            <td>
                                <?php echo e(optional($item->tanggal)->format('d-m-Y')); ?>

                            </td>

                            
                            <td>
                                <?php echo e(\Illuminate\Support\Str::limit(
                                    strip_tags($item->isi),
                                    80
                                )); ?>

                            </td>

                            
                            <td>
                                <div class="d-flex gap-1">

                                    
                                    <a
                                        href="<?php echo e(route('berita.show', $item->id)); ?>"
                                        class="btn btn-sm btn-outline-primary"
                                        title="Lihat detail"
                                    >
                                        <i class="mdi mdi-eye"></i>
                                    </a>

                                    
                                    <a
                                        href="<?php echo e(route('berita.edit', $item->id)); ?>"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit berita"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    
                                    <form
                                        action="<?php echo e(route('berita.destroy', $item->id)); ?>"
                                        method="POST"
                                        onsubmit="return confirm('Hapus berita ini?')"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus berita"
                                        >
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                Belum ada data berita.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/berita.blade.php ENDPATH**/ ?>