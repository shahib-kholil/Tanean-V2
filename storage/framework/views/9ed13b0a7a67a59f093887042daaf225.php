<?php $__env->startSection('title', 'Kelola Artikel'); ?>
<?php $__env->startSection('header', 'Kelola Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(route('admin.articles.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Tambah Artikel Baru
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Penulis</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td class="px-6 py-4"><?php echo e(Str::limit($article->title, 50)); ?></td>
                <td class="px-6 py-4"><?php echo e($article->user->name); ?></td>
                <td class="px-6 py-4"><?php echo e(ucfirst($article->category)); ?></td>
                <td class="px-6 py-4">
                    <?php if($article->is_published): ?>
                    <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Published</span>
                    <?php else: ?>
                    <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded">Pending</span>
                    <?php endif; ?>
                </td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2">
                        <a href="<?php echo e(route('admin.articles.edit', $article)); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>

                        <?php if(!$article->is_published && (auth()->user()->isEditor() || auth()->user()->isAdmin())): ?>
                        <form action="<?php echo e(route('admin.articles.approve', $article)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-green-600 hover:text-green-900">Setujui</button>
                        </form>
                        <?php endif; ?>

                        <form action="<?php echo e(route('admin.articles.destroy', $article)); ?>" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada artikel</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>



<div class="mt-4">
    <?php echo e($articles->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/articles/index.blade.php ENDPATH**/ ?>