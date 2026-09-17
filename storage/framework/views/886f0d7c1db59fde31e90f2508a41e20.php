<!-- Grid Layout untuk Warta (Hanya 2 artikel) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-5 lg:px-16">
    <?php $__empty_1 = true; $__currentLoopData = $topArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['variant' => 'kategori','title' => $article->title,'image' => asset('storage/' . $article->image),'excerpt' => Str::limit($article->excerpt, 300),'author' => $article->author,'date' => $article->published_at->format('d M Y'),'link' => route('article.show', $article->slug)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'kategori','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Str::limit($article->excerpt, 300)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->published_at->format('d M Y')),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15)): ?>
<?php $attributes = $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15; ?>
<?php unset($__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15)): ?>
<?php $component = $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15; ?>
<?php unset($__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15); ?>
<?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-span-2 text-center py-16">
            <div class="text-gray-400 mb-4">
                <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </div>
            <p class="text-xl text-gray-600 font-medium">Tidak ada artikel dalam kategori ini.</p>
            <a href="<?php echo e(route('home')); ?>"
                class="inline-block mt-6 px-6 py-3 bg-tanean-dark text-white rounded hover:bg-gray-800 transition">
                Kembali ke Beranda
            </a>
        </div>
    <?php endif; ?>
</div>

<!-- Slider 1 warta -->
<?php echo $__env->make('articles.category.partials.slider', [
    'articles' => $swaraArticles,
    'bgColor' => 'bg-tanean-beige',
    'title' => 'Swara',
    'route' => 'swara',
    'uniqueId' => 'warta-1',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Slider Section 2 warta -->
<?php echo $__env->make('articles.category.partials.slider', [
    'articles' => $swaraArticles,
    'bgColor' => 'bg-tanean-beige',
    'title' => 'Swara',
    'route' => 'swara',
    'uniqueId' => 'warta-2',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/articles/category/warta.blade.php ENDPATH**/ ?>