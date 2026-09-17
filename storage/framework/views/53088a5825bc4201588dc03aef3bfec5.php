<?php $__env->startSection('title', 'Scrape Artikel'); ?>
<?php $__env->startSection('header', 'Scrape Artikel dari Website'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-lg shadow p-6 max-w-4xl">

    
    <?php if(session('success')): ?>
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.scrape.post')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">URL Artikel</label>
            <input
                type="url"
                name="url"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                placeholder="https://alfikr.id/read/..."
                value="<?php echo e(old('url')); ?>"
                required
            >
            <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Kategori</label>
            <select
                name="category"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                required
            >
                <option value="">Pilih Kategori</option>
                <option value="warta" <?php echo e(old('category') == 'warta' ? 'selected' : ''); ?>>Warta</option>
                <option value="swara" <?php echo e(old('category') == 'swara' ? 'selected' : ''); ?>>Swara</option>
                <option value="warita" <?php echo e(old('category') == 'warita' ? 'selected' : ''); ?>>Warita</option>
                <option value="lensa" <?php echo e(old('category') == 'lensa' ? 'selected' : ''); ?>>Lensa</option>
            </select>
            <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="mb-6 p-4 bg-blue-50 text-blue-700 rounded text-sm">
            Sistem akan otomatis mengambil <strong>judul</strong>, <strong>konten</strong>,
            <strong>gambar utama</strong>, dan membuat <strong>ringkasan</strong>.
        </div>

        
        <div class="flex space-x-2">
            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition"
            >
                Scrape & Simpan
            </button>

            <a
                href="<?php echo e(route('admin.articles.index')); ?>"
                class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400 transition"
            >
                Batal
            </a>
        </div>

    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/scrape.blade.php ENDPATH**/ ?>