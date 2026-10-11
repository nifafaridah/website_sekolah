<?php $__env->startSection('title', 'Ekstrakurikuler'); ?>

<?php $__env->startSection('content'); ?>

    
    <div class="page-head">
        <div>
            <h2>Data Ekstrakurikuler</h2>
            <p>Kelola kegiatan pengembangan bakat dan minat siswa.</p>
        </div>

        <a
            href="<?php echo e(route('ekstrakulikuler.create')); ?>"
            class="btn btn-school"
        >
            <i class="mdi mdi-plus me-1"></i>
            Tambah Ekstrakurikuler
        </a>
    </div>


    
    <div class="card-school table-card">
        <div class="table-responsive">

            <table class="table align-middle" data-datatable>

                
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Pembina</th>
                        <th>Jadwal</th>
                        <th>Deskripsi</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $ekstrakulikuler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>

                            
                            <td><?php echo e($loop->iteration); ?></td>

                            
                            <td>
                                <img
                                    class="thumb-wide"
                                    src="<?php echo e($item->gambar
                                        ? asset('uploads/ekstrakulikuler/' . $item->gambar)
                                        : asset('images/auth/login-bg.jpg')); ?>"
                                    alt="Foto ekstrakurikuler"
                                >
                            </td>

                            
                            <td class="fw-semibold">
                                <?php echo e($item->nama_ekskul); ?>

                            </td>

                            
                            <td>
                                <?php echo e($item->pembina ?: '-'); ?>

                            </td>

                            
                            <td>
                                <span class="badge-green">
                                    <?php echo e($item->jadwal_latihan ?: '-'); ?>

                                </span>
                            </td>

                            
                            <td>
                                <?php echo e(\Illuminate\Support\Str::limit(
                                    $item->deskripsi,
                                    80
                                )); ?>

                            </td>

                            
                            <td>
                                <div class="d-flex gap-1">

                                    
                                    <a
                                        href="<?php echo e(route('ekstrakulikuler.edit', $item->id)); ?>"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit ekstrakurikuler"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    
                                    <form
                                        action="<?php echo e(route('ekstrakulikuler.destroy', $item->id)); ?>"
                                        method="POST"
                                        onsubmit="return confirm('Hapus data ini?')"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus ekstrakurikuler"
                                        >
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                Belum ada data ekstrakurikuler.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/ekstrakulikuler.blade.php ENDPATH**/ ?>