<?php $__env->startSection('title', 'Dashboard Admin'); ?>
<?php $__env->startSection('header', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Total Artikel</h3>
        <p class="text-3xl font-bold text-gray-800 mt-2"><?php echo e($stats['total_articles']); ?></p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Artikel Published</h3>
        <p class="text-3xl font-bold text-green-600 mt-2"><?php echo e($stats['published_articles']); ?></p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Artikel Pending</h3>
        <p class="text-3xl font-bold text-yellow-600 mt-2"><?php echo e($stats['pending_articles']); ?></p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Total Users</h3>
        <p class="text-3xl font-bold text-blue-600 mt-2"><?php echo e($stats['total_users']); ?></p>
    </div>
</div>

<div class="bg-white rounded-lg shadow">
    <div class="p-6 border-b">
        <h2 class="text-xl font-semibold">Artikel Terbaru</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php $__currentLoopData = $recent_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="px-6 py-4"><?php echo e($article->title); ?></td>
                    <td class="px-6 py-4"><?php echo e($article->user->name); ?></td>
                    <td class="px-6 py-4">
                        <?php if($article->is_published): ?>
                        <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Published</span>
                        <?php else: ?>
                        <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded">Pending</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($article->created_at->diffForHumans()); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>