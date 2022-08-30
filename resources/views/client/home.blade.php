@extends('client.layouts.index')

@section('content')
<div id="preloder" style="display: none;">
    <div class="loader" style="display: none;"></div>
</div>
@include('client.layouts.banner')
<!-- hiển thị header với màn hình điện thoại -->
<div class="c-box_mmenu hidden-lg hidden-md ">

    <div class="c-box_msearch">
        <a href="/" title="Sixdo logo" class="" style="    width: 50%; margin-bottom: 20px;display: inline-block;">
            <img src="{{asset('client/img/logo-chamy.png')}}" alt="SIXDO BY DO MANH CUONG" class="img-responsive">
        </a>
        <div class="search-box ">
            <form id="form_search" class="form_search" name="form_search" method="post"
                onsubmit="javascript: msubmit_form_search();return false;">

                <input class="form-control input_search" type="text" id="mkeyword" name="keyword"
                    placeholder="Gõ từ khóa tìm kiếm" value="" />

                <a class="bt-search-main hidden-xs" id="bt-search" onclick="msubmit_form_search();">
                    <img src="images/icon-s.png" alt="icon">
                    <!--            <i class="fa fa-search"></i>-->
                </a>

                <input type="hidden" id="mlink_search" name="link_search" value="/tim-kiem">

            </form>
        </div>



    </div>
    <a href="javascript:void(0)" title="close" class="c-btn_close--menu">
        <img src="images/icon-close.png" alt="close">
    </a>

    <ul class=" c-menu_mobile row-item ">
        <li class=" level0 first-item c-has_parent menu-item dropdown">
            <div class="c-sub sub-1 "><a class="c-item_name" href="/san-pham" title="SẢN PHẨM" target="_self">SẢN
                    PHẨM</a> <span class="offcanvas-menu-toggler collapsed" href="#childMenu_1" data-toggle="collapse">
                    <i class="open-icon fa fa-angle-right"></i>
                    <i class="close-icon fa fa-angle-down"></i>
                </span></div>
            <ul id="childMenu_1" class="collapse">
                <li class=" level1 first-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-2 c-sub_child  "><a class="c-item_name" href="/clothes-p20"
                            title="THỜI TRANG NỮ" target="_self">THỜI TRANG NỮ</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-3 c-sub_child  "><a class="c-item_name" href="/bags-p27" title="PHỤ KIỆN"
                            target="_self">PHỤ KIỆN</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-4 c-sub_child  "><a class="c-item_name" href="/kid-p37" title="KID"
                            target="_self">KID</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-5 c-sub_child  "><a class="c-item_name" href="/thoi-trang-nam-p30"
                            title="THỜI TRANG NAM" target="_self">THỜI TRANG NAM</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-6 c-sub_child  "><a class="c-item_name" href="/uu-dai-p36" title="SALE 70%"
                            target="_self">SALE 70%</a></div>
            </ul>
        <li class=" level0 c-has_parent menu-item dropdown">
            <div class="c-sub sub-7 "><a class="c-item_name" href="/bo-suu-tap" title="Bộ sưu tập" target="_self">Bộ sưu
                    tập</a></div>
        <li class=" level0 c-has_parent menu-item dropdown">
            <div class="c-sub sub-8 "><a class="c-item_name" href="/fashion-show" title="Fashion Show"
                    target="_self">Fashion Show</a></div>
        <li class=" level0 c-has_parent menu-item dropdown">
            <div class="c-sub sub-9 "><a class="c-item_name" href="/sixclub-st30" title="SixClub"
                    target="_self">SixClub</a></div>
        <li class=" level0 c-has_parent menu-item dropdown">
            <div class="c-sub sub-10 "><a class="c-item_name" href="/wws" title="WWS" target="_self">WWS</a></div>
        <li class=" level0 c-has_parent menu-item dropdown">
            <div class="c-sub sub-11 "><a class="c-item_name" href="javascript:void(0)" title="Giới thiệu"
                    target="_self">Giới thiệu</a> <span class="offcanvas-menu-toggler collapsed" href="#childMenu_11"
                    data-toggle="collapse">
                    <i class="open-icon fa fa-angle-right"></i>
                    <i class="close-icon fa fa-angle-down"></i>
                </span></div>
            <ul id="childMenu_11" class="collapse">
                <li class=" level1 first-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-12 c-sub_child  "><a class="c-item_name" href="/cau-chuyen-thuong-hieu-st31"
                            title="Câu chuyện thương hiệu" target="_self">Câu chuyện thương hiệu</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-13 c-sub_child  "><a class="c-item_name" href="/chinh-sach-cn98"
                            title="Chính sách" target="_self">Chính sách</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-14 c-sub_child  "><a class="c-item_name" href="/tin-tuc-sixdo-cn96"
                            title="Báo chí" target="_self">Báo chí</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-15 c-sub_child  "><a class="c-item_name" href="/tuyen-dung" title="Tuyển dụng"
                            target="_self">Tuyển dụng</a></div>
                <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown">
                    <div class="c-sub sub-16 c-sub_child  "><a class="c-item_name" href="/lien-he" title="Liên hệ"
                            target="_self">Liên hệ</a></div>
            </ul>
        <li class=" level0 c-has_parent menu-item dropdown">
            <div class="c-sub sub-17 "><a class="c-item_name" href="/he-thong-cua-hang" title="Cửa hàng"
                    target="_self">Cửa hàng</a></div> <!-- NEWS_TYPE for menu	-->

    </ul>


    <div class="c-box_maccount">
        <a href="/dang-nhap" title="Đăng nhập" class="c-account c-btn c-btn_call--login">
            Đăng nhập </a>
    </div>

    <script type="text/javascript">

    </script>
</div>
<!-- hiển thị sản phẩm -->
<div class='block_products products_2 blocks_products blocks2 block'>
    <div id="block-22" class="block-products block-products-default" style="">
        <div class="container">
            <div class="block-heading">
                <a href="/san-pham" class="heading">New Arrival</a>
            </div>
            <!--end: .block-heading-->
            <div class="block-content">
                <div class="row pro-box-list box-home">
                    @foreach ($productsRecommend as $keyRecommend => $valueRecommend)
                    <div class="col-lg-3 col-md-4 col-sm-6 c-item col-xs-6">
                        <a href="{{ route('shop-details', ['id' => $valueRecommend->id]) }}" title="Nude Off-shoulder Midi Linen Dress"
                            class="c-image">
                            <img src="{{ asset($valueRecommend->product_vartar_path) }}"
                                alt="Nude Off-shoulder Midi Linen Dress" class="img-fluid img-first  c-img_3817">
                            <img src="{{ asset($valueRecommend->product_vartar_path) }}"
                                alt="Sixdo Nude Off-shoulder Midi Linen Dress" class="img-fluid img-sec">
                        </a>
                        <div class="price">
                            <p class="c-price">
                                <span class="c-real_price">
                                {{ number_format($valueRecommend->discount) }} VND </span>
                            </p>
                        </div>

                        <h3 class="c-name">
                            <a href="{{ route('shop-details', ['id' => $valueRecommend->id]) }}"
                                title="Nude Off-shoulder Midi Linen Dress" class="name">
                                {{ $valueRecommend->name }} </a>
                        </h3>
                    </div>
                    @endforeach
                </div>
                <!--end: .row-->
            </div>
            <!--end: .block-content-->
            <a href="{{ route('productSixdo') }}" class="show-more">Xem thêm</a>
        </div>
        <!--end: .container-->
    </div>
    <!--end: #block-22-->
</div>
<!-- ------------------------------- Hiển thị phần intagam
 -->
<div class='block_banners banners_3 blocks_banner blocks3 block'>
    <div class="container">
        <div id="block-23" class="block-border-top block-banner block-banner-list_4" style="float:none;">
            <div class="block-heading">
                <p class="heading">
                    Instagram <span>@sixdo.vn</span>
                </p>
            </div>
            <!--end: .block-heading-->
            <div class="row row-insta">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href=" https://www.instagram.com/sixdovn/" title="Instagram 1">
                        <img src="{{ asset('client/img/banners/mresized/287076967_4935069383289476_377855830583369752_n-1655171215.jpg')}} "
                            alt="Instagram 1" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 2">
                        <img src="{{ asset('client/img/banners/mresized/287041826_727688845143072_5375113661440301887_n-1655171225.jpg')}}"
                            alt="Instagram 2" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 3">
                        <img src="{{ asset('client/img/banners/mresized/286703694_141382905148435_100432399055202567_n-1655171234.jpg')}}"
                            alt="Instagram 3" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 4">
                        <img src="{{ asset('client/img/banners/mresized/287291347_555796819469031_6157224774246711061_n-1655171176.jpg')}}"
                            alt="Instagram 4" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 5">
                        <img src="{{ asset('client/img/banners/mresized/286963062_151566187419585_8630605680658209086_n-1655171186.jpg')}}"
                            alt="Instagram 5" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 6">
                        <img src="{{ asset('client/img/banners/mresized/286888577_600275614541104_63940823786004172_n-1655171196.jpg')}}"
                            alt="Instagram 6" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 7">
                        <img src="{{ asset('client/img/banners/mresized/287296133_527166045808356_6051507400269487705_n-1655171131.jpg')}}"
                            alt="Instagram 7" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 8">
                        <img src="{{ asset('client/img/banners/mresized/287040129_746560730020408_67022803535223019_n-1655171141.jpg')}}"
                            alt="Instagram 8" class="img-responsive">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-item">
                    <a href="https://www.instagram.com/sixdovn/" title="Instagram 9">
                        <img src="{{ asset('client/img/banners/mresized/287063269_591095328900216_4426693808377072729_n-1655171148.jpg')}}"
                            alt="Instagram 9" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
        <!--end: #block-23-->
    </div>
</div>
</div> <!-- END: .pos-top -->
<div class="clearfix"></div>
@endsection