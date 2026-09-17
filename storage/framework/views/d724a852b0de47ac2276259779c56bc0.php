<?php
    $uniqueId = $uniqueId ?? 'slider-' . uniqid();
?>

<section class="<?php echo e($bgColor); ?> py-4 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-8">
        
        <h2
            class="section-heading font-display font-medium text-3xl md:text-4xl text-tanean-dark pl-3 border-l-8 border-tanean-dark mb-4">
            <a href="<?php echo e(route('article.category', $route)); ?>"><?php echo e($title); ?></a>
        </h2>

        <?php echo $__env->make('articles.category.partials.slider-content', ['articles' => $articles, 'uniqueId' => $uniqueId], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</section>
<?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/articles/category/partials/slider.blade.php ENDPATH**/ ?>