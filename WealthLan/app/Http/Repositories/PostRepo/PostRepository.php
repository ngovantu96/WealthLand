<?php
namespace App\Http\Repositories\PostRepo;


use App\Http\Repositories\BaseRepository;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function create($request){
        $this->model->title = $request->title;
        $this->model->new_post_id = $request->category_post;
        $this->model->content = $request->content;

        $image = Storage::disk('s3')->put('post',$request->image,'public');
        $this->model->image = $image;

        $this->model->user_id = $request->user;
        $this->model->save();

    }
    public function update($request,$obj){
        $obj->title = $request->title;
        $obj->new_post_id = $request->category_post;
        $obj->content = $request->content;
        $obj->user_id = $request->user;

        if($request->image){
            Storage::disk('s3')->delete($obj->image);
            $image = Storage::disk('s3')->put('post',$request->image,'public');
            $obj->image = $image;
        }

        $obj->save();
    }
}
