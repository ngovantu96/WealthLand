@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-2">
    <h1>Create Category</h1>
</div>

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <form action="{{ route('category.store') }} " method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
          </div>
      </div>
    </div>


@endsection

