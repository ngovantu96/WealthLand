<?php

use App\Http\Controllers\CategoryImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\PageController;
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
use App\Models\Land;

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

//Route::get('wealthlan',function(){
//    return view('page.index');
//})->name('page.index');
//web

Route::prefix('/wealthland')->group(function(){
    Route::get('/',[PageController::class,'index'])->name('page.index');
    Route::post('/lien-he',[PageController::class,'store'])->name('contact.create');
    Route::get('/tin-tuc',[PageController::class,'post'])->name('post.index');
    Route::get('/doi-tac/{id}',[PageController::class,'partner'])->name('partner.index');
    Route::get('/gioi-thieu',[IntroduceController::class,'Introduce'])->name('introduce.index');
    Route::get('/lien-he',[ContactController::class,'contact'])->name('contact.index');
    Route::get('/hinh-anh',[ImageController::class,'image'])->name('image.index');
    Route::get('/loai-du-an/{id}',[PageController::class,'categoryland_detail'])->name('categoryland.detail');
    Route::get('/tin-tuc/{id}',[PageController::class,'post_detail'])->name('post.detail');

    Route::post('/dang-ki-tu-van',[ContactController::class,'store'])->name('contact.store');

    Route::post('/ket-qua-tim-kiem',[PageController::class,'search'])->name('search');

});


// Route::get('/', [HomeController::class,'index'])->name('admin');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'checkLogin'])->name('checklogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// user
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('admin.index');

Route::prefix('/user')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('user.list');
    Route::get('/create',[UserController::class,'formCreate'])->name('user.create');
    Route::post('/store',[UserController::class,'store'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::post('/update-password/{id}',[UserController::class,'editPass'])->name('user.edit-pass');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
});

// categoryland
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
//category Post
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
    Route::get('/create',[PostController::class,'create'])->name('post.create');
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
    Route::get('/delete/{id}',[ContactController::class,'delete'])->name('contact.delete');
});

// category Image


//image
Route::prefix('/image')->group(function(){
    Route::get('/',[ImageController::class,'index'])->name('image.list');
    Route::get('/create',[ImageController::class,'create'])->name('image.create');
    Route::post('/store',[ImageController::class,'store'])->name('image.store');
    Route::get('/edit/{id}',[ImageController::class,'edit'])->name('image.edit');
    Route::post('/update/{id}',[ImageController::class,'update'])->name('image.update');
    Route::get('/delete/{id}',[ImageController::class,'delete'])->name('image.delete');
});

});

