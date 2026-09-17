
<div class="hidden md:block relative">
    <button
        class="lensaPrevDesktop-<?php echo e($uniqueId ?? 'default'); ?> absolute -left-6 top-1/2 -translate-y-1/2 z-10
w-12 h-12 rounded-full
bg-white/90 backdrop-blur
shadow-md hover:shadow-lg
flex items-center justify-center
text-2xl text-tanean-dark
transition-all duration-200
hover:-translate-x-0.5
hover:bg-white
focus:outline-none focus:ring-2 focus:ring-tanean-beige">
        ‹
    </button>

    <button
        class="lensaNextDesktop-<?php echo e($uniqueId ?? 'default'); ?> absolute -right-6 top-1/2 -translate-y-1/2 z-10
w-12 h-12 rounded-full
bg-white/90 backdrop-blur
shadow-md hover:shadow-lg
flex items-center justify-center
text-2xl text-tanean-dark
transition-all duration-200
hover:translate-x-0.5
hover:bg-white
focus:outline-none focus:ring-2 focus:ring-tanean-beige">
        ›
    </button>

    <div class="lensaSliderDesktop-<?php echo e($uniqueId ?? 'default'); ?> flex gap-8 overflow-hidden">
        <div class="carousel-container-<?php echo e($uniqueId ?? 'default'); ?> flex transition-transform duration-300 ease-in-out">
            <?php
                $articlesCollection = collect($articles ?? []);
                $chunkedArticles = $articlesCollection->chunk(3);
            ?>

            <?php $__empty_1 = true; $__currentLoopData = $chunkedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="carousel-slide flex gap-8 min-w-full">
                    <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex-1">
                            <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['variant' => 'masyarakat-adat','title' => $article->title,'image' => asset('storage/' . $article->image),'link' => route('article.show', $article->slug),'author' => $article->author]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'masyarakat-adat','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author)]); ?>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php for($i = count($chunk); $i < 3; $i++): ?>
                        <div class="flex-1 invisible">
                            <div class="h-32"></div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-500 w-full text-center">Belum ada artikel.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="md:hidden relative">
    <button
        class="lensaPrevMobile-<?php echo e($uniqueId ?? 'default'); ?> absolute -left-6 top-1/2 -translate-y-1/2 z-10
w-12 h-12 rounded-full
bg-white/90 backdrop-blur
shadow-md hover:shadow-lg
flex items-center justify-center
text-2xl text-tanean-dark
transition-all duration-200
hover:-translate-x-0.5
hover:bg-white
focus:outline-none focus:ring-2 focus:ring-tanean-beige">
        ‹
    </button>

    <button
        class="lensaNextMobile-<?php echo e($uniqueId ?? 'default'); ?> absolute -right-6 top-1/2 -translate-y-1/2 z-10
w-12 h-12 rounded-full
bg-white/90 backdrop-blur
shadow-md hover:shadow-lg
flex items-center justify-center
text-2xl text-tanean-dark
transition-all duration-200
hover:translate-x-0.5
hover:bg-white
focus:outline-none focus:ring-2 focus:ring-tanean-beige">
        ›
    </button>

    <div class="lensaSliderMobile-<?php echo e($uniqueId ?? 'default'); ?> flex gap-8 overflow-hidden">
        <div class="carousel-container-<?php echo e($uniqueId ?? 'default'); ?> flex transition-transform duration-300 ease-in-out">
            <?php
                $articlesCollection = collect($articles ?? []);
            ?>
            
            <?php $__empty_1 = true; $__currentLoopData = $articlesCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="carousel-slide min-w-full">
                    <?php if (isset($component)) { $__componentOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ef36d4355cd7834c6b42ce99ba2ff15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-card','data' => ['variant' => 'masyarakat-adat','title' => $article->title,'image' => asset('storage/' . $article->image),'link' => route('article.show', $article->slug),'author' => $article->author]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'masyarakat-adat','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->title),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('storage/' . $article->image)),'link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('article.show', $article->slug)),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->author)]); ?>
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
                <p class="text-gray-500 w-full text-center">Belum ada artikel.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="hidden md:flex carousel-dots-desktop-<?php echo e($uniqueId ?? 'default'); ?> justify-center gap-3">
    <?php
        $articlesCollection = collect($articles ?? []);
        $totalArticles = $articlesCollection->count();
    ?>
    
    <?php if($totalArticles > 0): ?>
        <?php for($i = 0; $i < ceil($totalArticles / 3); $i++): ?>
            <button class="dot-desktop-<?php echo e($uniqueId ?? 'default'); ?> w-3 h-3 rounded-full <?php echo e($i === 0 ? 'bg-white' : 'bg-gray-400'); ?>"
                data-index="<?php echo e($i); ?>"></button>
        <?php endfor; ?>
    <?php endif; ?>
</div>


<div class="md:hidden carousel-dots-mobile-<?php echo e($uniqueId ?? 'default'); ?> justify-center gap-3 flex">
    <?php
        $articlesCollection = collect($articles ?? []);
        $totalArticles = $articlesCollection->count();
    ?>
    
    <?php if($totalArticles > 0): ?>
        <?php for($i = 0; $i < $totalArticles; $i++): ?>
            <button class="dot-mobile-<?php echo e($uniqueId ?? 'default'); ?> w-3 h-3 rounded-full <?php echo e($i === 0 ? 'bg-white' : 'bg-gray-400'); ?>"
                data-index="<?php echo e($i); ?>"></button>
        <?php endfor; ?>
    <?php endif; ?>
</div><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/articles/category/partials/slider-content.blade.php ENDPATH**/ ?>