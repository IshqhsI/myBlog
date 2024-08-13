<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Comment;

class CommentController extends Controller
{
    //
    public function index(){
        $comments = Comment::all();
        return view('comment.index', compact('comments'));
    }
}
