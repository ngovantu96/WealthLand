@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner mt-2 ml-3">
        <h1>THÊM MỚI Hình Ảnh </h1>
    </div>
    <div class="row ml-3">
        <div class="col-lg-6">
            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Thêm mới hình ảnh</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('image.store') }} " method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_image">Loại Hình Ảnh</label>
                            <select name="category_image" class="form-control" >
                                @foreach($categoryImages as $categoryImage)
                                    <option value="{{ $categoryImage->id }}">{{ $categoryImage->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Loại Hình Ảnh</label>
                            <input type="file" name="image" placeholder="Chọn hình">
                            @error('image')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection

