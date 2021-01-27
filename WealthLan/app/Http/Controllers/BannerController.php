<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Repositories\BannerRepo\BannerRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    private $bannerRepository;
    private $bannerModel;
    public function __construct(BannerRepositoryInterface $bannerRepository, Banner $bannerModel){
        $this->bannerRepository = $bannerRepository;
        $this->bannerModel = $bannerModel;
    }

    public function index(){
        $banners = $this->bannerRepository->getAll();
        return view('home.banner.list',compact('banners'));
    }

    public function formCreate(){
        return view('home.banner.create');
    }

    public function store(Request $request){
        $this->bannerRepository->create($request);
        return  redirect()->route('banner.list')->with('add','Add successful !!!');
    }

    public function edit($id){
        $banner = $this->bannerRepository->findById($id);
        return view('home.banner.edit',compact('banner',));
    }

    public function update(Request $request,$id){
        $banner = $this->bannerRepository->findById($id);
        $this->bannerRepository->update($request,$banner);
        return  redirect()->route('banner.list')->with('update','Update successful !!!');
    }

    public function delete($id){
        $banner = $this->bannerModel->findOrFail($id);
        Storage::disk('s3')->delete($banner->image);
        $this->bannerRepository->delete($id);
        return redirect()->route('banner.list')->with('delete','delete successful !!!');
    }
}
