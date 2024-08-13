<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    public $posts = [];
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.post-component', [
            'posts' => $this->posts
        ]);
    }
}
