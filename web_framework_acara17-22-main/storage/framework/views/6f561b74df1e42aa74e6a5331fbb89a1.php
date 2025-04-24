<!-- <!DOCTYPE html>
<html>
<head>
    <title>Request dengan Input Laravel</title>  
</head>
<body>
    <form action="/formulir/proses" method="post">
        <?php echo csrf_field(); ?>
        Nama : <input type="text" name="nama"><br/>
        Alamat : <input type="text" name="alamat"><br/>
        <input type="submit" value="Simpan">
    </form>  
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Request dengan Input Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Form Validation dengan Laravel</h1>
                <form action="/formulir/proses" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control 
                            <?php echo e($errors->has('nama') ? 'is-invalid' : ''); ?>" 
                            placeholder="Nama lengkap" value="<?php echo e(old('nama')); ?>">

                        <?php if($errors->has('nama')): ?>
                            <span class="text-danger small">
                                <p><?php echo e($errors->first('nama')); ?></p>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <textarea rows="5" id="alamat" name="alamat" class="form-control 
                            <?php echo e($errors->has('alamat') ? 'is-invalid' : ''); ?>" 
                            placeholder="Alamat"><?php echo e(old('alamat')); ?></textarea>

                        <?php if($errors->has('alamat')): ?>
                            <span class="text-danger small">
                                <p><?php echo e($errors->first('alamat')); ?></p>
                            </span>
                        <?php endif; ?>
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\xampp\Praktik BKPM_WebFramework\web_framework_acara17-22-main\resources\views/formulir.blade.php ENDPATH**/ ?>