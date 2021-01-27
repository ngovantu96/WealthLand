<?php

namespace App\Http\Controllers;

use App\Models\NewPost;
use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function index(){
        $new_posts = NewPost::all();
        return view('home.categoryPost.list',compact('new_posts'));
    }
    public function store(Request $request){
        $new_post = new NewPost();
        $new_post->title = $request->title;
        $new_post->save();
        return redirect()->route('new-post.list')->with('add','add successful!!');
    }
//    public function edit($id)
//    {
//        $new_post = NewPost::findOrFail($id);
//        return view('home.new-post.list',compact('new_post'));
//    }
    public function update(Request $request,$id){
        $new_post = NewPost::findOrFail($id);
        $new_post->title = $request->title;
        $new_post->save();

        return redirect()->route('new-post.list')->with('update','update successful!!!');
    }
    public function delete($id)
    {
        NewPost::where('id',$id)->delete();
        return redirect()->route('new-post.list')->with('delete','delete successful!!!');;
    }
}
