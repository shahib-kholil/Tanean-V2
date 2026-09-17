<?php $__env->startSection('title', 'Beranda - TANEAN.ID'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <?php if(!request('q') && $featuredArticle): ?>
        <section class="relative w-full max-w-full h-[calc(100svh-72px)] min-h-[520px] sm:h-[480px] sm:min-h-0 md:h-[520px] overflow-hidden mt-0 sm:mt-6">

            <?php if($featuredArticle->image): ?>
                <img src="<?php echo e(asset('storage/' . $featuredArticle->image)); ?>" alt="<?php echo e($featuredArticle->title); ?>"
                    class="block w-full h-full object-cover">
            <?php else: ?>
                <div class="w-full h-full bg-gradient-to-br from-tanean-green to-tanean-beige"></div>
            <?php endif; ?>

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/55 to-black/5"></div>

            <!-- Content -->
            <div class="absolute bottom-0 left-0 right-0 px-5 py-8 md:p-16">
                <div class="container mx-auto max-w-4xl">
                    <span
                        class="inline-block px-3 py-1 bg-white/90 text-tanean-dark text-xs font-semibold uppercase tracking-wide rounded mb-4">
                        <?php echo e($featuredArticle->category); ?>

                    </span>
                    <h1 class="font-display text-2xl md:text-5xl font-bold text-[#f2f0eb] mb-4 leading-tight">
                        <?php echo e($featuredArticle->title); ?>

                    </h1>
                    
                    <p class="font-display block sm:hidden text-sm text-[#f2f0eb]/90 mb-4 leading-relaxed">
                        <?php echo e(Str::limit($featuredArticle->excerpt, 90)); ?>

                    </p>

                    
                    <p class="font-display hidden sm:block text-base md:text-lg text-[#f2f0eb]/90 mb-6 leading-relaxed">
                        <?php echo e(Str::limit($featuredArticle->excerpt, 150)); ?>

                    </p>

                    <div class="font-display flex items-center text-[#f2f0eb]/80 text-sm space-x-4">
                        <span><?php echo e($featuredArticle->author); ?></span>
                        <span>•</span>
                        <span><?php echo e($featuredArticle->published_at->diffForHumans()); ?></span>
                    </div>
                    <a href="<?php echo e(route('article.show', $featuredArticle->slug)); ?>"
                        class="font-display inline-block mt-4 px-5 py-2.5 bg-white text-tanean-dark text-sm font-semibold rounded hover:bg-gray-100 transition">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if($search): ?>
        <section class="container mx-auto px-5 py-12 md:px-8 md:py-16">
            <h1 class="font-display text-2xl font-semibold text-tanean-dark mb-6">Hasil pencarian: <?php echo e($search); ?></h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['title' => $article->title,'image' => asset('storage/' . $article->image),'excerpt' => Str::limit($article->excerpt, 300),'author' => $article->author,'date' => $article->published_at->format('d M Y'),'link' => route('article.show', $article->slug)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Str::limit($article->excerpt, 300)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->published_at->format('d M Y')),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug))]); ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-tanean-dark">Artikel tidak ditemukan.</p>
                <?php endif; ?>
            </div>
            <div class="mt-8"><?php echo e($articles->links()); ?></div>
        </section>
    <?php endif; ?>

    <?php if(!$search): ?>
    <section class="container mx-auto px-5 py-12 md:px-8 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
            <div class="md:col-span-8 space-y-10">

                
                <section>
                    <h2
                        class="section-heading text-2xl md:text-3xl font-display font-medium-weight text-tanean-dark mb-6 border-l-8 border-tanean-beige pl-3">
                        <a href="<?php echo e(route('article.category', 'warta')); ?>" class="hover:text-tanean-beige">Warta</a>
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <?php $__currentLoopData = $wartaArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['variant' => 'lead','title' => $article->title,'image' => asset('storage/' . $article->image),'excerpt' => Str::limit($article->excerpt, 300),'author' => $article->author,'date' => $article->published_at->format('d M Y'),'link' => route('article.show', $article->slug)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'lead','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Str::limit($article->excerpt, 300)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->published_at->format('d M Y')),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug))]); ?>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </section>

                
                <section>
                    <h2
                        class="section-heading text-2xl md:text-3xl font-display font-medium-weight text-tanean-dark mb-6 border-l-8 border-tanean-green pl-3">
                        <a href="<?php echo e(route('article.category', 'warita')); ?>" class="hover:text-tanean-beige">Warita</a>
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <?php $__currentLoopData = $waritaArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['title' => $article->title,'image' => asset('storage/' . $article->image),'excerpt' => Str::limit($article->excerpt, 320),'author' => $article->author,'date' => $article->published_at->format('d M Y'),'link' => route('article.show', $article->slug)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Str::limit($article->excerpt, 320)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->published_at->format('d M Y')),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug))]); ?>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </section>

            </div>

            
            <aside class="md:col-span-4 md:border-l md:border-tanean-beige md:pl-8">
                <div class="sticky top-32 space-y-6">
                    <h2 class="section-heading text-2xl md:text-[32px] font-display font-medium-weight text-tanean-dark mb-6 border-l-8 md:border-tanean-beige pl-3"><a href="<?php echo e(route('article.category', 'swara')); ?>"
                            class="hover:text-tanean-beige">Swara</a></h2>

                    <?php $__currentLoopData = $swaraArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['variant' => 'compact','title' => $article->title,'image' => asset('storage/' . $article->image),'author' => $article->author,'excerpt' => Str::limit($article->excerpt, 120),'link' => route('article.show', $article->slug),'date' => $article->published_at->format('d M Y')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'compact','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Str::limit($article->excerpt, 120)),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug)),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->published_at->format('d M Y'))]); ?>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </aside>

        </div>
    </section>
    
    <div class="mb-4">
        <?php echo $__env->make('articles.category.partials.slider', [
            'articles' => $lensaArticles,
            'bgColor' => 'bg-tanean-beige',
            'title' => 'Lensa',
            'route' => 'lensa',
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <?php echo $__env->make('articles.category.video', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/articles/index.blade.php ENDPATH**/ ?>