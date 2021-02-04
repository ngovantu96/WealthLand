@extends('page.master')
@section('page-title','trang chu')
@section('content')

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
            <div class="title-detail"><h2>{{ $land->name }}</h2></div>
        </div>
    </section>
    <!-- end -->
    <section class="container land-intro-detals">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-detals">
                    <img src="{{$land->getImage()}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <p>{!! $land->introductionContent !!}</p>
            </div>
        </div>

    </section>


@endsection
