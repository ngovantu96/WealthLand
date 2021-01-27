@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
<div class="contaner ml-2">
    <h1>Role List</h1>
</div>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    CREATE +
  </button>


<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Role</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($roles as $key=>$role)
        <tr>
          <th scope="row">{{ ++$key }}</th>
          <td>{{ $role->name }}</td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$role->id}}">
                <i class="far fa-edit"></i>
            </button>
            ||
            <a href="{{ route('role.delete',$role->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        <div class="modal fade" id="editModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('role.update',$role->id) }}" >
                            @csrf
                            <div class="form-group">
                                <label for="name">Chức Vụ</label>
                                <input type="text" class="form-control" name="name" value="{{ $role->name }}" >
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

      @endforeach
      </tbody>
  </table>


<!-- modal create -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Role</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form action="{{ route('role.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!--update -->
@endsection

