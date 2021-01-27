<?php
namespace App\Http\Repositories\IntroduceRepo;

use App\Http\Repositories\BaseRepository;
use App\Models\Introduction;

class IntroduceRepository extends BaseRepository implements IntroduceRepositoryInterface
{
    public function __construct(Introduction $model)
    {
        parent::__construct($model);
    }

    public function create($request){
        $this->model->title = $request->title;
        $this->model->description = $request->description;
        $this->model->content = $request->content;
        $this->model->sologan = $request->sologan;

        $this->model->save();

    }

    public function update($request, $obj){
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->content = $request->content;
        $obj->sologan = $request->sologan;

        $obj->save();
    }
}
