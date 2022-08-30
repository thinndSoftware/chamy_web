<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i>frogdofflcial@gmail.com
                            </li>
                            <li>Mang cả thế giới công nghệ đến với tâm tay của bạn!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Đăng Nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('auth/img/logoDN.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Trang Chủ</a></li>
                        <li><a href="{{route('product')}}">Sản Phẩm</a></li>
                        <li><a href="#">Danh mục</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{route('shop-details')}}">Chi tiết sản phẩm</a></li>
                                <li><a href="{{route('shoping-cart')}}">Giỏ hàng</a></li>
                                <li><a href="{{route('checkout')}}">Thanh toán</a></li>
                                <li><a href="{{route('blog_details')}}">Tin tức về sản phẩm</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('blog')}}">Tin Tức</a></li>
                        <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">Thành Tiền <span>29000000Đ</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
