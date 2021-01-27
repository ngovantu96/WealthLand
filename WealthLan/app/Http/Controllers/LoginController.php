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
            'email' => $request->email,
            'password' => $request->password,
         ];
         if(Auth::attempt([$user])){
             return  redirect()->route('admin');
         }else {
             return view('home.login');
         }
        //  if (Auth::attempt($user) && Gate::allows(1)) {
        //         return redirect()->route('admin');
        // } else {
        //     return view('error.403');

        // }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
