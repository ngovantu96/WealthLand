<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        return view('home.login');
    }

    public function checkLogin(Request $request){
        $user = [
            'email' => $request->username,
            'password' => $request->password,
         ];
         if (!Auth::attempt($user)) {
             return redirect()->route('login')->with('error','tài khoản đăng nhập hoặc mật khẩu sai');
         } else {
             return redirect()->route('admin.index');
         }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
