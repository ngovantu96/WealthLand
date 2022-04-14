<?php
namespace App\Http\Repositories;

use App\Http\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function findById($id){
        return $this->model->where('id',$id)->first();
    }

    public function delete($id){
        return $this->model->where('id',$id)->delete();
    }

    
}
