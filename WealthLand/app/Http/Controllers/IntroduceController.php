<?php

namespace App\Http\Controllers;

use App\Http\Repositories\IntroduceRepo\IntroduceRepositoryInterface;
use App\Http\Requests\IntroduceRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Introduction;


use App\Models\Partner;

class IntroduceController extends Controller
{
    private $introduceRepository;
    public function __construct(IntroduceRepositoryInterface $introduceRepository){
        $this->introduceRepository = $introduceRepository;
    }
    public function index(){
        $introduces = $this->introduceRepository->getAll();
        $listLands = Category::all();
        $partners = Partner::all();
        return view('home.introduce.list',compact('introduces','listLands','partners'));
    }
    public function Introduce(){
        $introduces = Introduction::all();
        $listLands = Category::all();
        $partners = Partner::all();
        return view('page.introduce',compact('introduces','listLands','partners'));
    }
    
    public function formCreate(){
        return view('home.introduce.create');
    }

    public function store(IntroduceRequest  $request){
        $this->introduceRepository->create($request);
        return  redirect()->route('introduce.list')->with('add','Add successful !!!');
    }

    public function edit($id){
        $introduce = $this->introduceRepository->findById($id);
        return view('home.introduce.edit',compact('introduce'));
    }

    public function update(IntroduceRequest $request,$id){
        $introduce = $this->introduceRepository->findById($id);
        $this->introduceRepository->update($request, $introduce);
        return  redirect()->route('introduce.list')->with('update','Update successful !!!');
    }

    public function delete($id){
        $this->introduceRepository->delete($id);
        return redirect()->route('introduce.list')->with('delete','delete successful !!!');
    }
}
