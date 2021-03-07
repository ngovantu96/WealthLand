@extends('page.master')
@section('page-title','trang chu')
@section('content')

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
            <div class="title-detail"><h3>{{ $part->name }}</h3></div>
        </div>
    </section>
    <!-- end -->

    <section class="container intro-details">
        <div class="panter-container">
            <h2 class="panter-title">{{ $part->title}}</h2>
            <div class="partner-content">
                <p>{!! $part->description !!}</p>
            </div>
        </div>


    </section>


@endsection
