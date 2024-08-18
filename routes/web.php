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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('categories', CategoryController::class)->name('index', 'categories.index')->middleware('auth');
Route::resource('posts', PostController::class)->name('index', 'posts.index')->middleware('auth');
Route::resource('comments', CommentController::class)->name('index', 'comments.index')->middleware('auth');
Route::resource('tags', TagController::class)->name('index', 'tags.index')->middleware('auth');

Route::post('/upload_image', [PostController::class, 'upload'])->name('upload');

require __DIR__ . '/auth.php';
