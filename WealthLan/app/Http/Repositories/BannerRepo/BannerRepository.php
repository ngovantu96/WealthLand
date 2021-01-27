<?php
namespace App\Http\Repositories\BannerRepo;

use App\Http\Repositories\BaseRepository;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class BannerRepository extends BaseRepository implements BannerRepositoryInterface
{
    public function __construct(Banner $model)
    {
        parent::__construct($model);
    }

    public function create($request){
        $this->model->title = $request->title;
        $image = Storage::disk('s3')->put('banner',$request->image,'public');
        $this->model->image = $image;
        $this->model->save();
    }

    public function update($request,$obj){
        $obj->title = $request->title;
        if($request->image){
            Storage::disk('s3')->delete($obj->image);
            $image = Storage::disk('s3')->put('banner',$request->image,'public');
            $obj->image = $image;
        }

        $obj->save();
    }
}
