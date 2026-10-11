<?php $__env->startSection('title', 'Siswa'); ?>

<?php $__env->startSection('content'); ?>

<div class="page-head">
    <div>
        <h2>Data Siswa</h2>
        <p>Kelola data peserta didik MTS Alhidayah.</p>
    </div>

    <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-school">
        <i class="mdi mdi-plus me-1"></i>
        Tambah Siswa
    </a>
</div>

<div class="card-school table-card">
    <div class="table-responsive">
        <table class="table align-middle" data-datatable>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tahun Masuk</th>
                    <th class="no-sort">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>

                        <td>
                            <img
                                class="thumb"
                                src="<?php echo e($item->foto ? asset('uploads/siswa/' . $item->foto) : asset('images/faces/face2.jpg')); ?>"
                                alt="Foto <?php echo e($item->nama_siswa); ?>"
                            >
                        </td>

                        <td><?php echo e($item->nisn); ?></td>

                        <td class="fw-semibold">
                            <?php echo e($item->nama_siswa); ?>

                        </td>

                        <td>
                            <span class="badge-green">
                                <?php echo e($item->jenis_kelamin); ?>

                            </span>
                        </td>

                        <td><?php echo e($item->tahun_masuk); ?></td>

                        <td>
                            <div class="d-flex gap-1">
                                <a
                                    href="<?php echo e(route('siswa.edit', ['id' => $item->id_siswa])); ?>"
                                    class="btn btn-sm btn-outline-success"
                                    title="Edit data siswa"
                                    aria-label="Edit data siswa"
                                >
                                    <i class="mdi mdi-pencil"></i>
                                </a>

                                <form
                                    action="<?php echo e(route('siswa.destroy', ['id' => $item->id_siswa])); ?>"
                                    method="POST"
                                    onsubmit="return confirm('Hapus data siswa ini?')"
                                >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        title="Hapus data siswa"
                                        aria-label="Hapus data siswa"
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
                            Belum ada data siswa.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PCRPL\Documents\website_sekolah\website_sekolah\resources\views/admin/siswa.blade.php ENDPATH**/ ?>