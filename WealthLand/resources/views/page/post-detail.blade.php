@extends('page.master')
@section('page-title','trang chu')
@section('content')

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
            <div class="title-detail"><h3>{{ $post->title }}</h3></div>
        </div>
    </section>
    <!-- end -->

    <section class="container intro-details">
        <div class="row">
            <div class="col-lg-3">
                <div class="image-details">
                    <img src="{{$post->getImage()}}" alt="">
                </div>
            </div>
            <div class="col-lg-9 blog-content">
               <h3>{{ $post->title }}</h3>
                <p>{!! $post->content !!}</p>
            </div>
        </div>

    </section>


@endsection
