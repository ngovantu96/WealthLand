@extends('page.master')
@section('page-title','trang chu')
@section('content')
    <!-- carousel start -->

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
        </div>
    </section>
    <!-- end -->
    <div class="container intro-detail">
        <div class="row">
            <div class="col-lg-6">
                <div class="intro-img">
                    <img src="{{ asset('font_end/img/card-visit.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 text-decription text-center">
                <div class="title-section mt-2"><h2>WEALTH LAND</h2></div>
                <div class="text-custom mt-4">
                    <div class="text-4 officer-title text-medium">
                        WEALTH LAND Văn phòng Công ty cổ phần đầu tư bất động sản WEALTH LAND</div>
                    <div class="office-detail">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Tầng 4, Toà nhà VietinBank, 02 Lê Quý Đôn, TP Huế</span>
                        </div>
                    </div>
                    <div class="office-detail">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                            <span>0932.456.111</span>
                        </div>
                    </div>
                    <div class="office-detail">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                            <span>wealthlandvn@gmail.com</span>
                        </div>
                    </div>
                    <div class="office-detail">
                        <div class="icon">
                            <i class="fa fa-search"></i>
                            <span>Tầng 4, Toà nhà VietinBank, 02 Lê Quý Đôn, TP Huế</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact form -->
            <div class="intro-row reverse">
                <div class="media-container">
                    <div class="row form-contact">
                        <div class="col-lg-6">
                            <form action="{{ route('contact.create') }}" method="post" id="contact-form" class="contact-form">
                                @csrf
                                <input type="text" class="field" placeholder="Vui lòng nhập họ tên"/>
                                <input type="text" class="field" placeholder="Số điện thoại"/>
                                <input type="text" class="field" placeholder="Email"/>
                                <textarea class="field area" placeholder="Viết bình luận" rows="4"></textarea>
                                <button class="btn btn-accent">Đăng ký Tư Vấn</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
@endsection
