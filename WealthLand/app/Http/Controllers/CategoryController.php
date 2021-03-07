<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Repositories\CategoryRepo\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $categories = $this->categoryRepository->getAll();
        return view('home.category.list',compact('categories'));
    }

    public function formCreate(){
        return view('home.category.create');
    }

    public function store(CategoryRequest $request){
        $this->categoryRepository->create($request);
        return  redirect()->route('category.list')->with('add','Add successful !!!');
    }

    public function edit($id){
        $category = $this->categoryRepository->findById($id);
        return view('home.category.edit',compact('category',));
    }

    public function update(CategoryRequest $request,$id){
        $category = $this->categoryRepository->findById($id);
        $this->categoryRepository->update($request, $category);
        return  redirect()->route('category.list')->with('update','Update successful !!!');
    }

    public function delete($id){
        $this->categoryRepository->delete($id);
        return redirect()->route('category.list')->with('delete','delete successful !!!');
    }
}
