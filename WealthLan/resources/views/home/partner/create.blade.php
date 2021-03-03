@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Thêm Nới Đối Tác </h1>
    </div>

    <div class="container">
        <div class="row">
                <form action="{{ route('partner.store') }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Tên</label>
                        <input type="text" class="form-control" name='name' id="name" placeholder="Enter title">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" class="form-control" name='title' id="title" placeholder="Enter title">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                   </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Mô Tả</label>
                            <textarea class="ckeditor" id="ckeditor" name="description"></textarea>
                            @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
        </div>
    </div>


@endsection

