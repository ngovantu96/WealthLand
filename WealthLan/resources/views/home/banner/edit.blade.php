@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-2">
    <h1>Banner Edit</h1>
</div>

    <div class="container">
        <form method="post" action="{{ route('banner.update',$banner->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name='title' id="title" value="{{$banner->title}}" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>


@endsection

