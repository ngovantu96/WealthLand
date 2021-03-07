@extends('page.master')
@section('page-title','trang chu')
@section('content')

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
           <div class="title-detail"><h3>Chi Tiết Dự Án</h3></div>
        </div>
    </section>
    <!-- end -->

    <section class="container intro-details">
      <div class="row">
          @foreach($category_lands->lands as $item)
          <div class="col-lg-4">
              <div class="image-details">
                  <img src="{{ $item->getImage() }}" alt="">
              </div>
          </div>
          <div class="col-lg-8">
              <p>{!! $item->introductionContent !!}</p>
          </div>
          @endforeach
      </div>
    </section>


@endsection
