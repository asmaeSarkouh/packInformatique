
<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-3 px-4 py-2 border-b">
    <h2 class="text-2xl font-bold leading-tight mb-3 text-gray-800"> Modifier un Material</h2>
</div>

<div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form action="<?php echo e(url('materials'.$material->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="message" rows="4" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg
                         border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                         dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description...">
                         <?php echo e($material->description); ?>

                        </textarea>
                    </div>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                    <div class="mb-6">
                        <label for="Date Livrison" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Livrison</label>
                        <input type="date" value="<?php echo e($material->dateLivrision); ?>" id="dateLivrision" name="dateLivrision" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <?php $__errorArgs = ['dateLivrision'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                    <div class="mb-6">
                        <label for="lieu" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                        <div class="mt-2">
                          <select id="lieu" name="lieu" autocomplete="lieu-name" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option>select type</option>
                           <option value="Direction"  <?php if( $material->lieu  == 'Direction'): ?> selected="selected" <?php endif; ?>>Direction</option>
                           <option value="Bibliotheque"  <?php if( $material->lieu  == 'Bibliotheque'): ?> selected="selected" <?php endif; ?>>Bibliotheque</option>
                           <option value="SMM"  <?php if( $material->lieu  == 'SMM'): ?> selected="selected" <?php endif; ?>>SMM</option>
                           <option value="Salle de eouvr"  <?php if( $material->lieu  == 'Salle de eouvr'): ?> selected="selected" <?php endif; ?>>Salle de eouvr</option>
                           <option value="Labo"  <?php if( $material->lieu  == 'Lab'): ?> selected="selected" <?php endif; ?>>Labo</option>
                          </select>
                        </div>
                    </div>
                    <?php $__errorArgs = ['lieu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     
                     <div class="mb-6">
                        <label for="type_id" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                  <select id="type_id" name="type_id" autocomplete="type_id-name" 
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option>select type</option>
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type->id); ?>"
                        <?php if( $material->type_id  == $type->id): ?> selected="selected" <?php endif; ?>>
                        <?php echo e($type->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                </div>
                    <?php $__errorArgs = ['type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
                <div class="form-group">
                    <label for="etat" class="block text-sm font-medium text-gray-700 leading-5">
                        etat
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="etat" value="<?php echo e($material->etat); ?>" id="etat" name="etat"
                         type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" >
                    </div>
                </div>
                
                <div class="form-group" id="myInputDiv" style="display:none">
                    <label for="probleme" class="block text-sm font-medium text-gray-700 leading-5">
                        Probleme
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="probleme" value="<?php echo e($material->probleme); ?>" id="probleme" name="probleme" type="text"  
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    </div>
                </div>
                </div>
                
                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Modifier Material
                            </button>
                        </span>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/page/material/edit.blade.php ENDPATH**/ ?>