<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Cache::remember('posts', 60, function () {
            return Post::latest()->get();
        });
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request['user_id'] = auth()->user()->id;

        // upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            $request['image'] = $image->hashName();
        }

        $post = Post::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'content' => $request['content'],
            'image' => $image->hashName(),
            'category_id' => $request['category_id'],
            'user_id' => $request['user_id'],
        ]);

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;

        $post = Post::find($id);
        $post->update([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'content' => $request['content'],
            'category_id' => $request['category_id'],
            'user_id' => $request['user_id'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            $post->update([
                'image' => $image->hashName(),
            ]);
        }

        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }


    public function show($slug)
    {
        $post = Cache::remember('posts', 60, function () use ($slug) {
            return Post::where('slug', $slug)->first();
        });

        if($post === null){
            return redirect('/posts')->with('error', 'Post not found.');
        }

        return view('post.show', compact('post'));
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }


}
