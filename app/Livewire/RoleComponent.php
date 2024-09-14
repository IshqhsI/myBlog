<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleComponent extends Component
{
    public $roles;
    public $search = "";
    public function render()
    {
        $this->roles = Role::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.role-component', [
            'roles' => Role::all()
        ]);
    }
}
