@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
<div class="contaner ml-2">
    <h1>Permission List</h1>
</div>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    CREATE +
  </button>


<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Create</td>
          <td>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="far fa-edit"></i>
            </button>
            ||

            <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>


          </td>
        </tr>
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
            <form>
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
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

@endsection

