
<?php $__env->startSection('body-admin'); ?>
<div class="mt-8 sm:mx-auto sm:w-full sm:min-w-md ">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10  mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <form wire:submit.prevent="authenticate" action="<?php echo e(url('admin/etablisements')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div>
                <label for="ppr" class="block text-sm font-medium text-gray-700 leading-5">
                    Code d'etablisement
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="codeEtablisement" id="codeEtablisement" name="codeEtablisement" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                </div>

                <?php $__errorArgs = ['codeEtablisement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700 leading-5">
                    Nom d'etablisement
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="nom" id="nom" name="nom" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                </div>

                <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-6">
                <label for="type_id" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
        <div class="mt-2">
          <select id="type_id" name="type_id" autocomplete="type_id-name" 
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option>select Directeur</option>
            
          </select>
        </div>
        </div>
        <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Ajouter Etablisement
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="relative overflow-x-auto mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Code d'Etablisement
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom d'Etablisement
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom de la directeur
                </th>
            </tr>
        </thead>
        <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $etablisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etablisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    <?php echo e($etablisement->codeEtablisement); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($etablisement->nom); ?>

                </td>
                <td class="px-6 py-4">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/admin/etablisement/index.blade.php ENDPATH**/ ?>