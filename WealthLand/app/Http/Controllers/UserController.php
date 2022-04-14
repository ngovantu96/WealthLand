<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepo\UserRepository;
use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $userRepository;
    public $user;
    public function __construct(UserRepositoryInterface $userRepository, UserRepository $user)
    {
        $this->userRepository = $userRepository;
        $this->user = $user;
    }
    public function userGetCustomer(Request $request){
        dump($request);
        $users = User::all();
        return view('home.user.user_list',compact('users'));
    }

    public function index(Request $request){
        $users = $this->userRepository->getUser();
        dump($request);
        // dump($users);
        return view('home.user.list');
    }
    public function getUser(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = User::select('count(*) as allcount')->count();
        $totalRecordswithFilter = User::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = User::orderBy($columnName,$columnSortOrder)
            ->where('users.name', 'like', '%' .$searchValue . '%')
            ->select('users.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();
            $data_arr = array();
            $sno = $start+1;
            foreach($records as $record){
                $id = $record->id;
                $name = $record->name;
                $email = $record->email;

                $data_arr[] = array(
                    "id" => $id,
                    "name" => $name,
                    "email" => $email
                );
            }
            $response = array(
                "draw" => intval($draw),
                "iTotalRecords" => $totalRecords,
                "iTotalDisplayRecords" => $totalRecordswithFilter,
                "aaData" => $data_arr
            );

            echo json_encode($response);
            exit;

    }

    public function createUser(Request $request){

        for($i = 2356; $i <= 4000; $i++){
            $user = new User();
            $user->name = 'tu'.rand(0,100);
            $user->email = 'tungo'.$i.'@gmail.com';
            $user->password = Hash::make('admin123');
            $user->save();
        }
    }


    public function formCreate(){
        return view('home.user.create');
    }
    public function store(UserRequest $request){
        $this->userRepository->create($request);
        return redirect()->route('user.list')->with('add','add successful!!!');
    }
    public function edit($id){
        $user = $this->userRepository->findById($id);
        return view('home.user.edit',compact('user'));
    }
    public function update(UserRequest $request,$obj){
        $this->userRepository->update($request,$obj);
        return redirect()->route('user.list')->with('update','update successful!!');
    }
    public function delete($id){
        $this->userRepository->delete($id);
        return redirect()->route('user.list')->with('delete','delete successful!!!!');
    }
    public function editPass(UserRequest $request,$obj){
        $this->userRepository->editPass($request,$obj);
        return redirect()->route('user.list')->with('update','update password successful!!!!');
    }
}
