
<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <style>
        .register-link p {
            color: white; /* Make the text white */
        }
        .register-link a {
            color: white; /* Make the link text white */
            text-decoration: underline; /* Optional: add underline to the link */
        }
    </style>
</head>
<body>
    <!-- Back Arrow Button at Top Left -->
    <a href="<?php echo e(url()->previous()); ?>" class="back-button">
        <i class="ri-arrow-left-line"></i>
    </a>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('login.post')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
            
            <!-- Register Here Link -->
            <div class="register-link">
                <p>Don't have an account? <a href="<?php echo e(route('register')); ?>">register here</a></p>
            </div>
        </div>
    </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_1\resources\views/auth/login.blade.php ENDPATH**/ ?>