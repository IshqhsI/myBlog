<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Features\SupportTesting\Render;

class CategoryComponent extends Component
{
    public $categories = [];
    public $search = '';
    public function render()
    {
        $this->categories = Category::where('name', 'like', '%' . $this->search . '%')->orWhere('description', 'like', '%' . $this->search . '%')->get();
        return view('livewire.category-component', [
            'categories' => $this->categories
        ]);
    }

    public function searchCategory()
    {
        $this->categories = Category::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.category-component', [
            'categories' => $this->categories
        ]);
    }
}
