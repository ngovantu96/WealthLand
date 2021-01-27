@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-2">
    <h1>Banner List</h1>
</div>


<a type class="btn btn-primary" href="{{ route('banner.create')}}" >
    CREATE +
</a>


<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($banners as $key=>$banner)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{$banner->title}}</td>
          <td><img src="{{ $banner->getImage() }}" alt="" width="200px" height="200px"></td>
          <td>
              <a href="{{ route('banner.edit',$banner->id)}}" ><i class="far fa-edit btn btn-warning"></i></a> ||
              <a href="{{ route('banner.delete',$banner->id)}}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
          </td>
        </tr>
      @endforeach
      </tbody>
  </table>

@endsection

