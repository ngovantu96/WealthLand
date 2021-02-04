@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Dánh Sách Hình Ảnh</h1>
    </div>


    <a type class="btn btn-primary" href="{{ route('image.create')}}" >
        Thêm mới +
    </a>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Loại Hình Ảnh</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($images as $key=>$image)
            <tr>
                <td>{{++$key}}</td>
                <td>{{isset($image->categoryImage->name)}}</td>
                <td><img src="{{$image->getImage()}}" alt="" width="200px" height="200px"></td>
                <td>
                    <a href="{{ route('image.edit',$image->id)}}" ><i class="far fa-edit btn btn-warning"></i></a> ||
                    <a href="{{ route('image.delete',$image->id)}}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

