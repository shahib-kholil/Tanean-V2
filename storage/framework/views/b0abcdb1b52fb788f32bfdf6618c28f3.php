<?php $__env->startSection('title', 'Tambah User'); ?>
<?php $__env->startSection('header', 'Tambah User Baru'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-lg shadow p-6 max-w-2xl">
    <form action="<?php echo e(route('admin.users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Nama</label>
            <input type="text" name="name" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" value="<?php echo e(old('name')); ?>" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" value="<?php echo e(old('email')); ?>" required>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Role</label>
            <select name="role" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required>
                <option value="">Pilih Role</option>
                <option value="admin" <?php echo e(old('role') == 'admin' ? 'selected' : ''); ?>>Admin</option>
                <option value="editor" <?php echo e(old('role') == 'editor' ? 'selected' : ''); ?>>Editor</option>
                <option value="wartawan" <?php echo e(old('role') == 'wartawan' ? 'selected' : ''); ?>>Wartawan</option>
            </select>
            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Password</label>
            <input type="password" name="password" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
            <a href="<?php echo e(route('admin.users.index')); ?>" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                Batal
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/users/create.blade.php ENDPATH**/ ?>