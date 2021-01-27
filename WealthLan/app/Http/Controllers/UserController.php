<?php

namespace App\Http\Controllers;


use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(){
        $users = User::all();
        $roles = Role::all();
        return view('home.user.list',compact('users','roles'));
    }
    public function formCreate(){
        $roles = Role::all();
        return view('home.user.create',compact('roles'));
    }
    public function store(Request $request){
        $this->userRepository->create($request);
        return redirect()->route('user.list')->with('add','add successful!!!');
    }
    public function edit($id){
        $user = $this->userRepository->findById($id);
        $roles = Role::all();
        return view('home.user.edit',compact('user','roles'));
    }
    public function update(Request $request,$obj){
        $this->userRepository->update($request,$obj);
        return redirect()->route('user.list')->with('update','update successful!!');
    }
    public function delete($id){
        $this->userRepository->delete($id);
        return redirect()->route('user.list')->with('delete','delete successful!!!!');
    }
    public function editPass(Request $request,$obj){
        $this->userRepository->editPass($request,$obj);
        return redirect()->route('user.list')->with('update','update password successful!!!!');
    }
}
