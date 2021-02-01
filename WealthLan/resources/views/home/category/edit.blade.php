@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
<div class="contaner ml-3 mt-3">
    <h1>Chỉnh Sửa</h1>
</div>
<div class="row ml-3">
    <div class="col-lg-6">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">Chỉnh sửa dự án</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('category.update',$category->id) }} " method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">TÊN DỰ ÁN</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name}}" placeholder="Nhập tên dự án">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection

