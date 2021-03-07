<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    public function index(){

        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'edit articles']);
        // $role = Role::findById(1);
        // $permission = Permission::create(['name' => 'view post']);
        // $permission->assignRole($role);
        // $role->givePermissionTo($permission);

        return view('home/index');
    }
}
