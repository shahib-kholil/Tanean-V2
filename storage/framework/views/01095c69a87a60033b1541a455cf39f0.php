<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'image' => null,
    'category' => null,
    'excerpt' => null,
    'author' => 'Unknown',
    'date' => null,
    'link' => '#',
    'variant' => 'default', // default | lead | compact | slider
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title',
    'image' => null,
    'category' => null,
    'excerpt' => null,
    'author' => 'Unknown',
    'date' => null,
    'link' => '#',
    'variant' => 'default', // default | lead | compact | slider
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $imageHeight = match ($variant) {
        'lead' => 'h-72 md:h-[275px]',
        'kategori' => 'h-72 md:h-[300px]',
        'compact' => 'h-24',
        'slider' => 'h-32',
        'lensa' => 'h-[100vh]',
        default => 'h-48',
    };

    $titleClass = match ($variant) {
        'lead' => 'text-h2-custom font-medium-weight font-display',
        'compact' => 'text-h2-custom font-medium-weight font-display leading-snug',
        'slider' => 'text-h2-custom font-medium-weight font-display',
        default => 'text-h2-custom font-medium-weight font-display',
    };

?>

<article
    <?php echo e($attributes->merge([
        'class' => collect([
            'overflow-hidden transition',
            $variant === 'slider' ? 'w-[320px]  flex-shrink-0 max-w-none' : '',
        ])->implode(' '),
    ])); ?>>

    <?php if($image): ?>
        <div class="w-full <?php echo e($imageHeight); ?> overflow-hidden bg-tanean-green">
            <a href="<?php echo e($link); ?>"><img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>"
                    class="w-full h-full object-cover hover:scale-105 transition duration-300" onerror="this.remove()">
            </a>
        </div>
    <?php endif; ?>


    <div class="py-4">
        <?php if($category): ?>
            <span class="text-xs font-medium uppercase mb-2 inline-block">
                <?php echo e($category); ?>

            </span>
        <?php endif; ?>

        <h2 class="<?php echo e($titleClass); ?> mb-2">
            <a href="<?php echo e($link); ?>" class="hover:underline">
                <?php echo e($title); ?>

            </a>
        </h2>
        <div class="flex justify-between items-center text-author-custom mb-2">
            <span><?php echo e($author); ?></span>
            <?php if($date): ?>
                <span><?php echo e($date); ?></span>
            <?php endif; ?>
        </div>
        <?php if($excerpt && $variant !== 'compact'): ?>
            <p class="text-excerpt-custom text-left">
                <?php echo e($excerpt); ?>

            </p>
        <?php endif; ?>
    </div>
</article>
<?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/components/article-card.blade.php ENDPATH**/ ?>