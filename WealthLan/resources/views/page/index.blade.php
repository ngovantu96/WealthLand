@extends('page.master')
@section('page-title','trang chu')
@section('content')
<!-- carousel start -->
<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('font_end/img/banner-1.jpg') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                   <h2 class="animate__animated animate__slideInLeft animate__delay-0.1s">Bất Động Sản WEALTHLAN</h2>
                   <h3 class="animate__animated animate__slideInLeft animate__delay-0.1s">Huế, Việt Nam</h3>
                   <a class="btn btn-outline-primary animate__animated animate__slideInLeft animate__delay-0.1s">Xem Chi Tiết</a>
               </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('font_end/img/banner-3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__slideInLeft animate__delay-0.1s">Bất Động Sản WEALTHLAN</h2>
                    <h3 class="animate__animated animate__slideInLeft animate__delay-0.1s">Huế, Việt Nam</h3>
                    <a class="btn btn-outline-primary animate__animated animate__slideInLeft animate__delay-0.1s">Xem Chi Tiết</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('font_end/img/banner-5.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__slideInLeft animate__delay-0.1s">Bất Động Sản WEALTHLAN</h2>
                    <h3 class="animate__animated animate__slideInLeft animate__delay-0.1s">Huế, Việt Nam</h3>
                    <a class="btn btn-outline-primary animate__animated animate__slideInLeft animate__delay-0.1s">Xem Chi Tiết</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('font_end/img/banner-6.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h2 class="animate__animated animate__slideInLeft animate__delay-0.1s">Bất Động Sản WEALTHLAN</h2>
                    <h3 class="animate__animated animate__slideInLeft animate__delay-0.1s">Huế, Việt Nam</h3>
                    <a class="btn btn-outline-primary animate__animated animate__slideInLeft animate__delay-0.1s">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
</section>

<section class="container search-area">
    <form action="{{ route('search') }}" class="search-form" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <label>Giá Nhà</label>
                    <select name="" class="control" placeholder="khoảng giá">
                        <option value="1">Dưới 1.5 tỷ</option>
                        <option value="2">Từ 1.5-2.5 tỷ</option>
                        <option value="3">Từ 2.5tỷ-4 tỷ</option>
                        <option value="4">Từ 4 - 7 tỷ</option>
                        <option value="5">Trên 7 tỷ</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <label>Diện Tích</label>
                    <select name="" class="control" placeholder="Diện Tích">
                        <option value="1">Dưới 85 m2</option>
                        <option value="2">Từ 85 m2 - 135 m2</option>
                        <option value="3">Từ 135 m2 - 200m2</option>
                        <option value="4">Từ 200 m2 - 320m2</option>
                        <option value="5">Trên 320m2</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <label>Phòng Ngủ</label>
                    <select name="" class="control" placeholder="Phòng Ngủ">
                        <option value="1">Từ 1 - 2 Phòng</option>
                        <option value="2">Từ 2 - 4 Phòng</option>
                        <option value="3">Trên 4 Phòng</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <label>Phòng Tắm</label>
                    <select name="" class="control" placeholder="số phòng tắm">
                        <option value="1">Từ 1 -2 Phòng</option>
                        <option value="2">Từ 2 - 4 Phòng</option>
                        <option value="3">Trên 4</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <input class="input-search" type="text" placeholder="Tìm Kiếm" name="search">
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <input class="btn" type="submit" value="Tìm Kiếm">

                </div>
            </div>
        </div>
    </form>
</section>

<!-- du an dang trien khai -->
<section class="container gallery-room">
    <div class="title-section"><h2 class="text-center">DANH SÁCH DỰ ÁN</h2></div>
</section>
<!-- end du an dang trien khai -->
<!-- list du an dang trienr khai -->
<section class="container project">
    <div class="container">
        <div class="row">
            @foreach($lands as $land)
                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <a href=""><img src="{{ $land->getImage() }}" class="card-img-top" alt="..."></a>
                            <div class="card-view"><a href=""></a></div>
                            <div class="card-body">
                                <a href=""><h6 class="card-title">{{ $land->title }}</h6></a>
                            </div>
                        </div>
                    </div>

            @endforeach

        </div>
    </div>
</section>
<!-- endlist du an  -->

<!-- giới thiệu -->
<div class="container mt-5">
    <div class="container-intro">
        <div class="row">
            <div class="col-lg-6 intro-img">
                <img src="{{ asset('font_end/img/tin-tuc.jpg') }}" width="100%" alt="...">
            </div>
            <div class="col-lg-6">
                <div class="container container-title">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center mt-3">KHÁT VỌNG VƯƠN XA</h2>
                        <p>Chúng tôi tin tưởng rằng việc thành lập WEALTH LAND sẽ là tiền đề nền móng vững chắc để hình thành khai thác và xây dựng những dự án Bất Động Sản với những thương hiệu mới, công trình mới và thành công mới. Xuất phát từ góc nhìn Thành phố Huế là thị trường khởi sắc tiềm năng nhiều triển vọng,
                            chúng tôi hy vọng sẽ song hành cùng với sự phát triển của Huế trong tương lai gần và sẽ tiến xa</p>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>TẦM NHÌN</h4>
                                <p>2025: Trở Thành Công Ty Đầu Tư Kinh Doanh, Dịch Vụ Bất Động Sản
                                    Uy Tín Và Chuyên Nghiệp Hàng Đầu Miền Trung</p>
                            </div>
                            <div class="col-lg-6">
                                <h4>SỨ MỆNH</h4>
                                <p>Nâng Cao Giá Trị Sống Của Người Việt Cũng Như Đem Lại Lợi Ích
                                    Cho Xã Hội Với Những Hành Động Thiết Thực Chung Tay Cho Cộng Đồng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>GIÁ TRỊ CỐT LÕI</h4>
                                <p>Khát Vọng - Chuyên Nghiệp - Chính Trực - Nhân Văn</p>
                            </div>
                            <div class="col-lg-6">
                                <h4>TRIẾT LÝ KINH DOANH</h4>
                                <p>“Chúng Tôi Xây Dựng Niềm Tin Bắt Đầu Từ Xây Dựng Ngôi Nhà Của Bạn”.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- end giới thiệu -->

<!-- tintuwc -->
<section class="container introduce">
    <div class="col-lg-12 mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">TIN TỨC</h2>
            </div>
            @foreach($posts as $post)
            <div class="col-lg-4 mt-3">
                <div class="card">
                    <a href="{{ route('post.detail',$post->id) }}"><img src="{{ $post->getImage() }}" class="card-img-top" alt="..." height="300px"></a>
                    <div class="card-body">
                        <a href="{{ route('post.detail',$post->id) }}"><h5 class="card-title">{{ $post->title }}</h5></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
<!-- end tin tuc -->

<!-- footer -->
@endsection
@section('js')

@endsection
