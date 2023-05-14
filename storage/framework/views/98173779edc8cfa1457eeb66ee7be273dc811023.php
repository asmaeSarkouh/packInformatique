<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>

            <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
        <?php else: ?>
            <title><?php echo e(config('app.name')); ?></title>
        <?php endif; ?>

        <!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo e(url(asset('favicon.ico'))); ?>">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(url(mix('css/app.css'))); ?>">
        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="<?php echo e(url(mix('js/app.js'))); ?>" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src='<?php echo e(asset('js/checkbox.js')); ?>'></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src='<?php echo e(asset('js/chirts.js')); ?>'></script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    </head>

    <body>
        

  
        <?php echo $__env->yieldContent('body'); ?>
     

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/layouts/base.blade.php ENDPATH**/ ?>