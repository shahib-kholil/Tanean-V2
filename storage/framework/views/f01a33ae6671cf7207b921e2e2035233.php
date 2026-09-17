<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">

        <!-- Sidebar -->
        <?php if(auth()->guard()->check()): ?>
            <aside class="w-64 bg-gray-800 text-white">
                <div class="p-4">
                    <h2 class="text-2xl font-bold uppercase">Tanean.Id</h2>
                    <p class="text-sm text-gray-400"><?php echo e(ucfirst(Auth::user()->role)); ?></p>
                </div>
                <nav class="mt-4">
                    <?php if(method_exists(Auth::user(), 'isAdmin') && Auth::user()->isAdmin()): ?>
                        <a href="<?php echo e(route('admin.dashboard')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gray-700' : ''); ?>">Dashboard</a>
                        <a href="<?php echo e(route('admin.articles.index')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.articles.*') ? 'bg-gray-700' : ''); ?>">Artikel</a>
                        <a href="<?php echo e(route('admin.users.index')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.users.*') ? 'bg-gray-700' : ''); ?>">Users</a>
                    <?php elseif(method_exists(Auth::user(), 'isEditor') && Auth::user()->isEditor()): ?>
                        <a href="<?php echo e(route('admin.dashboard')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gray-700' : ''); ?>">Dashboard</a>
                        <a href="<?php echo e(route('admin.articles.index')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.articles.*') ? 'bg-gray-700' : ''); ?>">Artikel</a>
                    <?php elseif(method_exists(Auth::user(), 'isWartawan') && Auth::user()->isWartawan()): ?>
                        <a href="<?php echo e(route('admin.dashboard')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gray-700' : ''); ?>">Dashboard</a>
                        <a href="<?php echo e(route('admin.articles.index')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.articles.*') ? 'bg-gray-700' : ''); ?>">Daftar
                            Artikel Saya</a>
                        <a href="<?php echo e(route('admin.articles.create')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.articles.create') ? 'bg-gray-700' : ''); ?>">Tulis
                            Artikel</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('admin.dashboard')); ?>"
                            class="block px-4 py-2 hover:bg-gray-700 <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gray-700' : ''); ?>">Dashboard</a>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(route('admin.scrape')); ?>" class="block px-4 py-2 hover:bg-gray-700">Scrape Web</a>
                    </li>
                    <a href="<?php echo e(route('home')); ?>" class="block px-4 py-2 hover:bg-gray-700 mt-4" target="_blank">Lihat
                        Website</a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>" class="mt-4">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-700">Logout</button>
                    </form>
                </nav>
            </aside>
        <?php else: ?>
            <aside class="w-64 bg-gray-800 text-white p-6">
                <p class="text-sm">Silakan <a href="<?php echo e(route('login')); ?>" class="text-blue-300 hover:underline">login</a>
                    untuk mengakses panel admin.</p>
            </aside>
        <?php endif; ?>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </header>

            <!-- Content -->
            <div class="px-6 py-4">

                <h1 class="text-2xl font-semibold text-gray-800"><?php echo $__env->yieldContent('header'); ?> </h1>
            </div>
            <main class="p-6">
                <?php if(session('success')): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>
</body>

</html>
<?php /**PATH /home/shahib/Coding/Tanean laravel/resources/views/layouts/admin.blade.php ENDPATH**/ ?>