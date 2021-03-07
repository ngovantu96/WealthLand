@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>Danh Sách Bài Viết</h1>
    </div>


    <a href="{{ route('post.create') }}" class="btn btn-primary" >
        Thêm Mới +
    </a>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tiều Đề</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Loại Bài Viết</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Hành Động</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key=>$post)
            <tr>
                <td scope="col">{{ ++$key }}</td>
                <td scope="col">{{ $post->title }}  </td>
                <td scope="col"><img src="{{ ($post->getImage()) }}" alt="" width="250px" height="200px"></td>
                <td scope="col">{{ $post->newpost->title }}  </td>
                <td scope="col">{{ $post->status }}</td>
                <td>
                    <a href="{{ route('post.edit',$post->id) }}" ><i class="far fa-edit btn btn-warning"></i></a> ||
                    <a href="{{ route('post.delete',$post->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <!-- modal create -->

@endsection

