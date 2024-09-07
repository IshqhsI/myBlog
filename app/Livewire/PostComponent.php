<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    public $posts = [];
    public $search = '';
    public function render()
    {
        $this->posts = Post::where('title', 'like', '%' . $this->search . '%')->get();
        return view('livewire.post-component', [
            'posts' => $this->posts
        ]);
    }

    public function searchPost()
    {
        $this->posts = Post::where('title', 'like', '%' . $this->search . '%')->orWhere('content', 'like', '%' . $this->search . '% ')->get();
    }

    public function updateStatusPost($status, $id)
    {
        $post = Post::find($id);
        $post->status = $status;
        $post->save();
    }
}
