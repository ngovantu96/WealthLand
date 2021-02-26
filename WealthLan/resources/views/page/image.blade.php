@extends('page.master')
@section('page-title','hinh-anh')
@section('content')
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
            <div class="title-detail"><h3>Hình Ảnh</h3></div>
        </div>
    </section>

    <section class="container intro-detail">
        <div class="row">
            @foreach($images as $image)
            <div class="col-lg-4 mt-5">
                <img src="{{ $image->getImage() }}" alt="" width="100%" height="300px">
                <p class="text-center ">{{ $image->created_at }}</p>
            </div>
            @endforeach
        </div>
    </section>
@endsection
