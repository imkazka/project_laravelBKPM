

<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluide">
    <div class="container">
        <h1 class="display-4">Home Page</h1>
        <p class="lead">This is the Home Page</p>
    </div>
    <p>Nama : <?php echo e($nama); ?></p>
    <p>Mata Pembelajaran</p>
    <ul>
        <?php $__currentLoopData = $pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <?php echo e($p); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\Praktik BKPM_WebFramework\acara 5_6 - Copy\resources\views/home.blade.php ENDPATH**/ ?>