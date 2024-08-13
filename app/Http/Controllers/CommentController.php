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
}
