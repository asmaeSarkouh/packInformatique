
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                
                <div class="card">
                    <div class="card-header">
                        <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <?php echo e(session()->get('message')); ?>

                        </div>
                        <?php endif; ?>
                         <h5 class="card-title">
                                Edit User
                         </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(URL::to('/update-user/'.$edit->id)); ?>" method="post" role="form">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">User name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?php echo e($edit->name); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">User email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?php echo e($edit->email); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ppr" class="col-sm-2 col-form-label">User ppr</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="ppr" placeholder="Enter your ppr" value="<?php echo e($edit->ppr); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">User password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?php echo e($edit->password); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">User role type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role" required>
                                        <option value="Admin" <?php echo e('Admin'==$edit->role ? 'selected':''); ?>>
                                            Admin
                                        </option>
                                        <option value="Directeur" <?php echo e('Directeur'==$edit->role ? 'selected':''); ?>>
                                            Directeur
                                        </option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
 
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/backend/user/edit-user.blade.php ENDPATH**/ ?>