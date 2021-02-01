<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ImageRepo\ImageRepositoryInterface;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
//    private $imageRepository;
//    public function __construct(ImageRepositoryInterface $imageRepository){
//        $this->imageRepository = $imageRepository;
//    }
    public function index(){
        $images = Image::all();
        return view('list',compact('images'));
    }
    public function formCreate(){
        return view('create');
    }

    public function store(ImageRequest $request){
        $image = new Image();
        $images = Storage::disk('s3')->put('image',$request->image,'public');
        $image->image = $images;

        $image->save();
        return  redirect()->route('image.list')->with('add','Add successful !!!');
    }
//    public function edit($id){
//        $introduce = $this->introduceRepository->findById($id);
//        return view('home.land.edit',compact('$introduce'));
//    }
//
//    public function update(ImageRequest $request,$id){
//        $introduce = $this->introduceRepository->findById($id);
//        $this->introduceRepository->update($request, $introduce);
//        return  redirect()->route('introduce.list')->with('update','Update successful !!!');
//    }
//
//    public function delete($id){
//        $this->introduceRepository->delete($id);
//        return redirect()->route('$introduce .list')->with('delete','delete successful !!!');
//    }
}
