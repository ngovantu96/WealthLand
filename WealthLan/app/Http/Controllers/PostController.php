<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PostRepo\PostRepositoryInterface;
use App\Models\NewPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $postRepository;
    private $postModel;
    public function __construct(PostRepositoryInterface $postRepository,Post $posModel)
    {
        $this->postRepository = $postRepository;
        $this->postModel = $posModel;
    }

    public function index(){
        $posts = $this->postRepository->getAll();
        return view('home.post.list',compact('posts'));
    }
    public function formCreate(){
        $users = User::all();
        $categoryPosts = NewPost::all();
        return view('home.post.create',compact('users','categoryPosts'));
    }
    public function store(Request $request){
        $this->postRepository->create($request);
        return redirect()->route('post.list')->with('add','add successful!!');
    }
    public function edit($id){
        $post = $this->postRepository->findById($id);
        $users = User::all();
        $categoryPosts = NewPost::all();

        return view('home.post.edit',compact('post','users','categoryPosts'));
    }
    public function update(Request $request,$id){
        $post = $this->postRepository->findById($id);
        $this->postRepository->update($request,$post);
        return redirect()->route('post.list')->with('add','add successful!!');
    }
    public function delete($id){
        $land = $this->postModel->findOrFail($id);
        Storage::disk('s3')->delete($land->image);
        $this->postRepository->delete($id);
        return redirect()->route('post.list')->with('delete','delete success');
    }
}
