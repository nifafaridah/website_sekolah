<?php $__env->startSection('title', 'Galeri'); ?>

<?php $__env->startSection('content'); ?>

    
    <div class="page-head">
        <div>
            <h2>Galeri Sekolah</h2>
            <p>Kelola dokumentasi foto kegiatan sekolah.</p>
        </div>

        <a href="<?php echo e(route('galeri.create')); ?>" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Foto
        </a>
    </div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    
    <div class="card-school table-card">
        <div class="table-responsive">
            <table class="table align-middle" data-datatable>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            
                            <td><?php echo e($loop->iteration); ?></td>

                            
                            <td>
                                <?php if($item->file): ?>
                                    <img
                                        class="thumb-wide"
                                        src="<?php echo e(asset('uploads/galeri/' . $item->file)); ?>"
                                        alt="<?php echo e($item->judul); ?>"
                                    >
                                <?php else: ?>
                                    <span class="text-muted">
                                        Tidak ada foto
                                    </span>
                                <?php endif; ?>
                            </td>

                            
                            <td class="fw-semibold">
                                <?php echo e($item->judul); ?>

                            </td>

                            
                            <td>
                                <?php echo e(\Illuminate\Support\Str::limit($item->keterangan ?? '', 70)); ?>

                            </td>

                            
                            <td>
                                <?php if($item->tanggal): ?>
                                    <?php echo e(\Illuminate\Support\Carbon::parse($item->tanggal)->format('d-m-Y')); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>

                            
                            <td>
                                <div class="d-flex gap-1">

                                    
                                    <a
                                        href="<?php echo e(route('galeri.edit', ['id' => $item->id])); ?>"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit foto"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    
                                    <form
                                        action="<?php echo e(route('galeri.destroy', ['id' => $item->id])); ?>"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus foto ini?')"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus foto"
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
                                Belum ada data foto galeri.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/admin/galeri.blade.php ENDPATH**/ ?>