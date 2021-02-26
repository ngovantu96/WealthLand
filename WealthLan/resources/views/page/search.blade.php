@extends('page.master')
@section('page-title','trang chu')
@section('content')
 <!-- carousel start -->
 <section class="banner">
    <div class="banner-img">
        <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
       <div class="title-detail"><h3>Kết Quả Tìm Kiếm</h3></div>
    </div>
</section>
<!-- end -->

<section class="container intro-details  search-area">
    <form action="" class="search-form" method="post">
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

<section class="gallery-room container">
    <div class="title-section">
        <h2 class="text-center">Kết Quả Tìm Kiếm</h2>
    </div>
    @if(!$result)
    <div class="title-content">
        <h3>Không Tìm Thấy Kết Quả Phù Hợp</h3>
    </div>
    @else
        <!-- ket qua tim kiem -->
    <div class="project">
        <div class="row">
            @foreach($result as $item)
                    <div class="col-lg-3 mt-3">
                        <div class="card">
                            <a href="#"><img src="{{ $item->getImage() }}" class="card-img-top" alt="..."></a>
                            <div class="card-view"><a href=""></a></div>
                            <div class="card-body">
                                <a href="#"><h6 class="card-title">{{ $item->title }}</h6></a>
                            </div>
                        </div>
                    </div>
            @endforeach

        </div>
    </div>
<!-- endlist du an  -->
    @endif
</section>
<!-- footer -->
@endsection
