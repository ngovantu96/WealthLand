<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;





//web

Route::get('wealthlan',function(){
    return view('page.index');
})->name('page.index');

Route::get('wealthlan/contact',function(){
    return view('page.contact');
});

Route::get('/', [HomeController::class,'index'])->name('admin');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'checkLogin'])->name('checklogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// user
Route::prefix('/user')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('user.list');
    Route::get('/create',[UserController::class,'formCreate'])->name('user.create');
    Route::post('/store',[UserController::class,'store'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::post('/update-password/{id}',[UserController::class,'editPass'])->name('user.edit-pass');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
});


// role
//Route::get('/role', [RoleController::class,'index'])->name('role.list');
Route::prefix('/role')->group(function(){
    Route::get('/',[RoleController::class,'index'])->name('role.list');
    Route::post('/store',[RoleController::class,'store'])->name('role.store');
    Route::get('/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
    Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
});

//  bannner
Route::prefix('/banner')->group(function(){
    Route::get('/',[BannerController::class,'index'])->name('banner.list');
    Route::get('/create',[BannerController::class,'formCreate'])->name('banner.create');
    Route::post('/store',[BannerController::class,'store'])->name('banner.store');
    Route::get('/edit/{id}',[BannerController::class,'edit'])->name('banner.edit');
    Route::post('/update/{id}',[BannerController::class,'update'])->name('banner.update');
    Route::get('/delete/{id}',[BannerController::class,'delete'])->name('banner.delete');
});

// category
Route::prefix('/category')->group(function(){
    Route::get('/',[CategoryController::class,'index'])->name('category.list');
    Route::get('/create',[CategoryController::class,'formCreate'])->name('category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
});

//land
Route::prefix('/land')->group(function(){
    Route::get('/',[LandController::class,'index'])->name('land.list');
    Route::get('/create',[LandController::class,'formCreate'])->name('land.create');
    Route::post('/store',[LandController::class,'store'])->name('land.store');
    Route::get('/edit/{id}',[LandController::class,'edit'])->name('land.edit');
    Route::post('/update/{id}',[LandController::class,'update'])->name('land.update');
    Route::get('/delete/{id}',[LandController::class,'delete'])->name('land.delete');
});

//introduce
Route::prefix('/introduce')->group(function(){
    Route::get('/',[IntroduceController::class,'index'])->name('introduce.list');
    Route::get('/create',[IntroduceController::class,'formCreate'])->name('introduce.create');
    Route::post('/store',[IntroduceController::class,'store'])->name('introduce.store');
    Route::get('/edit/{id}',[IntroduceController::class,'edit'])->name('introduce.edit');
    Route::post('/update/{id}',[IntroduceController::class,'update'])->name('introduce.update');
    Route::get('/delete/{id}',[IntroduceController::class,'delete'])->name('introduce.delete');
});
//new_post
Route::prefix('/new-post')->group(function(){
    Route::get('/',[NewPostController::class,'index'])->name('new-post.list');
    Route::post('/store',[NewPostController::class,'store'])->name('new-post.store');
    Route::get('/edit/{id}',[NewPostController::class,'edit'])->name('new-post.edit');
    Route::post('/update/{id}',[NewPostController::class,'update'])->name('new-post.update');
    Route::get('/delete/{id}',[NewPostController::class,'delete'])->name('new-post.delete');
});

//post
Route::prefix('/post')->group(function(){
    Route::get('/',[PostController::class,'index'])->name('post.list');
    Route::get('/create',[PostController::class,'formCreate'])->name('post.create');
    Route::post('/store',[PostController::class,'store'])->name('post.store');
    Route::get('/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/update/{id}',[PostController::class,'update'])->name('post.update');
    Route::get('/delete/{id}',[PostController::class,'delete'])->name('post.delete');
});
//partner
Route::prefix('/partner')->group(function(){
    Route::get('/',[PartnerController::class,'index'])->name('partner.list');
    Route::get('/create',[PartnerController::class,'create'])->name('partner.create');
    Route::post('/store',[PartnerController::class,'store'])->name('partner.store');
    Route::get('/edit/{id}',[PartnerController::class,'edit'])->name('partner.edit');
    Route::post('/update/{id}',[PartnerController::class,'update'])->name('partner.update');
    Route::get('/delete/{id}',[PartnerController::class,'delete'])->name('partner.delete');
});

//contact
Route::prefix('/contact')->group(function(){
    Route::get('/',[ContactController::class,'index'])->name('contact.list');
    Route::get('/create',[ContactController::class,'create'])->name('contact.create');
    Route::post('/store',[ContactController::class,'store'])->name('contact.store');
    Route::get('/delete/{id}',[ContactController::class,'delete'])->name('contact.delete');
});





