@extends('page.master')
@section('page-title','trang chu')
@section('content')
<!-- carousel start -->
<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('font_end/img/banner-1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('font_end/img/banner-3.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('font_end/img/banner-5.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('font_end/img/banner-6.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <div class="contact-box">
            <form>
                <input type="text" class="field" placeholder="Vui lòng nhập họ tên"/>
                <input type="text" class="field" placeholder="Số điện thoại"/>
                <input type="text" class="field" placeholder="Email"/>
                <textarea class="field area" placeholder="Viết bình luận" rows="4"></textarea>
                <button class="btn btn-accent">Đăng ký Tư Vấn</button>
            </form>
        </div>

    </div>
</section>
<section class="container search-area">
    <form action="" class="search-form">
        <div class="row">
            <div class="col-lg-4">
                <div class="combox-wapper">
                    <label>Giá Nhà</label>
                    <select name="" class="control" placeholder="khoảng giá" name="price">
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
                    <select name="" class="control" placeholder="Diện Tích" name="area">
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
                    <select name="" class="control" placeholder="Phòng Ngủ" name="bedroom">
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
                    <select name="" class="control" placeholder="số phòng tắm" name="bathroom">
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
<!-- du an nỏi bat  -->
<section class="container project-hot">
    <div class="title-secction"><h2 class="text-center">DỰ ÁN NỔI BẬT</h2></div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img//banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- du an dang trien khai -->
<section class="container gallery-room">
    <div class="title-section"><h2 class="text-center">DỰ ÁN ĐANG TRIỂN KHAI</h2></div>
    <div class="small-tab-controls">
        <ul id="category-product">
            <li><div><a href="" class="category-link active" ><i class="far fa-bookmark"></i> Tất cả</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> Căn hộ</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> Đất nền</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> BDS nghĩ dưỡng</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> Nhà phố biệt thự</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> Officetel</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> Shophouse</a></div></li>
            <li><div><a href="javascript:void(0)" class="category-link"><i class="far fa-bookmark"></i> Condotel</a></div></li>
        </ul>
    </div>
</section>
<!-- end du an dang trien khai -->
<!-- list du an dang trienr khai -->
<section class="container project">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="row">
                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img//banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-3">
                <div class="row">
                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img//banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                            <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- endlist du an  -->

<!-- giới thiệu -->
<div class="container mt-5">
    <div class="container-intro">
        <div class="row">
            <div class="col-lg-6">
                <img src="img/banner-3.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">KHÁT VỌNG VƯƠN XA</h2>
                        <p>Chúng tôi tin tưởng rằng việc thành lập WEALTH LAND sẽ là tiền đề nền móng vững chắc để hình thành khai thác và xây dựng những dự án Bất Động Sản với những thương hiệu mới, công trình mới và thành công mới. Xuất phát từ góc nhìn Thành phố Huế là thị trường khởi sắc tiềm năng nhiều triển vọng,
                            chúng tôi hy vọng sẽ song hành cùng với sự phát triển của Huế trong tương lai gần và sẽ tiến xa</p>
                    </div>
                    <div class="col-lg-12">
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
                    <div class="col-lg-12">
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
<!-- end giới thiệu -->

<!-- tintuwc -->
<section class="container introduce">
    <div class="col-lg-12 mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">KHÁT VỌNG VƯƠN XA</h2>
            </div>
            <div class="col-lg-3 mt-3">
                <div class="card">
                    <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-3">
                <div class="card">
                    <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-3">
                <div class="card">
                    <img src="img//banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-3">
                <div class="card">
                    <img src="img/banner-3.jpg" class="card-img-top" alt="...">
                    <div class="card-view"><h6 class="view">XEM CHI TIẾT</h6></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end tin tuc -->

<!-- footer -->
@endsection
