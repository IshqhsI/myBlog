<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;

class InputPostComponent extends Component
{
    public $title;
    public $slug = '';
    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('livewire.input-post-component', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
}
