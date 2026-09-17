<?php $__env->startSection('title', 'Kelola Users'); ?>
<?php $__env->startSection('header', 'Kelola Users'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(route('admin.users.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Tambah User Baru
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Terdaftar</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="px-6 py-4"><?php echo e($user->name); ?></td>
                <td class="px-6 py-4"><?php echo e($user->email); ?></td>
                <td class="px-6 py-4">
                    <span class="px-2 py-1 text-xs rounded
                        <?php if($user->role == 'admin'): ?> bg-purple-100 text-purple-800
                        <?php elseif($user->role == 'editor'): ?> bg-blue-100 text-blue-800
                        <?php else: ?> bg-gray-100 text-gray-800
                        <?php endif; ?>">
                        <?php echo e(ucfirst($user->role)); ?>

                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($user->created_at->format('d M Y')); ?></td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2">
                        <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>

                        <?php if($user->id !== auth()->id()): ?>
                        <form action="<?php echo e(route('admin.users.destroy', $user)); ?>" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <?php echo e($users->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/users/index.blade.php ENDPATH**/ ?>