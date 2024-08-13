<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentComponent extends Component
{
    public function render()
    {
        $comments = Comment::all();
        return view('livewire.comment-component', compact('comments'));
    }
}
