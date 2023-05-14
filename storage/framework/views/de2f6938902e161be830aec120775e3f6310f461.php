

<?php $__env->startSection('content'); ?>

<div class="max-w-10xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-4 px-4 py-2 border-b">
        <h2 class="text-2xl font-bold leading-tight text-gray-800">Liste des Etablisements</h2>
     </div>

    <div class="py-12">
        <div class="max-w-12xl max-h-12xl mx-auto sm:px-8 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="table w-full  text-sm ">
                            <thead class="border-solid border-2 border-indigo-900">
                                <tr>
                                    <th class="px-4 py-2"> Id</th>
                                    <th class="px-4 py-2">Code d'eytablisement</th>
                                    <th class="px-4 py-2">Nom d'eytablisement</th>
                                    <th class="px-4 py-2">Directeur d'eytablisement</th>
                                    <th class="px-4 py-2"></th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            
                            <tbody class="border-solid border-2 border-indigo-900 >
                                <?php $__empty_1 = true; $__currentLoopData = $etablisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etablisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-4 py-2 border-b">
                                    <?php echo e($etablisement->id); ?>

                                </td>
                                <td class="px-4 py-2 border-b">
                                    <?php echo e($etablisement->codeEtablisement); ?>

                                </td>
                                <td class="px-4 py-2 border-b">
                                    <?php echo e($etablisement->nom); ?>

                                </td>
                                <td class="px-4 py-2 border-b">
                                    <?php $__currentLoopData = $etablisement->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($user->name); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="px-4 py-2 border-b">
                                    <?php $__currentLoopData = $etablisement->materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($material->count('id')); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="px-4 py-2 border-b">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.delete','data' => ['url' => ''.e('etablisements/'.$etablisement->id).'']]); ?>
<?php $component->withName('delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => ''.e('etablisements/'.$etablisement->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            </tr>
                                <?php endif; ?>
                                
                          
                            
                        </tbody>
                        </table>
                       
                       <?php echo e($etablisements->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/page/etablisement/index.blade.php ENDPATH**/ ?>