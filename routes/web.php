<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoleController;

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::post('/contact/submit', [MainController::class, 'contactSubmit'])->name('contactSubmit');

Route::get('/posts', [MainController::class, 'posts'])->name('posts');
Route::get('/posts/{post}', [MainController::class, 'post'])->name('post.show');

Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/categories/{category}', [MainController::class, 'category'])->name('category.show');

Route::get('/tags/{tag}', [MainController::class, 'tag'])->name('tag.show');

Route::post('/comment/add', [MainController::class, 'addComment'])->name('comments.user.store');
Route::post('/search', [MainController::class, 'search'])->name('search');

Route::get('/test', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('superadmin')->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/admin/categories', CategoryController::class)->name('index', 'categories.index');
    Route::resource('/admin/posts', PostController::class)->name('index', 'posts.index');
    Route::resource('/admin/comments', CommentController::class)->name('index', 'comments.index');
    Route::resource('/admin/tags', TagController::class)->name('index', 'tags.index');
    Route::resource('/admin/roles', RoleController::class)->name('index', 'roles.index');
    Route::post('/upload_image', [PostController::class, 'upload'])->name('upload');
});

require __DIR__ . '/auth.php';
