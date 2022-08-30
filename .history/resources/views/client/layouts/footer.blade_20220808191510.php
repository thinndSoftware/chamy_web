<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('client/img/logoDN.png') }}" alt=""></a>
                    </div>
                    <ul>
                        <li>{{ getConfigValueFromSettingTable('addess_shop') }}</li>
                        <li>Điện Thoại: {{ getConfigValueFromSettingTable('contact_phone') }}</li>
                        <li>Email: {{ getConfigValueFromSettingTable('contact_email') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6></h6>
                    <ul>

                        {{-- <li><a href="{{ route('shoping-cart') }}">Giỏ hàng</a></li>

                        <li><a href="{{ route('blog') }}">Tin tức</a></li> --}}
                        <li class="active"><a href="{{route('home')}}">Trang Chủ</a></li>
                        <li><a href="{{route('product',['id'=> 5])}}">Sản Phẩm</a></li>
                        <li><a href="{{route('blog')}}">Tin Tức</a></li>
                        <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                        <li><a href="#">Bảo hành</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Hãy Tham Gia Các Chương Trình Khuyến Mãi Ngay!</h6>
                    <p>Nhận thông tin cập nhật qua E-mail về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p>
                    <form action="#">
                        <input type="text" placeholder="Hãy nhập email của bạn!">
                        <button type="submit" class="site-btn">Gửi</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="{{ getConfigValueFromSettingTable('contact_fb') }}"><i class="fa fa-facebook"></i></a>
                        <a href="{{ getConfigValueFromSettingTable('contact_instagram') }}">
                            <i class="fa fa-instagram"></i></a>
                        <a href="{{ getConfigValueFromSettingTable('youtobe_contact') }}">
                            <i class="fa fa-youtube"></i></a>
                        <a href="{{ getConfigValueFromSettingTable('contact_twitter') }}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {!! getConfigValueFromSettingTable('footer_info') !!}
            </div>
        </div>
    </div>

</footer>
