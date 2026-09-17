

<section class="bg-[#f2f0eb] font-serif text-gray-900 py-12 md:py-16 px-6 md:px-12 lg:px-20">
    <div class="container mx-auto p-6 md:p-12 lg:p-20 border shadow-lg">
        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold tracking-wide">Video</h2>
        </div>

        <?php if($mainVideo): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-start">
                <div class="relative group cursor-pointer w-full">
                    <img src="<?php echo e($mainVideo->thumbnail_url); ?>" alt="<?php echo e($mainVideo->title); ?>"
                        class="w-full h-auto object-cover aspect-video shadow-sm">
                    
                    <div class="absolute inset-0 flex items-center justify-center transition-colors bg-black/10 group-hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 md:h-24 md:w-24 text-grey-200 opacity-90 group-hover:opacity-100 transition-transform group-hover:scale-105" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <circle cx="12" cy="12" r="10" />
                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/>
                        </svg>
                    </div>
                </div>

                <div class="flex flex-col justify-center">
                    <h3 class="text-1xl md:text-2xl font-bold leading-tight capitalize"><?php echo e($mainVideo->title); ?></h3>
                    <p class="text-xs md:text-md font-medium text-gray-700 mt-3 mb-4 capitalize"><?php echo e($mainVideo->author); ?></p>
                    <p class="text-xs md:text-md leading-relaxed text-justify text-gray-800">
                        <?php echo e(Str::limit($mainVideo->description, 350)); ?> 
                    </p>
                </div>
            </div>
        <?php else: ?>
            <div class="text-center py-16 text-gray-600 italic border-2 border-dashed border-gray-400 rounded-lg">
                <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 19h8a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                <p>Tidak ada video utama yang tersedia saat ini.</p>
            </div>
        <?php endif; ?>

        <?php if($otherVideos->count() > 0): ?>
        <div class="mt-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 lg:gap-10">
                <?php $__currentLoopData = $otherVideos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col group cursor-pointer">
                        <div class="relative w-full aspect-video overflow-hidden mb-4">
                            <img src="<?php echo e($video->thumbnail_url); ?>" alt="<?php echo e($video->title); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            
                            <div class="absolute inset-0 flex items-center justify-center transition-colors bg-black/10 group-hover:bg-black/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-grey-200 opacity-90 group-hover:opacity-100 transition-transform group-hover:scale-105" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                    <circle cx="12" cy="12" r="10" />
                                    <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg md:text-xl font-bold leading-tight group-hover:underline decoration-[#cda45e] capitalize decoration-2 underline-offset-4 transition-all">
                                <?php echo e($video->title); ?>

                            </h4>
                            <p class="text-sm font-medium text-gray-700 mt-2 capitalize"><?php echo e($video->author); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/articles/category/video.blade.php ENDPATH**/ ?>