<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Repositories\PostRepo\PostRepositoryInterface;
use App\Models\NewPost;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $postRepo;
    private $postModel;
    public function __construct(PostRepositoryInterface $postRepo, Post $postModel){
        $this->postRepo = $postRepo;
        $this->postModel = $postModel;
    }
    public function index(){
        $posts = $this->postRepo->getAll();
        return view('home.post.list',compact('posts'));
    }
    public function create(){
        $categoryPosts = NewPost::all();
        return view('home.post.create',compact('categoryPosts'));
    }
    public function store(PostRequest $request){
        $this->postRepo->create($request);
        return  redirect()->route('post.index')->with('add','Add successful !!!');;
    }
    public function edit($id){
        $post = $this->postRepo->findById($id);
        $categoryPosts = NewPost::all();
        return view('home.post.edit',compact('post','categoryPosts'));
    }
    public function update(PostRequest $request, $id){
        $post = $this->postRepo->findById($id);
        $this->postRepo->update($request,$id);
        return redirect()->route('post.index')->with('update','Update successful !!!');
    }

    public function delete($id){
        $post = $this->postModel->findOrFail($id);
        Storage::disk('s3')->delete($post->image);
        $this->postRepo->delete($id);
        return redirect()->route('land.list')->with('delete','delete successful !!!');
    }
}
