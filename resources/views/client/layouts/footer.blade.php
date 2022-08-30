<!-- Footer Section Begin -->
<!-- <footer class="footer spad">
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

</footer> -->
<div class="pos-bottom row-content">
    <div class='block_banners banners_0 blocks_banner blocks0 block'>
        <div id="block-24" class="block-intro-config block-banner block-banner-banner_footer" style="float:none;">
            <div class="container-flex">
                <div class="item">
                    <a href="/chinh-sach-doi-tra-n354" target="_blank">
                        <img src="{{ asset('client/img/banners/original/limited-time2x-1624335793.png')}}"
                            alt="Đổi trả sản phẩm" class="img-responsive">
                        <div>
                            <p><strong>6 ngày đổi sản phẩm</strong></p>

                            <p>Đổi trả sản phẩm trong 6 ngày</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/lien-he" target="_blank">
                        <img src="{{ asset('client/img/banners/original/group-242x-1624335840.png')}}" alt="Hotline"
                            class="img-responsive">
                        <div>
                            <p><strong>Hotline 1800 6650</strong></p>

                            <p>8h00 - 21h00, T2 - CN nghỉ Tết Âm lịch</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/he-thong-cua-hang" target="_blank">
                        <img src="{{ asset('client/img/banners/original/group-262x-1624335863.png')}}  "
                            alt="Hệ thống cửa hàng" class="img-responsive">
                        <div>
                            <p><strong>Hệ thống cửa hàng</strong></p>

                            <p>gần 60&nbsp;cửa hàng trên toàn hệ thống</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="" target="_blank">
                        <img src="{{ asset('client/img/banners/original/path-833-1623718758-1624336147.png')}}"
                            alt="Vận chuyển" class="img-responsive">
                        <div>
                            <p><strong>VẬN CHUYỂN</strong></p>

                            <p>Đồng giá 25K toàn quốc</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--end: #block-24-->
    </div>
</div>
<!--END: .pos-bottom -->
<footer class="container-fuild c-footer ">
    <div class="container">
        <div class="row sitemap">
            <div class="col-sm-4 item">
                <p class="c-title">CHAMY</p>
                <div class="c-info">
                    <p style="text-align: center;">Sang trọng<br />
                        Ứng dụng ở mức giá tầm trung</p>
                </div>
            </div>
            <div class="col-sm-4 item">
                <p class="c-title">Hỗ trợ khách hàng</p>
                <div class="c-info">
                    <ul id="block-0" class="block-menu block-menu-default ">
                        <li class="menu-168 "><a href="/chinh-sach-van-chuyen-n352?Itemid=168"
                                title="CHÍNH SÁCH VẬN CHUYỂN">CHÍNH SÁCH VẬN CHUYỂN</a></li>
                        <li class="menu-169 "><a href="/chinh-sach-doi-tra-n354?Itemid=169"
                                title="CHÍNH SÁCH ĐỔI TRẢ">CHÍNH SÁCH ĐỔI TRẢ</a></li>
                        <li class="menu-178 "><a href="/phuong-thuc-thanh-toan-n355?Itemid=178"
                                title="PHƯƠNG THỨC THANH TOÁN">PHƯƠNG THỨC THANH TOÁN</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 item">
                <p class="c-title">Social Network</p>
                <div class="c-info link-ico">
                    <a target="_blank" href="https://www.facebook.com/sixdo.vn/" title="Facebook" class="c-social">
                        <img src=" {{ asset('client/img/ic-fb.svg') }}" alt="Facebook" class="img-responsive">
                    </a>
                    <a target="_blank" href="https://www.instagram.com/sixdovn/?hl=vi" title="Instagram"
                        class="c-social">
                        <img src=" {{ asset('client/img/ic-instagram.svg') }}" alt="Instagram" class="img-responsive">
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCEVf2PNxISwcRKM2WpZkdJg" title="Youtube"
                        class="c-social">
                        <img src=" {{ asset('client/img//ic-yt.svg') }}" alt="Youtube" class="img-responsive">
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@sixdoofficial?lang=vi-VN" title="Tiktok"
                        class="c-social">
                        <img src=" {{ asset('client/img/ic-tictok.svg') }}" alt="Tiktok" class="img-responsive">
                    </a>
                </div>
                <a target="_blank" title="Thông báo bộ công thương" href="http://online.gov.vn/Home/WebDetails/76361">
                    <img width="90" src="{{ asset('client/img/Thongbaobocongthuong.svg') }}"
                        alt="Thông báo bộ công thương">
                </a>
            </div>
        </div>
        <div class="copyright">
            <span>©2022-CHAMY</span>
        </div>
    </div>
</footer>