<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $user = auth()->user();
        $request['user_id'] = $user->id;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            $imagePath = $image->store('public/posts');
            $imageName = basename($imagePath);
        }

        $post = Post::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'content' => $request['content'],
            'image' => $imageName ?? null,
            'category_id' => $request['category_id'],
            'user_id' => $user->id,
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
        $post = Post::where('slug', $slug)->first();

        if ($post === null) {
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

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();

        $filePath = $file->storeAs('public/uploads', $fileName);
        $fileUrl = Storage::url($filePath);

        // Kembalikan respons JSON dengan URL gambar
        return response()->json([
            'location' => $fileUrl
        ]);
    }

}
