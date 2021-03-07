@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner mt-2 ml-3">
    <h1>THÊM MỚI </h1>
</div>
<div class="row ml-3">
    <div class="col-lg-6">
    <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">Thêm mới dự án</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('category.store') }} " method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">TÊN DỰ ÁN</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên dự án">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
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

