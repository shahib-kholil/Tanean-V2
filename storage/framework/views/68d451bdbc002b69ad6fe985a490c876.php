<?php $__env->startSection('title', 'Berita - ' . config('app.name')); ?>

<?php $__env->startSection('header'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    
    <?php if(!request('q') && ($featured = $articles->first())): ?>
    <section class="mb-12 relative">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 relative overflow-hidden rounded-lg">
                <?php if($featured->image): ?>
                    <div class="h-[640px] md:h-[720px] w-full relative">
                        <img src="<?php echo e(asset('storage/' . $featured->image)); ?>" alt="<?php echo e($featured->title); ?>" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-12 left-6 md:left-12 text-white max-w-3xl px-4 md:px-0">
                            <span class="inline-block px-3 py-1 bg-white/20 text-white text-sm font-semibold uppercase tracking-wide rounded mb-4"><?php echo e($featured->category); ?></span>
                            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl leading-tight font-extrabold mb-4"><?php echo e($featured->title); ?></h1>
                            <p class="text-lg md:text-xl max-w-3xl text-white/95 leading-relaxed"><?php echo e(Str::limit($featured->excerpt, 300)); ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="w-full h-80 bg-gray-200"></div>
                <?php endif; ?>
            </div>
            <aside class="bg-white rounded shadow p-4 h-fit sticky top-28">
                <h3 class="font-semibold mb-3">Populer</h3>
                <?php $__currentLoopData = $articles->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('article.show', $a->slug)); ?>" class="block text-sm text-tanean-dark mb-2"><?php echo e(Str::limit($a->title, 60)); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </aside>
        </div>
    </section>
    <?php endif; ?>

    
    <section>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 md:gap-10">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <?php $__env->startComponent('components.article-card', [
                        'image' => $article->image ? asset('storage/' . $article->image) : null,
                        'title' => $article->title,
                        'excerpt' => Str::limit($article->excerpt, 120),
                        'author' => $article->author,
                        'date' => $article->published_at ? $article->published_at->format('d M Y') : '',
                        'category' => $article->category,
                        'link' => route('article.show', $article->slug),
                    ]); ?>
                    <?php echo $__env->renderComponent(); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <div class="mt-8">
        <?php echo e($articles->links()); ?>

    </div>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/layouts/article.blade.php ENDPATH**/ ?>