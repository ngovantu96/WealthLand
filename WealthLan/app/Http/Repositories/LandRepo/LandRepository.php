<?php
namespace App\Http\Repositories\LandRepo;

use App\Http\Repositories\BaseRepository;
use App\Models\Land;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LandRepository extends BaseRepository implements LandRepositoryInterface
{
    public function __construct(Land $model)
    {
        parent::__construct($model);
    }

    public function getCategory()
    {
        $category = Category::all();
        return $category;
    }

    public function getUser()
    {
        $user = User::all();
        return $user;
    }

    public function create($request){
        $this->model->name = $request->name;
        $this->model->category_id = $request->category;
        $this->model->title = $request->title;
        $this->model->introductionContent = $request->content;


        $image = Storage::disk('s3')->put('images',$request->image,'public');
        $this->model->image = $image;

        $this->model->area = $request->area;
        $this->model->floor = $request->floor;
        $this->model->bedroom = $request->badroom;
        $this->model->builtyear = $request->builtyear;
        $this->model->price = $request->price;
        $this->model->address = $request->address;

        $this->model->save();
    }

    public function update($request,$obj){
        $obj->name = $request->name;
        $obj->category_id = $request->category;
        $obj->title = $request->title;
        $obj->introductionContent = $request->content;

        if($request->image){
            Storage::disk('s3')->delete($obj->image);
            $image = Storage::disk('s3')->put('images',$request->image,'public');
            $obj->image = $image;
        }

        $obj->area = $request->area;
        $obj->floor = $request->floor;
        $obj->bedroom = $request->badroom;
        $obj->builtyear = $request->builtyear;
        $obj->price = $request->price;
        $obj->address = $request->address;

        $obj->save();
    }
    public function getHot()
    {
        $lands = DB::table('lands')->where('hot','=','1')->get();
        return $lands;
    }

}
