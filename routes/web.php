<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminStatusController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SuperCategoryController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::paginate(16);
    return view('welcome', compact('posts'));
})->name('homepage');

Route::get('/super', [SuperCategoryController::class, 'index'])->name('super.index');
Route::get('/sub', [SubCategoryController::class, 'index'])->name('sub.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('admin/posts', [AdminPostController::class, 'index'])->name('admin.post.index');
    Route::get('admin/post/create', [AdminPostController::class, 'create'])->name('admin.post.create');
    Route::post('admin/post/store', [AdminPostController::class, 'store'])->name('admin.post.store');

    Route::get('admin/categories', [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('admin/category/store', [AdminCategoryController::class, 'store'])->name('admin.category.store');

    Route::get('admin/statuses', [AdminStatusController::class, 'index'])->name('admin.status.index');
    Route::get('admin/status/create', [AdminStatusController::class, 'create'])->name('admin.status.create');
    Route::post('admin/status/store', [AdminStatusController::class, 'store'])->name('admin.status.store');
});

require __DIR__ . '/auth.php';
