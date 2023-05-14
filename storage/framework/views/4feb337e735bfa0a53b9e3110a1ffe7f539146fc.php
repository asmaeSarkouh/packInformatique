<?php $__env->startSection('content'); ?>

    
    <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(($material->etat)==0): ?>
        des
        <?php else: ?>
        <?php echo e($material->count('etat')); ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="grid lg:grid-cols-6 gap-4 p-4">
        <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full bodrder p-4 rounded-lg">
            <div class="flex flex-col w-full pb-4">
                <p className='text-2xl font-bold'>150</p>
                <p className='text-gray-600'>Material Active</p>
            </div>
            <p className="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            </p>
        </div>
        <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full bodrder p-4 rounded-lg">
            <div class="flex flex-col w-full pb-4">
                <p className='text-2xl font-bold'>15</p>
                <p className='text-gray-600'>Material Desactive</p>
            </div>
            <p className="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            </p>
        </div>

    </div>
    <div className="w-full md:col-span-2 relative lg:h-[70vh] h-[50vh] m-auto p-4 border rounded-lg bg-white"></div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/welcome.blade.php ENDPATH**/ ?>