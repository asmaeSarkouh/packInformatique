
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        

        <div class="card">
          <div class="card-header">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>
            <h3 class="card-title">All User</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                
                <th>Role</th>
                <th>Action</th>
                
              </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($row->name); ?></td>
                <td><?php echo e($row->email); ?></td>
                
                <td><?php echo e($row->role); ?></td>
                
             
                <td><a href="<?php echo e(URL::to('/edit-user/'.$row->id)); ?>" class="btn btn-sm btn-info">edit</a>
                <a href="<?php echo e(URL::to('/delete-user/'.$row->id)); ?>" class="btn btn-sm btn-danger">supprimer</a> </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
              
              </tbody>
              <tfoot>
              <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                
                <th>Role</th>
                <th>Action</th>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
</div> 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/backend/user/all-user.blade.php ENDPATH**/ ?>