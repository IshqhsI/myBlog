<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tag;


class TagComponent extends Component
{
    public $tags;
    public $search = "";

    public function render()
    {
        $this->tags = Tag::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.tag-component', [
            'tags' => $this->tags
        ]);
    }


    public function searchTag()
    {
        $this->tags = Tag::where('name', 'like', '%' . $this->search . '%')->get();
    }
}
