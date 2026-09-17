<?php $__env->startSection('title', 'Kategori ' . ucfirst($category) . ' - TANEAN.ID'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Category Header -->

    <!-- Articles with Different Layouts Based on Category -->
    <section class="container mx-auto space-y-6 py-6">
        <?php if($category == 'warta'): ?>
            <?php echo $__env->make('articles.category.warta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($category == 'warita'): ?>
            <?php echo $__env->make('articles.category.warita', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($category == 'swara'): ?>
            <?php echo $__env->make('articles.category.swara', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($category == 'lensa'): ?>
            <?php echo $__env->make('articles.category.lensa', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($category == 'video'): ?>
            <?php echo $__env->make('articles.category.video', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="text-gray-400 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <p class="text-xl text-gray-600 font-medium">Kategori tidak ditemukan.</p>
                <a href="<?php echo e(route('home')); ?>"
                    class="inline-block mt-6 px-6 py-3 bg-tanean-dark text-white rounded hover:bg-gray-800 transition">
                    Kembali ke Beranda
                </a>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/articles/category.blade.php ENDPATH**/ ?>