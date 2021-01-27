@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Create User</h1>
    </div>

    <div class="container">
        <form action="{{ route('user.update',$user->id) }}" method="post" >
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="role">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"{{ ($role->name==$user->role->name)?'selected' :''}}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>

    </div>


@endsection

