<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index(){
        $comments = Comment::all();
        return view('comment.index', compact('comments'));
    }

    public function create(){
        return view('comment.create');
    }

    public function store(Request $request){
        $request->validate([
            'post_id' => 'required',
            'comment_text' => 'required',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = auth()->user()->id;
        $comment->comment_text = $request->comment_text;
        $comment->save();

        return redirect()->route('comments.index')->with('success', 'Comment created successfully.');
    }

    public function edit($id){
        $comment = Comment::find($id);
        return view('comment.edit', compact('comment'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'comment_text' => 'required',
        ]);

        $comment = Comment::find($id);
        $comment->comment_text = $request->comment_text;
        $comment->save();
        return redirect()->route('comments.index')->with('success', 'Comment updated successfully.');
    }

    public function destroy($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully.');
    }

    public function show($id){
        $comment = Comment::find($id);
        return view('comment.show', compact('comment'));
    }

}
