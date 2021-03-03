<?php

namespace App\Http\Controllers;

use App\Http\Repositories\LandRepo\LandRepositoryInterface;
use App\Http\Requests\LandRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Land;
use Illuminate\Support\Facades\Storage;

class LandController extends Controller
{
    protected $landRepository;
    protected $landModel;

    public function __construct(LandRepositoryInterface $landRepository,Land $landModel){
        $this->landRepository = $landRepository;
        $this->landModel = $landModel;
    }
    public function index(){
        $lands = $this->landRepository->getAll();
        $category = $this->landRepository->getCategory();
        $user = $this->landRepository->getUser();
        return view('home.land.list',compact('lands','user','category'));
    }
    public function formCreate(){
        $categories = Category::all();
        $users = User::all();
        return view('home.land.create',compact('categories','users'));
    }

    public function store(LandRequest $request){
        $this->landRepository->create($request);
        return  redirect()->route('land.list')->with('add','Add successful !!!');
    }

    public function edit($id){
        $land = $this->landRepository->findById($id);
        $categories = Category::all();
        $users = User::all();
        return view('home.land.edit',compact('land','categories','users'));
    }

    public function update(LandRequest $request,$id){
        $land = $this->landRepository->findById($id);
        $this->landRepository->update($request, $land);
        return  redirect()->route('land.list')->with('update','Update successful !!!');
    }

    public function delete($id){
        $land = $this->landModel->findOrFail($id);
        Storage::disk('s3')->delete($land->image);
        $this->landRepository->delete($id);
        return redirect()->route('land.list')->with('delete','delete successful !!!');
    }


}
