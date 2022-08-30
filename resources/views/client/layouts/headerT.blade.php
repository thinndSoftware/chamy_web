<header>
    <div class="header header_home  ">
        <div class="container">
            <div class="main_header">
                <div class="logo">
                    <a href="/" title="SIXDO BY DO MANH CUONG">
                        <img src="{{asset('client/img/logo-chamy.png')}}" alt="SIXDO BY DO MANH CUONG" class="img-responsive c-img_logo">
                    </a>
                </div>
                <div class="menu_header">
                    <div class="menu_login">
                        <a href="javascript:void(0)" title="login" id="c-call_account"
                            class="c-account hidden-xs hidden-sm" onclick="$('#memLog').trigger('click')">
                            <img src="{{asset('client/img/account.png')}}" alt="login" class="img-responsive">
                            login </a>
                        <div class="c-lang c-item_child search_ c-box_search hidden-sm hidden-xs"
                            style="text-transform: unset;">
                            <a href="javacript:void(0)" title="Tìm kiếm" class="c-call_search">
                                <i class="fa fa-search"></i>
                                <span class="hidden-sm hidden-xs">Tìm kiếm</span>
                            </a>

                            <!--  -->
                            <div class="search-box ">
                                <form id="form_search" class="form_search" name="form_search" method="post"
                                    onsubmit="javascript: submit_form_search();return false;">

                                    <input class="form-control input_search" type="text" id="keyword" name="keyword"
                                        value="Gõ từ khóa tìm kiếm"
                                        onblur="if(this.value=='') this.value='Gõ từ khóa tìm kiếm'"
                                        onfocus="if(this.value=='Gõ từ khóa tìm kiếm') this.value=''" />

                                    <a class="bt-search-main" id="bt-search" onclick="submit_form_search();"> <i
                                            class="fa fa-search"></i></a>

                                    <input type="hidden" id="link_search" name="link_search" value="/tim-kiem">

                                </form>
                            </div>


                        </div>

                        <!-- <a class="c-lang hidden-xs hidden-sm  active" href="/" title="VN">
                            VN </a>
                        <a class="c-lang hidden-xs hidden-sm " href="/en" title="EN">
                            EN </a> -->
                        <div class="sb-toggle hidden-lg hidden-md  sb-home " id="call_menu">
                            <div class="navicon-line"></div>
                            <div class="navicon-line"></div>
                            <div class="navicon-line"></div>
                        </div>
                        <a href="/gio-hang" title="Giỏ hàng" class="c-lang c-btn_cart c-btn c-icon_cart--home">
                            <i class="fa fa-shopping-cart hidden-xs hidden-sm"></i>
                            <span class="c-amount_cart hidden-xs hidden-sm" style="font-size: 12px">
                            </span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4 hidden-lg hidden-md"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>

                            <div class="c-alert_addCart hide"></div>
                        </a>

                        <div class="c-modal_overlay"></div>
                        <div class="submenu view-cart-hea c-box_viewCart ">
                            <a href="javascript:void(0)" title="close" class="c-close_cart">
                                x
                            </a>
                            <div class="c-box_shopping--cart">
                                <p class="c-note_empty">
                                    Bạn chưa có sản phẩm nào trong giỏ hàng </p>
                            </div>
                        </div>
                        <!-- <a href="/en" title="lang" class="c-mlang hidden-lg hidden-md">
                            <img src="images/language_en.png" alt="lang">
                        </a> -->

                    </div>


                    <div id='cssmenu' class=" c-main_menu">
                        <ul class="nav navbar-nav main-menu">
                            <li class=" level0 has_child  first-item menu-item dropdown"><a class="" href="{{ route('productSixdo') }}"
                                    title="SẢN PHẨM" target="_self">SẢN PHẨM</a>
                                <ul class="light-menu list-unstyled">
                                    <div class="container">
                                        <li class=" level1 first-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/clothes-p20" title="THỜI TRANG NỮ" target="_self">THỜI
                                                TRANG NỮ</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/bags-p27" title="PHỤ KIỆN" target="_self">PHỤ KIỆN</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/kid-p37" title="KID" target="_self">KID</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/thoi-trang-nam-p30" title="THỜI TRANG NAM"
                                                target="_self">THỜI TRANG NAM</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/uu-dai-p36" title="SALE 70%" target="_self">SALE 70%</a>
                                </ul>
                                <li class=" level0 menu-item dropdown"><a class="" href="{{route('productSixdoSale')}}" title="Fashion Show"
                                    target="_self"> Sale up to 70%</a>
                            <li class=" level0 menu-item dropdown"><a class="" href="{{ route('blog') }}" title="Bộ sưu tập"
                                    target="_self">Bộ sưu tập</a>
                           
                            <!-- <li class=" level0 has_child  menu-item dropdown"><a class="" href="javascript:void(0)"
                                    title="Giới thiệu" target="_self">Giới thiệu</a>
                                <ul class="light-menu list-unstyled">
                                    <div class="container">
                                        <li class=" level1 first-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/cau-chuyen-thuong-hieu-st31"
                                                title="Câu chuyện thương hiệu" target="_self">Câu chuyện thương hiệu</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/chinh-sach-cn98" title="Chính sách" target="_self">Chính
                                                sách</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/tin-tuc-sixdo-cn96" title="Báo chí" target="_self">Báo
                                                chí</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/tuyen-dung" title="Tuyển dụng" target="_self">Tuyển
                                                dụng</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/lien-he" title="Liên hệ" target="_self">Liên hệ</a>
                                </ul> -->
                           
                            <li class=" level0 menu-item dropdown"><a class="" href="{{route('inforShopChamy')}}"
                                    title="Cửa hàng" target="_self">Cửa hàng</a> <!-- NEWS_TYPE for menu	-->

                        </ul>
                    </div>

                    <script type="text/javascript">


                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="c-container_fluid menu-top-fuild hide">
        <nav class=" navbar navbar-expand-lg navbar-light menu-top" data-spy="affix" data-offset-top="50">
            <!--   -->
            <div class="container-extra">
                <div class="navbar-collapse " id="navbarNav">


                    <div id='cssmenu' class=" c-main_menu">
                        <ul class="nav navbar-nav main-menu">
                            <li class=" level0 has_child  first-item menu-item dropdown"><a class="" href="/san-pham"
                                    title="SẢN PHẨM" target="_self">SẢN PHẨM</a>
                                <ul class="light-menu list-unstyled">
                                    <div class="container">
                                        <li class=" level1 first-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/clothes-p20" title="THỜI TRANG NỮ" target="_self">THỜI
                                                TRANG NỮ</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/bags-p27" title="PHỤ KIỆN" target="_self">PHỤ KIỆN</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/kid-p37" title="KID" target="_self">KID</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/thoi-trang-nam-p30" title="THỜI TRANG NAM"
                                                target="_self">THỜI TRANG NAM</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/uu-dai-p36" title="SALE 70%" target="_self">SALE 70%</a>
                                </ul>
                            <li class=" level0 menu-item dropdown"><a class="" href="/bo-suu-tap" title="Bộ sưu tập"
                                    target="_self">Bộ sưu tập</a>
                            <li class=" level0 menu-item dropdown"><a class="" href="/fashion-show" title="Fashion Show"
                                    target="_self">Fashion Show</a>
                            <li class=" level0 menu-item dropdown"><a class="" href="/sixclub-st30" title="SixClub"
                                    target="_self">SixClub</a>
                            <li class=" level0 menu-item dropdown"><a class="" href="/wws" title="WWS"
                                    target="_self">WWS</a>
                            <li class=" level0 has_child  menu-item dropdown"><a class="" href="javascript:void(0)"
                                    title="Giới thiệu" target="_self">Giới thiệu</a>
                                <ul class="light-menu list-unstyled">
                                    <div class="container">
                                        <li class=" level1 first-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/cau-chuyen-thuong-hieu-st31"
                                                title="Câu chuyện thương hiệu" target="_self">Câu chuyện thương hiệu</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/chinh-sach-cn98" title="Chính sách" target="_self">Chính
                                                sách</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/tin-tuc-sixdo-cn96" title="Báo chí" target="_self">Báo
                                                chí</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/tuyen-dung" title="Tuyển dụng" target="_self">Tuyển
                                                dụng</a>
                                        <li class=" level1 mid-sitem sub-menu-item  dropdown-submenu  dropdown"><a
                                                class="" href="/lien-he" title="Liên hệ" target="_self">Liên hệ</a>
                                </ul>
                            <li class=" level0 menu-item dropdown"><a class="" href="/he-thong-cua-hang"
                                    title="Cửa hàng" target="_self">Cửa hàng</a> <!-- NEWS_TYPE for menu	-->

                        </ul>
                    </div>

                    <script type="text/javascript">


                    </script>
                    <!--            mobile          -->
                    <div class="c-box_funs">
                        <div class=" hidden-md hidden-lg  call_mmenu">
                            <div href="#menu" class="icon" id="call_menu" title="Show menu">
                                <!--                                    <i class="fa fa-bars"></i>-->
                                <img src="images/icon-bars.png" alt="mmenu">
                            </div>
                        </div>
                        <div class="c-item_child search_ c-box_search hidden-lg hidden-md">
                            <a href="javacript:void(0)" title="Tìm kiếm" class="c-call_search c-call_msearch">
                                <i class="fa fa-search"></i>
                            </a>
                            <!--                                -->
                        </div>

                        <a href="/san-pham-yeu-thich" title="Yêu thích"
                            class="c-btn_heart c-btn hidden-lg hidden-md hide">
                            <i class="fa fa-heart-o"></i>
                            <span class="c-amount_like" data-like="0" style="font-size: 12px">
                            </span>
                        </a>

                        <div class=" hidden-md hidden-lg col_logo">
                            <a class="cl_logo hidden-lg hidden-md " href="/" title="SIXDO BY DO MANH CUONG">
                                <img class="img-responsive" src="{{asset('client/img/logo-chamy.png')}}" alt="SIXDO BY DO MANH CUONG">
                            </a>
                        </div>
                        <div class="c-item_child search_ c-box_search hidden-sm hidden-xs">
                            <a href="javacript:void(0)" title="Tìm kiếm" class="c-call_search">
                                <i class="fa fa-search"></i>
                                <span class="hidden-sm hidden-xs">Tìm kiếm</span>
                            </a>
                            <!--                                -->
                        </div>

                        <div class="c-item_child c-other_funs">
                            <a href="/dang-nhap" title="Đăng nhập" class="c-account c-btn hidden-sm hidden-xs">
                                Đăng nhập </a>

                            <a href="/san-pham-yeu-thich" title="Yêu thích"
                                class="c-btn_heart c-btn hidden-sm hidden-xs">
                                <i class="fa fa-heart-o"></i>
                                <span class="c-amount_like" data-like="0" style="font-size: 12px">
                                </span>
                            </a>

                            <!--                                <a href="-->
                            <!--"-->
                            <span href="javascript:void (0)" title="Giỏ hàng" class="c-btn_cart c-btn">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="c-amount_cart" style="font-size: 12px">
                                </span>
                                <div class="c-alert_addCart hide"></div>
                            </span>
                            <div class="c-modal_overlay"></div>
                            <div class="submenu view-cart-hea c-box_viewCart ">
                                <a href="javascript:void(0)" title="close" class="c-close_cart">
                                    x
                                </a>
                                <div class="c-box_shopping--cart">
                                    <p class="c-note_empty">
                                        Bạn chưa có sản phẩm nào trong giỏ hàng </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>