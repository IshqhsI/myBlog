<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tag;

class TagComponent extends Component
{

    public function render()
    {
        $tags = Tag::all();
        return view('livewire.tag-component', compact('tags'));
    }
}
