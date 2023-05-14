
<?php $__env->startSection('body-admin'); ?>
<!-- component -->
<div class="w-full max-w-screen-xl mx-auto px-6 mt-8">
    <div class="flex justify-center p-4 px-3 py-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                     List type de material
                </div>
                <form action="<?php echo e(url('admin/types')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="flex items-center bg-gray-200 rounded-md">
                        <div class="pl-2">
                           <button type="submit" class="bg-grey-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            ajouter
                           </button>
                        </div>
                        <input
                            class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight border-none focus:outline-none py-2 px-2"
                            id="title" type="text" name="title" placeholder="">
                    </div>
                </form>
               <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="py-3 text-sm">
                <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                    <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                    <div class="flex-grow font-medium px-2"><?php echo e($type->title); ?> </div>
                    <div class="text-sm font-normal text-gray-500 tracking-wide">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.delete','data' => ['url' => ''.e('types/'.$type->id).'']]); ?>
<?php $component->withName('delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => ''.e('types/'.$type->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php echo e($types->links()); ?>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/admin/typeMaterial/index.blade.php ENDPATH**/ ?>