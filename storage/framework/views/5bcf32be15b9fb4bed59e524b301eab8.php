<?php $__env->startSection('title', 'Edit Artikel'); ?>
<?php $__env->startSection('header', 'Edit Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-lg shadow p-6 max-w-4xl">
    <form action="<?php echo e(route('admin.articles.update', $article)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Judul</label>
            <input type="text" name="title" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" value="<?php echo e(old('title', $article->title)); ?>" required>
            <?php $__errorArgs = ['title'];
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
            <select name="category" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required>
                <option value="">Pilih Kategori</option>
                <option value="warta" <?php echo e(old('category', $article->category) == 'warta' ? 'selected' : ''); ?>>Warta</option>
                <option value="warita" <?php echo e(old('category', $article->category) == 'warita' ? 'selected' : ''); ?>>Warita</option>
                <option value="swara" <?php echo e(old('category', $article->category) == 'swara' ? 'selected' : ''); ?>>Swara</option>
                <option value="lensa" <?php echo e(old('category', $article->category) == 'lensa' ? 'selected' : ''); ?>>Lensa</option>
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

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Ringkasan</label>
            <textarea name="excerpt" rows="3" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required><?php echo e(old('excerpt', $article->excerpt)); ?></textarea>
            <?php $__errorArgs = ['excerpt'];
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
            <label class="block text-gray-700 font-medium mb-2">Konten</label>
            <textarea name="content" rows="10" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required><?php echo e(old('content', $article->content)); ?></textarea>
            <?php $__errorArgs = ['content'];
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
            <label class="block text-gray-700 font-medium mb-2">Gambar</label>
            <?php if($article->image): ?>
            <div class="mb-2">
                <img src="<?php echo e(asset('storage/' . $article->image)); ?>" alt="Current image" class="w-32 h-32 object-cover rounded">
            </div>
            <?php endif; ?>
            <input type="file" name="image" class="w-full border border-gray-300 rounded px-4 py-2" accept="image/*">
            <?php $__errorArgs = ['image'];
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

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Update
            </button>
            <a href="<?php echo e(route('admin.articles.index')); ?>" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                Batal
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/admin/articles/edit.blade.php ENDPATH**/ ?>