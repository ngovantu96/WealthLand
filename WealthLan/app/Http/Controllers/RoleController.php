<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('home.role.list',compact('roles'));
    }
    public function store(RoleRequest $request){
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        return redirect()->route('role.list')->with('add','add successful!!!');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('home.role.list',compact('role'));
    }
    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();
        return redirect()->route('role.list')->with('update','update successful!!!');
    }

    public function delete($id)
    {
        Role::where('id',$id)->delete();
        return redirect()->route('role.list')->with('delete','delete successful!!!');
    }

}
