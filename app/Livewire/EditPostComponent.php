<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class EditPostComponent extends Component
{
    public $title = '';
    public $post;
    public $categories;
    public $tags;
    public $slug;
    public $edit = 0;
    public $statuses;

    public function mount($post, $categories, $tags, $statuses)
    {
        $this->post = $post;
        $this->categories = $categories;
        $this->tags = $tags;
        $this->title = $post->title;
        $this->statuses = $statuses;
    }

    public function render()
    {

        return view('livewire.edit-post-component');
    }

    public function generateSlug()
    {
        $this->edit = true;
        $this->slug = Str::slug($this->title);
    }
}
