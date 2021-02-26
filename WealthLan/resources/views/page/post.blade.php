@extends('page.master')
@section('page-title','trang chu')
@section('content')

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
            <div class="title-detail"><h3>Tin Tức WeathLan</h3></div>
        </div>
    </section>
    <!-- end -->

    <section class="container app-post">
        <div class="row">
            @foreach($posts as $post)
            <div class="post-list col-md-9">
                <div class="row">
                   <div class="col-lg-3">
                       <a href=""><img src="{{ $post->getImage() }}" alt=""></a>
                   </div>
                    <div class="col-lg-9 post-content">
                        <a href="{{ route('post.detail',$post->id) }}"> <p class="post-title">{{ $post->title }}</p></a>
                        <p>{{ $post->created_at }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


@endsection
