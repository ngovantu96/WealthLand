@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Create Category</h1>
    </div>

    <div class="container">
                <form action="{{ route('land.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">UserName</label>
                        <select class="form-control" name="user" id="">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image" >
                    </div>
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="number" class="form-control" name="area" id="area" placeholder="Enter Area">
                        </div>
                    </div>
                    <div class="col-lg-6">

                    <div class="form-group">
                        <label for="floor">Floor</label>
                        <input type="number" class="form-control" name="floor" id="floor" placeholder="Enter floor">
                    </div>

                    <div class="form-group">
                        <label for="name">Bedroom</label>
                        <input type="number" class="form-control" name="bedroom" id="bedrrom" placeholder="Enter Bedroom">
                    </div>

                    <div class="form-group">
                        <label for="name">Bathroom</label>
                        <input type="text" class="form-control" name="bathroom" id="bathroom" placeholder="Enter Bathroom">
                    </div>

                    <div class="form-group">
                        <label for="builtyear">Built-Year</label>
                        <input type="text" class="form-control" name="builtyear" id="builtyear" placeholder="Enter Builtyear">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="content">IntroductionContent</label>
                        <textarea class="ckeditor" id="ckeditor" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
    </div>


@endsection

