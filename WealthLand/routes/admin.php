<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin')->name('admin')->group(function(){
    Route::view('/login','auth.login')->name('login');
    Route::post('/login',[LoginController::class,'checkLogin'])->name('checklogin');
});
