<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('roles.index');
    }

    public function create(){
        $permissions = Permission::all();
        $users = User::all();
        return view('roles.create', compact('permissions', 'users'));
    }
}
