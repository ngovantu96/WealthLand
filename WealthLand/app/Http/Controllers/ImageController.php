<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ImageRepo\ImageRepositoryInterface;
use App\Http\Requests\ImageRequest;
use App\Models\Image;
use App\Models\Category;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    private $imageRepository;
    protected $imageModel;
    public function __construct(ImageRepositoryInterface $imageRepository,Image $imageModel){
        $this->imageRepository = $imageRepository;
        $this->imageModel = $imageModel;
    }
    public function index(){
        $images = $this->imageRepository->getAll();
        return view('home.image.list',compact('images'));
    }
    public function create(){
        return view('home.image.create');
    }

    public function store(ImageRequest $request){
       $this->imageRepository->create($request);
       return redirect()->route('image.list')->with('add','Add successful !!!');
    }

//     public function edit($id){
//         $image = $this->imageRepository->findById($id);
//         return view('home.image.edit',compact('image'));
//     }
// //
//     public function update(ImageRequest $request,$id){
//         $image = $this->imageRepository->findById($id);
//         $this->imageRepository->update($request, $image);
//         return  redirect()->route('image.list')->with('update','Update successful !!!');
//     }
//
    public function delete($id){
        $image = $this->imageModel->findOrFail($id);
        Storage::disk('s3')->delete($image->image);
        $this->imageRepository->delete($id);
        return redirect()->route('image.list')->with('delete','delete successful !!!');
    }
    public function image(){
        $images = $this->imageRepository->getAll();
        $listLands = Category::all();
        $partners = Partner::all();
        return view('page.image',compact('images','listLands','partners'));
    }
}
