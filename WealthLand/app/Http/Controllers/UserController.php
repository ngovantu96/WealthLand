<?php

namespace App\Http\Controllers;


use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use App\Http\Requests\UserRequest;
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
        return view('home.user.list',compact('users'));
    }
    public function formCreate(){
        return view('home.user.create');
    }
    public function store(UserRequest $request){
        $this->userRepository->create($request);
        return redirect()->route('user.list')->with('add','add successful!!!');
    }
    public function edit($id){
        $user = $this->userRepository->findById($id);
        return view('home.user.edit',compact('user'));
    }
    public function update(UserRequest $request,$obj){
        $this->userRepository->update($request,$obj);
        return redirect()->route('user.list')->with('update','update successful!!');
    }
    public function delete($id){
        $this->userRepository->delete($id);
        return redirect()->route('user.list')->with('delete','delete successful!!!!');
    }
    public function editPass(UserRequest $request,$obj){
        $this->userRepository->editPass($request,$obj);
        return redirect()->route('user.list')->with('update','update password successful!!!!');
    }
}
