@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>Thể Loại Bài viết </h1>
    </div>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Thêm Mới +
    </button>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Hành Động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($new_posts as $key=>$new_post)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $new_post->title }}</td>
                <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$new_post->id}}">
                        <i class="far fa-edit"></i>
                    </button>
                    ||
                    <a href="{{ route('new-post.delete',$new_post->id) }}" class="btn btn-danger" ><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <div class="modal fade" id="editModal{{$new_post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('new-post.update',$new_post->id) }}" >
                                @csrf
                                <div class="form-group">
                                    <label for="title">New Post</label>
                                    <input type="text" class="form-control" name="title" value="{{ $new_post->title }}" >
                                </div>

                                <button type="submit" class="btn btn-primary">Cập nhật</button>

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>


                            </form>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
        </tbody>
    </table>


    <!-- modal create -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Thêm mới bài viết</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('new-post.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="nhập tiêu đề">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <!--update -->
@endsection

