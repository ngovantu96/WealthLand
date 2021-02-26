<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BannerRepo\BannerRepositoryInterface;
use App\Http\Repositories\IntroduceRepo\IntroduceRepositoryInterface;
use App\Http\Repositories\LandRepo\LandRepositoryInterface;
use App\Http\Repositories\PostRepo\PostRepositoryInterface;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Land;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $landRepo;
    private $postRepo;
    public function __construct(
        LandRepositoryInterface $landRepo,
        PostRepositoryInterface $postRepo

    ){
        $this->landRepo = $landRepo;
        $this->postRepo = $postRepo;
}

    public function index(){
//        $hots = $this->landRepo->getHot();
        $lands = $this->landRepo->getAll();
        $posts = $this->postRepo->getAll();
        $listLands = Category::all();
        $partners = Partner::all();
        $categoryLands = $this->landRepo->getCategory();
       return view('page.index',compact('lands','posts','categoryLands','listLands','partners'));
    }
    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comments = $request->comment;
        $contact->save();
        return redirect()->route('page.index')->with('add','Gửi thành công.');
    }
    public function post(){
        $posts = $this->postRepo->getAll();
        $listLands = Category::all();
        $partners = Partner::all();
        return view('page.post',compact('posts','listLands','partners'));
    }
    public function categoryland_detail($id){
    $category_lands = Category::findOrFail($id);
    $listLands = Category::all();
    $partners = Partner::all();
    // dd($category_lands->lands);
    return view('page.land-detail',compact('category_lands','listLands','partners'));
    }

    public function post_detail($id){
        $post = $this->postRepo->findById($id);
        $listLands = Category::all();
        $partners = Partner::all();
        return view('page.post-detail',compact('post','listLands','partners'));
    }

    public function partner($id){
        $part = Partner::findOrFail($id);
        $listLands = Category::all();
        $partners = Partner::all();
        return view('page.partner',compact('part','listLands','partners'));
    }

    public function search(Request $request){
        $listLands = Category::all();
        $partners = Partner::all();
        $search = $request->name;
        $result = Land::where('name','Like','%'.$search.'%')->get();
        // dd($result);
        return view('page.search',compact('result','listLands','partners'));
    }

    // public function listLand(){
    //     $listLands = $this->landRepo->getAll();
    //     dd($listLands);
    //     return view('page.layout.header',compact('listLands'));
    // }

}
