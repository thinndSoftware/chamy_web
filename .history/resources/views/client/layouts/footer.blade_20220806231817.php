<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logoDN.png" alt=""></a>
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

                    <ul>
                        <li><a href="{{ route('shop-details') }}">Chi tiết sản phẩm</a></li>
                        <li><a href="{{ route('shoping-cart') }}">Giỏ hàng</a></li>
                        <li><a href="{{ route('checkout') }}">Thanh toán</a></li>
                        <li><a href="{{ route('blog_details') }}">Tin tức về sản phẩm</a></li>
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
                            < i class="fa fa-twitter"></>
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
