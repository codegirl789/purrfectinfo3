<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminStatusController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SuperCategoryController;
use App\Http\Controllers\UsersController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::latest()->paginate(16);
    return view('welcome', compact('posts'));
})->name('homepage');

Route::get('/super/{id}', [SuperCategoryController::class, 'show'])->name('super.show');
Route::get('/all/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::get('user/liked_posts', [UsersController::class, 'user_liked_posts'])->name('user_liked_posts');
Route::get('user/posts', [UsersController::class, 'user_posts'])->name('user_posts');
Route::get('user/comments', [UsersController::class, 'user_comments'])->name('user_comments');

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
    Route::get('admin/post/show/{id}', [AdminPostController::class, 'show'])->name('admin.post.show');
    Route::post('admin/post/store', [AdminPostController::class, 'store'])->name('admin.post.store');
    Route::get('admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post.edit');
    Route::patch('admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin.post.update');
    Route::delete('admin/post/destroy/{id}', [AdminPostController::class, 'destroy'])->name('admin.post.destroy');

    Route::get('admin/categories', [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::get('admin/category/show/{id}', [AdminCategoryController::class, 'show'])->name('admin.category.show');
    Route::post('admin/category/store', [AdminCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::patch('admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('admin/category/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('admin/statuses', [AdminStatusController::class, 'index'])->name('admin.status.index');
    Route::get('admin/status/create', [AdminStatusController::class, 'create'])->name('admin.status.create');
    Route::post('admin/status/store', [AdminStatusController::class, 'store'])->name('admin.status.store');
    Route::get('admin/status/edit/{id}', [AdminStatusController::class, 'edit'])->name('admin.status.edit');
    Route::patch('admin/status/update/{id}', [AdminStatusController::class, 'update'])->name('admin.status.update');
    Route::delete('admin/status/destroy/{id}', [AdminStatusController::class, 'destroy'])->name('admin.status.destroy');
});

require __DIR__ . '/auth.php';
