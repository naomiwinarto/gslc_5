<?php $__env->startSection('title', 'Class LG01'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container m-5">
        <h2 class="container m-2">Daftar Mahasiswa</h2>
        <h4 class="container m-2">Class <?php echo e($class); ?></h4>

        <ol>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="container m-2"><?php echo e($mhs); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>

        <span class="container m-2 fs-5">Nilai rata-rata kelas:</span>
        <?php if($nilai>=60): ?>
            <span class="badge text-bg-primary fs-6"> LULUS</span>
        <?php else: ?>
            <span class="badge text-bg-danger"> TIDAK LULUS</span>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC_5\resources\views/lg01.blade.php ENDPATH**/ ?>