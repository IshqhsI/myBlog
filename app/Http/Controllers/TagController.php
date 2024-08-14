<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

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
}
