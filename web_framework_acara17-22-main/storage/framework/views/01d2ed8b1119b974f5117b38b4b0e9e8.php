<!DOCTYPE html>
<html>
<head>
    <title>Upload File Dengan Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center my-5">Upload File Dengan Laravel</h2>
            
            <div class="col-lg-8 mx-auto my-5">
                
                <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                
                <?php if(session('error')): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($error); ?> <br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('upload.resize')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <b>File Gambar</b><br/>
                        <input type="file" name="file">
                    </div>

                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan"></textarea>
                    </div>

                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\xampp\Praktik BKPM_WebFramework\web_framework_acara17-22-main\resources\views/upload.blade.php ENDPATH**/ ?>