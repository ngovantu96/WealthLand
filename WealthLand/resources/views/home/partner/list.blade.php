@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>Danh Sách Đối Tác</h1>
    </div>

    <a href="{{route('partner.create')}}" class="btn btn-primary" >
        Thêm Mới +
    </a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Hành Động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($partners as $key=>$partner)
            <tr>
                <td>{{ ++$key }}</td>
                <td scope="row">{{ $partner->name }}</td>
                <td scope="row">{{ $partner->title }}</td>
                <td scope="row">{!! $partner->description !!}</td>
                <td>
                    <a href="{{ route('partner.edit',$partner->id) }}" ><i class="far fa-edit btn btn-warning"></i></a> ||
                    <a href="{{ route('partner.delete',$partner->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

