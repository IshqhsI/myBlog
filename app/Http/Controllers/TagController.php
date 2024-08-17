<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class TagController extends Controller
{
    //
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:tags,name'],
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return redirect('/tags')->with('success', 'Tag created successfully.');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tag.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:tags,name,'.$id],
        ]);

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        return redirect('/tags')->with('success', 'Tag updated successfully.');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect('/tags')->with('success', 'Tag deleted successfully.');
    }

    public function show($tag)
    {
        $tag = Cache::remember('tags', 60, function () use ($tag) {
            return Tag::where('name', $tag)->first();
        });
        $posts = null;

        if($tag === null){
            return redirect('/tags')->with('error', 'Tag not found.');
        }

        if($tag && $tag->posts !== null){
            $posts = $tag->posts;
        };
        return view('tag.show', compact('tag', 'posts'));
    }
}
