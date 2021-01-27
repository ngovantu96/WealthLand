@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>Land List</h1>
    </div>


    <a href="{{ route('land.create') }}" class="btn btn-primary" >
        CREATE +
    </a>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">title</th>
            <th scope="col">UserName</th>
            <th scope="col">status</th>
            <th scope="col">Hot</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lands as $key=>$land)

{{--            {{ dd(asset('storage/'.substr($land->image,7)))  }}--}}
        <tr>
            <th scope="col">{{ ++$key }}</th>
            <th scope="col">{{ $land->name }}</th>
            <th scope="col"><img src="{{ $land->getImage() }}" alt="" width="200px" height="200px"></th>
            <th scope="col">{{ isset($land->category->name)? $land->category->name : '' }}</th>
            <th scope="col">{{ $land->title }}</th>
            <th scope="col">{{ isset($land->user->name)?$land->user->name: '' }}</th>
            <th scope="col">{{ $land->status }}</th>
            <th scope="col">{{ $land->hot }}</th>
            <td>
                <a href="" ><i class="fas fa-book-open btn btn-success"></i></a> ||
                <a href="{{ route('land.edit',$land->id) }}" ><i class="far fa-edit btn btn-warning"></i></a> ||
                <a href="{{ route('land.delete',$land->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <!-- modal create -->

@endsection

