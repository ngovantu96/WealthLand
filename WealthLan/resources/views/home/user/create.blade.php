@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Create User</h1>
    </div>

    <div class="container">
        <form action="{{ route('user.store') }}" method="post" >
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" >
                    </div>

            <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>


@endsection

