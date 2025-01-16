

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <style>
       
        .form-group input {
            width: 100%; 
            padding: 10px; 
            margin: 5px 0; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Register</h2>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form  method="POST" action="<?php echo e(route("register.post")); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Fullname</label>
                    <input type="name" id="name" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Register</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_1\resources\views/auth/register.blade.php ENDPATH**/ ?>