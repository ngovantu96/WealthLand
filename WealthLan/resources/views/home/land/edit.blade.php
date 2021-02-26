@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Chỉnh Sửa Thể Loại</h1>
    </div>
    <div class="container">
        <form action="{{ route('land.update',$land->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Tên Dự Án</label>
                        <input type="text" class="form-control" name="name" value="{{ $land->name }}" id="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="category">Loại Dự Án</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" class="form-control" name="title" value="{{ $land->title }}" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" class="form-control" name="image" id="image" >
                    </div>
                    <div class="form-group">
                        <label for="area">Diện Tích</label>
                        <input type="number" class="form-control" name="area" value="{{ $land->area }}" id="area" placeholder="Enter Area">
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="floor">Sàn Nhà</label>
                        <input type="number" class="form-control" name="floor" value="{{ $land->floor }}" id="floor" placeholder="Enter floor">
                    </div>

                    <div class="form-group">
                        <label for="name">Phòng Ngủ</label>
                        <input type="number" class="form-control" name="bedroom" value="{{ $land->bedroom }}" id="bedrrom" placeholder="Enter Bedroom">
                    </div>

                    <div class="form-group">
                        <label for="name">Phòng Tắm</label>
                        <input type="number" class="form-control" name="bathroom" value="{{ $land->bathroom }}" id="bathroom" placeholder="Enter Bathroom">
                    </div>

                    <div class="form-group">
                        <label for="builtyear">Năm Xây Dựng</label>
                        <input type="number" class="form-control" name="builtyear" id="builtyear" value="{{ $land->builtYear }}" placeholder="Enter Builtyear">
                    </div>

                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="number" class="form-control" name="price" id="price" value="{{ $land->price }}" placeholder="Enter Price">
                    </div>

                    <div class="form-group">
                        <label for="address">Địa Chỉ</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ $land->address }}" placeholder="Enter Address">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Giới Thiệu Nội Dung</label>
                <textarea class="ckeditor" id="ckeditor" name="content">{{ $land->introductionContent }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


@endsection

