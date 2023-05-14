

<?php $__env->startSection('content'); ?>

<div class="max-w-10xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-4 px-4 py-2 border-b">
        <h2 class="text-2xl font-bold leading-tight text-gray-800">Liste de Material</h2>
        <a href="<?php echo e(url('materials/create')); ?>" 
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter un Material</a>
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
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Date Livrison</th>
                                    <th class="px-4 py-2">Lieu</th>
                                    <th class="px-4 py-2">Type</th>
                                    <th class="px-4 py-2">Etat</th>
                                    <th class="px-4 py-2">Probleme</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="border-solid border-2 border-indigo-900 ">
                                 <?php $__empty_1 = true; $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    
                                     <td class="px-4 py-2 border-b">
                                         <?php echo e($material->id); ?>

                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         <?php echo e($material->description); ?>

                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         <?php echo e($material->dateLivrision); ?>

                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         <?php echo e($material->lieu); ?>

                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         <?php echo e($material->type->nom); ?>

                                     </td>
                                     <td class="px-4 py-2 border-b">
                                        <?php if(($material->etat)==0): ?>
                                            desactive
                                        <?php endif; ?>
                                        active
                                    </td>
                                    <td class="px-4 py-2 border-b">
                                        <?php if(($material->probleme)==''): ?>
                                            No probleme
                                        <?php endif; ?>
                                        <?php echo e($material->probleme); ?>

                                    </td>
                                     <td class="px-4 py-2 border-b">
                                        <a 
                                        href="<?php echo e(url('materials/'.$material->id.'/edit')); ?>"
                                        class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                Edit
                                            </span>
                                        </a>
                                       
                                     </td>
                                     <td class="px-4 py-2 border-b">
                                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.delete','data' => ['url' => ''.e('materials/'.$material->id).'']]); ?>
<?php $component->withName('delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => ''.e('materials/'.$material->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                     </td>
                                     
                                     
                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                         
                                     <?php endif; ?>
                            </tbody>
                        </table>
                   <?php echo e($materials->links()); ?>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/page/material/index.blade.php ENDPATH**/ ?>