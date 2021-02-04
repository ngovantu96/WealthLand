<div class="navbar-header">
    <input type="checkbox" id="check">
    <label class="close" for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <img src="{{ asset('font_end/img/logo.png') }}" alt="" class="logo">
    <ul class="items">
        <li class="item"><a href="{{ route('page.index') }}" class="link">TRANG CHỦ</a></li>
        <li class="item"><a href="{{ route('introduce.index') }}" class="link">GIỚI THIỆU</a></li>
        <li class="item"><a href="#" class="link">DỰ ÁN BĐS</a></li>
        <li class="item"><a href="" class="link">TIN TỨC</a></li>
        <li class="item"><a href="#" class="link">ĐỐI TÁC</a></li>
        <li class="item"><a href="{{ route('image.index') }}" class="link">THƯ VIỆN ẢNH</a></li>
        <li class="item"><a href="{{ route('contact.index') }}" class="link">LIÊN HỆ</a></li>
    </ul>
</div>
