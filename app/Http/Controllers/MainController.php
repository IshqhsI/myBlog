<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){

        $recentPosts = Post::orderBy('created_at', 'desc')->with('category')->limit(3)->get();
        // $featuredPosts = Post::where('featured', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $posts = Post::orderBy('created_at', 'asc')->limit(1)->get();
        $categories = [];
        foreach($recentPosts as $post){
            $categories[] = $post->category;
        }
        return view('home', compact('posts', 'recentPosts', 'categories'));
    }

    public function posts(){
        $posts = Post::all();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->limit(5)->get();
        $tags = Tag::all();
        return view('posts', compact('posts', 'categories', 'tags'));
    }

    public function categories(){
        $categories = Category::all();
        $recentPosts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('categories', compact('categories', 'recentPosts'));
    }

    public function post($post){
        $post = Post::where('slug', $post)->with(['category', 'tags', 'comments'])->first();
        if($post == null || $post->count() == 0){
            return redirect('/posts');
        }
        $categories = Category::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->limit(3)
            ->get();
        $recentPosts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('post', compact('post', 'categories', 'recentPosts'));
    }

    public function category($category){
        $category = str_replace('-', ' ', $category);
        $category = Category::where('name', $category)->with('posts')->first();
        if($category == null || $category->count() == 0){
            return redirect('/categories');
        }
        $categories = Category::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->limit(3)
            ->get();
        $recentPosts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('category', compact('category', 'categories', 'recentPosts'));
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

    public function addComment(Request $request)
    {
        $request->validate([
            'post_slug' => 'required',
            'comment_text' => 'required',
        ]);

        $post_id = Post::where('slug', $request->post_slug)->firstOrFail();
        $post_id = $post_id->id;

        $comment = new Comment();
        $comment->post_id = $post_id;
        $comment->user_id = auth()->user()->id;
        $comment->comment_text = $request->comment_text;
        $comment->save();

        return redirect()->route('post.show', $request->post_slug);
    }
}
