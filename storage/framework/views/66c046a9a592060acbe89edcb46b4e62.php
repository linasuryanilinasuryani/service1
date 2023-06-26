<?php $__env->startSection('judul', 'Tambah Data Additional Costs'); ?>

<?php $__env->startSection('isi'); ?>
    <h1>Tambah Data Additional</h1>
    <a href="<?php echo e(route('aditional.index')); ?>" class="btn btn-warning float-right">Kembali</a>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('aditional.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="">Nama Pengeluaran</label>
            <input type="text" class="form-control" name="nama_pengeluaran" value="<?php echo e(old('nama_pengeluaran')); ?>">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?php echo e(old('Keterangan')); ?>">

        </div>
        <div class="form-group">
            <label for="">biaya</label>
            <input type="text" class="form-control" name="biaya" value="<?php echo e(old('biaya')); ?>">
        </div>
        <div class="form-group">
            <label for="">Tanggal Transaksi</label>
            <input type="text" class="form-control" name="tanggal_transaksi" value="<?php echo e(old('tanggal_transaksi')); ?>">
        </div>
        <div class="form-group">
            <label for="">Nama Konsumen</label>
            <input type="text" class="form-control" name="nama_konsumen" value="<?php echo e(old('nama_konsumen')); ?>">
        </div>
        <div class="form-group">
            <label for="">Email Konsumen</label>
            <input type="text" class="form-control" name="email_konsumen" value="<?php echo e(old('email_konsumen')); ?>">
        </div>


        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\service1\resources\views/aditional/add.blade.php ENDPATH**/ ?>