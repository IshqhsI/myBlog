<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
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


        Post::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'content' => $request['content'],
            'image' => $image->hashName(),
            'category_id' => $request['category_id'],
            'user_id' => $request['user_id'],
        ]);


        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }


}
