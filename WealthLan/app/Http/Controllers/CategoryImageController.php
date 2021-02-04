<?php

namespace App\Http\Controllers;

use App\Models\CategoryImage;
use Illuminate\Http\Request;

class CategoryImageController extends Controller
{
    public function index(){
        $categoryImages = CategoryImage::all();
        return view('home.category_image.list',compact('categoryImages'));
    }
    public function store(Request $request){
        $categoryImage = new CategoryImage();
        $categoryImage->name = $request->name;
        $categoryImage->save();
        return redirect()->route('categoryImage.list')->with('add','Thêm mới thành công !!!');
    }
    public function update(Request $request, $id){
        $categoryImage = CategoryImage::findOrFail($id);
        $categoryImage->name = $request->name;
        $categoryImage->save();
        return redirect()->route('categoryImage.list')->with('update','Cập nhật thành công. !!!');
    }
    public function delete($id){
        CategoryImage::where('id',$id)->delete();
        return redirect()->route('categoryImage.list')->with('delete', 'xóa thành công.');
    }
}
