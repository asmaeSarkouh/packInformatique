
<?php $__env->startSection('content'); ?>
<style>
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color{
        color: black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid black;
    }
</style>
<div class="content-wrapper">
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="div_center">
            <h2 class="card-title">All Types</h2>
            <form action="<?php echo e(url('/add-type')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" class="input_color" name="type" placeholder="write type name">
                <input type="submit" name="submit" value="add type" class="btn btn-primary">

            </form>
        </div>
        <table class="center">
         <tr>
             <td>Type name</td>
             <td>Action</td>
         </tr>
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <tr>
             <td><?php echo e($data->type_name); ?></td>
             <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href='<?php echo e(url("/delete-type",$data->id)); ?>'>Delete</a></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
      </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/backend/material/type.blade.php ENDPATH**/ ?>