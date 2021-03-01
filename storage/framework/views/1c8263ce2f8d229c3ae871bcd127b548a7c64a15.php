<!DOCTYPE html>
<html lang="en">
    <head>
        <title>form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/resources/css/form.css')); ?>">
       
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/resources/fontawesome/css/all.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/resources/fontawesome/css/fontawesome.min.css')); ?>">
        <link href="<?php echo e(asset('/resources/css/bootstrap.min.css')); ?>" rel="stylesheet" >
        <!-- jQuery library -->
        <script src="<?php echo e(asset('/resources/js/jquery.min.js')); ?>"></script>
        <!-- Latest compiled JavaScript -->
        <script src="<?php echo e(asset('/resources/js/bootstrap.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('/resources/js/main.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\resources\views/layouts/layout.blade.php ENDPATH**/ ?>