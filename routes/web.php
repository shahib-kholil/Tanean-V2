<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SitePageController;

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/kategori/{category}', [ArticleController::class, 'category'])->name('article.category');
Route::get('/search', [ArticleController::class, 'search'])->name('search');
Route::get('/halaman/{slug}', [SitePageController::class, 'show'])
    ->whereIn('slug', ['tentang-kami', 'redaksi', 'pedoman-media-siber', 'kontak'])
    ->name('site-page.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
// Route::post('/videos', [VideoController::class, 'store'])->middleware('auth');
// Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->middleware('auth');
