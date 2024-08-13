<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class InputPostComponent extends Component
{
    public $title;
    public $slug = '';
    public function render()
    {
        $categories = Category::all();
        return view('livewire.input-post-component', [
            'categories' => $categories
        ]);
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
}
