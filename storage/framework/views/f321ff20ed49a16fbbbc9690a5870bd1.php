<?php $__env->startSection('title', 'Data Guru'); ?>

<?php $__env->startSection('content'); ?>

    
    <div class="page-head">
        <div>
            <h2>Data Guru</h2>
            <p>Kelola data tenaga pendidik MTS Alhidayah.</p>
        </div>

        <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Guru
        </a>
    </div>

    
    <div class="card-school table-card">
        <div class="table-responsive">
            <table class="table align-middle" data-datatable>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>

                            <td>
                                <img
                                    class="thumb"
                                    src="<?php echo e($item->foto
                                        ? asset('uploads/guru/' . $item->foto)
                                        : asset('images/faces/face1.jpg')); ?>"
                                    alt="Foto <?php echo e($item->nama_guru); ?>"
                                >
                            </td>

                            <td class="fw-semibold">
                                <?php echo e($item->nama_guru); ?>

                            </td>

                            <td>
                                <?php echo e($item->nip ?: '-'); ?>

                            </td>

                            <td>
                                <span class="badge-green">
                                    <?php echo e($item->mapel ?: 'Guru Mata Pelajaran'); ?>

                                </span>
                            </td>

                            <td>
                                <div class="d-flex gap-1">

                                    
                                    <a
                                        href="<?php echo e(route('guru.edit', ['id' => $item->id])); ?>"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit data guru"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    
                                    <form
                                        action="<?php echo e(route('guru.destroy', ['id' => $item->id])); ?>"
                                        method="POST"
                                        onsubmit="return confirm('Hapus data guru ini?')"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus data guru"
                                        >
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">
                                Belum ada data guru.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Downloads\website_sekolah\website_sekolah\resources\views/admin/guru.blade.php ENDPATH**/ ?>