<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Post;

class InputCommentComponent extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.input-comment-component', compact('posts'));
    }
}
