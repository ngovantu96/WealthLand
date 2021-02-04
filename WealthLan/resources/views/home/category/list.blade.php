@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-2">
    <h1>Danh Sách Banner</h1>
</div>


<a type class="btn btn-primary" href="{{ route('category.create')}}" >
    CREATE +
</a>


<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $key=>$category)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$category->name}}</td>
          <td>
              <a href="{{ route('category.edit',$category->id)}}" ><i class="far fa-edit btn btn-warning"></i></a> ||
              <a href="{{ route('category.delete',$category->id)}}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
          </td>

        </tr>
        @endforeach
      </tbody>
  </table>

@endsection

