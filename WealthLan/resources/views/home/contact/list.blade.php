@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>User List</h1>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Comments</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $key=>$contact)
            <tr>
                <td>{{ ++$key }}</td>
                <td scope="row">{{ $contact->name }}</td>
                <td scope="row">{{ $contact->email }}</td>
                <td scope="row">{{ $contact->phone }}</td>
                <td scope="row">{{ $contact->comments }}</td>
                <td>
                    <a href="{{ route('user.delete',$contact->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection

