@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Thêm Mới Dự Án</h1>
    </div>

    <div class="container">
                <form action="{{ route('land.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Tên Dự Án</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category">Loại Dự Án</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" class="form-control" name="image" id="image" >
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="area">Diện Tích</label>
                            <input type="number" class="form-control" name="area" id="area" placeholder="Enter Area">
                        </div>
                    </div>
                    <div class="col-lg-6">

                    <div class="form-group">
                        <label for="floor">Sàn Nhà</label>
                        <input type="number" class="form-control" name="floor" id="floor" placeholder="Enter floor">
                    </div>

                    <div class="form-group">
                        <label for="name">Phòng Ngủ</label>
                        <input type="number" class="form-control" name="bedroom" id="bedrrom" placeholder="Enter Bedroom">
                    </div>

                    <div class="form-group">
                        <label for="name">Phòng Tắm</label>
                        <input type="number" class="form-control" name="bathroom" id="bathroom" placeholder="Enter Bathroom">
                    </div>

                    <div class="form-group">
                        <label for="builtyear">Năm Xây Dựng</label>
                        <input type="number" class="form-control" name="builtyear" id="builtyear" placeholder="Enter Builtyear">
                    </div>

                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price">
                    </div>

                    <div class="form-group">
                        <label for="address">Địa Chỉ</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Giới Thiệu</label>
                        <textarea class="ckeditor" id="ckeditor" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
    </div>


@endsection

