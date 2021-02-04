@extends('page.master')
@section('page-title','hinh-anh')
@section('content')
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
        </div>
    </section>

    <section class="container gallery-room mt-5">
        <div class="row">
            @foreach($images as $image)
            <div class="col-lg-4 mt-5">
                <img src="{{ $image->getImage() }}" alt="" width="300px" height="300px">
            </div>
            @endforeach
        </div>
    </section>
@endsection
