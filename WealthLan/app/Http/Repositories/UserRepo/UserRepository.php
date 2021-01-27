<?php
namespace  App\Http\Repositories\UserRepo;

use App\Http\Repositories\BaseRepository;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(USer $model)
    {
        parent::__construct($model);
    }


    public function create($request){
        $this->model->name = $request->name;
        $this->model->email = $request->email;
        $this->model->password = Hash::make($request->password);
        $this->model->role_id = $request->role;
        $this->model->save();

    }
    public function update($request,$obj){
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->role_id = $request->role;
        $obj->save();
    }
    public function editPass($request,$obj)
    {
        $obj->password = Hash::make($request->password);
        $obj->save();
    }
}
