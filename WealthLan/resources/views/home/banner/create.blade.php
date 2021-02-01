@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-2">
    <h1>Danh Sách Banner</h1>
</div>
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <form action="{{ route('banner.store') }} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Tiêu Đề</label>
                  <input type="text" class="form-control" name='title' id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="image">Hình Ảnh</label>
                  <input type="file" class="form-control" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
              </form>
          </div>
      </div>
    </div>


@endsection

