<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        $posts = Post::latest()->take(5)->get();

        return view('dashboard', [
            'posts' => $posts,
            'totalPosts' => Post::count(),
            'totalComments' => Comment::count(),
            'totalTags' => Tag::count(),
            'totalCategories' => Category::count(),
        ]);
    }
}
