@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>Post List</h1>
    </div>


    <a href="{{ route('post.create') }}" class="btn btn-primary" >
        CREATE +
    </a>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">User Name</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Category Post</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key=>$post)
            <tr>
                <td scope="col">{{ ++$key }}</td>
                <td scope="col">{{ $post->user->name }}</td>
                <td scope="col">{{ $post->title }}  </td>
                <td scope="col"><img src="{{ $post->getImage() }}" alt="" width="250px" height="200px"></td>
                <td scope="col">{{ $post->newpost->name }}  </td>
                <td scope="col">{{ $post->status }}</td>
                <td>
                    <a href="" ><i class="fas fa-book btn btn-success"></i></a>||
                    <a href="{{ route('post.edit',$post->id) }}" ><i class="far fa-edit btn btn-warning"></i></a> ||
                    <a href="{{ route('post.delete',$post->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <!-- modal create -->

@endsection

