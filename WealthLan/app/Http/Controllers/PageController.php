<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BannerRepo\BannerRepositoryInterface;
use App\Http\Repositories\IntroduceRepo\IntroduceRepositoryInterface;
use App\Http\Repositories\LandRepo\LandRepositoryInterface;
use App\Http\Repositories\PostRepo\PostRepositoryInterface;
use App\Models\Contact;
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
        $categoryLands = $this->landRepo->getCategory();
       return view('page.index',compact('lands','posts','categoryLands'));
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
    public function detail($id){
        $land = $this->landRepo->findById($id);
        return view('page.land-detail',compact('land'));
    }

}
