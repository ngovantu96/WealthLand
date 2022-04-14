
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('font_end/img/Logo.png') }}" alt="" class="logo"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{ route('page.index') }}" class="nav-item nav-link active">TRANG CHỦ</a>
                <a href="{{ route('introduce.index') }}" class="nav-item nav-link">GIỚI THIỆU</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">DỰ ÁN BDS</a>
                    <div class="dropdown-menu">
                        @foreach($listLands as $listLand)
                        <a href="{{ route('categoryland.detail',$listLand->id)}}" class="dropdown-item">{{ $listLand->name }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('post.index') }}" class="nav-item nav-link">TIN TỨC</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ĐỐI TÁC</a>
                    <div class="dropdown-menu">
                        @foreach($partners as $partner)
                        <a href="{{ route('partner.index',$partner->id) }}" class="dropdown-item">{{ $partner->name }}</a>
                       @endforeach
                    </div>
                </div>
                <a href="{{ route('image.index') }}" class="nav-item nav-link">THƯ VIỆN ẢNH</a>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link">LIÊN HỆ</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->

