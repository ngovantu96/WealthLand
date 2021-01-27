<?php

namespace App\Http\Controllers;

use App\Http\Repositories\IntroduceRepo\IntroduceRepositoryInterface;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    private $introduceRepository;
    public function __construct(IntroduceRepositoryInterface $introduceRepository){
        $this->introduceRepository = $introduceRepository;
    }
    public function index(){
        $introduces = $this->introduceRepository->getAll();
        return view('home.introduce.list',compact('introduces'));
    }
    public function formCreate(){
        return view('home.introduce.create');
    }

    public function store(Request $request){
        $this->introduceRepository->create($request);
        return  redirect()->route('introduce.list')->with('add','Add successful !!!');
    }
    public function edit($id){
        $introduce = $this->introduceRepository->findById($id);
        return view('home.introduce.edit',compact('introduce'));
    }

    public function update(Request $request,$id){
        $introduce = $this->introduceRepository->findById($id);
        $this->introduceRepository->update($request, $introduce);
        return  redirect()->route('introduce.list')->with('update','Update successful !!!');
    }

    public function delete($id){
        $this->introduceRepository->delete($id);
        return redirect()->route('introduce.list')->with('delete','delete successful !!!');
    }
}
