@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
<div class="contaner ml-2">
    <h1>Danh Sách Chức Vụ</h1>
</div>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Thêm Mới +
  </button>


<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Chức Vụ</th>
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
                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh Sửa</h5>
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
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
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
          <h5 class="modal-title" id="staticBackdropLabel">Thêm Mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form action="{{ route('role.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName">Tên</label>
                  <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter Name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>

<!--update -->
@endsection

