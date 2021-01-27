@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Update Introduction</h1>
    </div>

    <div class="container">
        <form action="{{ route('introduce.update',$introduce->id) }}" method="post" >
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{ $introduce->title }}" name="title" id="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea  id="" cols="70" rows="5" name="content">{{ $introduce->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="sologan">Sologan</label>
                        <textarea  id="" cols="70" rows="5" name="sologan">{{ $introduce->sologan }}</textarea>

                    </div>
            </div>
            <div class="col-lg-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="ckeditor" id="ckeditor" name="description">{!! $introduce->description !!}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </div>
        </form>

    </div>


@endsection

