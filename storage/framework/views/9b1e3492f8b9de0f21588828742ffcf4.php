<?php $__env->startSection('title', 'Kelola Video'); ?>
<?php $__env->startSection('header', 'Kelola Video'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(route('admin.videos.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Tambah Video Baru
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Author</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Featured</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php $__empty_1 = true; $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td class="px-6 py-4"><?php echo e(Str::limit($video->title, 50)); ?></td>
                <td class="px-6 py-4"><?php echo e($video->author); ?></td>
                <td class="px-6 py-4">
                    <?php if($video->featured): ?>
                    <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Yes</span>
                    <?php else: ?>
                    <span class="px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded">No</span>
                    <?php endif; ?>
                </td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2">
                        <a href="<?php echo e(route('admin.videos.edit', $video)); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>
                        <form action="<?php echo e(route('admin.videos.destroy', $video)); ?>" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada video</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <?php echo e($videos->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/videos/index.blade.php ENDPATH**/ ?>