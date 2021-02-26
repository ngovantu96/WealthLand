<?php
namespace App\Http\Repositories\ImageRepo;

use App\Http\Repositories\BaseRepository;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;


class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{
     public function __construct(Image $model)
     {
         parent::__construct($model);
     }
    public function create($request){
        $image = Storage::disk('s3')->put('images',$request->image,'public');
        $this->model->image    = $image;
        $this->model->save();
    }

    public function update($request,$obj){
        if($request->image){
            Storage::disk('s3')->delete($obj->image);
            $image = Storage::disk('s3')->put('images',$request->image,'public');
            $obj->image = $image;
        }
        $obj->save();
    }
}
