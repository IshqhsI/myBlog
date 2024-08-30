<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){
        $posts = Post::all();
        $categories = Category::all();
        return view('home', compact('posts', 'categories'));
    }

    public function posts(){
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts', compact('posts', 'categories', 'tags'));
    }

    public function categories(){
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function post($post){
        $post = Post::where('slug', $post)->with(['category', 'tags', 'comments'])->first();
        if($post == null || $post->count() == 0){
            return redirect('/posts');
        }
        return view('post', compact('post'));
    }

    public function category($category){
        $category = Category::where('name', $category)->with('posts')->first();
        if($category == null || $category->count() == 0){
            return redirect('/categories');
        }
        return view('category', compact('category'));
    }

    public function tag($tag){
        $tag = Tag::where('name', $tag)->with('posts')->first();
        if($tag == null || $tag->count() == 0){
            return redirect('/tags');
        }
        return view('tag', compact('tag'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
