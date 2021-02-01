@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
<div class="contaner ml-2">
    <h1>Danh Sách</h1>
</div>


<a href="{{route('user.create')}}" class="btn btn-primary" >
    CREATE +
  </a>


<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên</th>
          <th scope="col">Email</th>
          <th scope="col">Chức vụ</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($users as $key=>$user)
        <tr>
            <td>{{ ++$key }}</td>
          <td scope="row">{{ $user->name }}</td>
          <td scope="row">{{ $user->email }}</td>
          <td scope="row">{{ $user->role->name }}</td>
          <td>
              <a href="{{ route('user.edit',$user->id) }}" ><i class="far fa-edit btn btn-warning"></i></a> ||
              <a href="{{ route('user.delete',$user->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
          </td>
        </tr>
      @endforeach
      </tbody>
  </table>



@endsection

