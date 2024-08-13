<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category-component', compact('categories'));
    }

}
