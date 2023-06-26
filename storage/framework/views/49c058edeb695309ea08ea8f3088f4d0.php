<?php $__env->startSection('judul', 'Data Dosen'); ?>

<?php $__env->startSection('isi'); ?>
    <h1>Data Dosen</h1>
    <a href="<?php echo e(route('aditional.create')); ?>" class="btn btn-info float-end mt-2"> Tambah Data </a>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengeluaran</th>
            <th>Keterangan</th>
            <th>biaya</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Konsumen</th>
            <th>Email Konsumen</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($row->nama_pengeluaran); ?></td>
                <td><?php echo e($row->keterangan); ?></td>
                <td><?php echo e($row->biaya); ?></td>
                <td><?php echo e($row->tanggal_transaksi); ?></td>
                <td><?php echo e($row->nama_konsumen); ?></td>
                <td><?php echo e($row->email_konsumen); ?></td>
                <td>
                    <form action="<?php echo e(route('aditional.delete', $row->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        
                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda Yakin ?')"
                        >Hapus</button>
                        <a href="<?php echo e(route('aditional.edit', $row->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\service1\resources\views/aditional/index.blade.php ENDPATH**/ ?>