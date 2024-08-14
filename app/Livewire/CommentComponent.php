<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentComponent extends Component
{
    public $search = "";
    public $comments = [];

    public function render()
    {
        $this->comments = Comment::where('comment_text', 'like', '%' . $this->search . '%')->get();
        return view('livewire.comment-component', [
            'comments' => $this->comments
        ]);
    }

    public function searchComment(){
        $this->comments = Comment::where('comment_text', 'like', '%' . $this->search . '%')->get();
    }
}
