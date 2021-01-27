@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-2">
    <h1>Categoy Edit</h1>
</div>

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <form action="{{ route('category.update',$category->id) }} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $category->name}}" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
              </form>
          </div>
      </div>
    </div>


@endsection

