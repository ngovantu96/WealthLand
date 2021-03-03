@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Chỉnh Sủa </h1>
    </div>

    <div class="container">
        <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="title" placeholder="Enter title">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{ $post->image }}" >
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category-post">Loại Bài Viết</label>
                        <select class="form-control" name="category_post">

                            @foreach($categoryPosts as $categoryPost)
                                <option value="{{ $categoryPost->id }}"{{ $categoryPost->title == $post->newpost->title ? 'selected':'' }}>{{ $categoryPost->title }}</option>
                            @endforeach
                        </select>
                    </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="content">Nội Dung</label>
                        <textarea class="ckeditor" id="ckeditor" name="content">{!! $post->content !!}</textarea>
                        @error('content')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
    </div>


@endsection

