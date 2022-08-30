@extends('client.layouts.index')
@section('content')

<main id="main" class="row-content c-box_root main-content" style="">

    <div class="container row-item">

        <input type="hidden" id="alert_info"
            value='["<i class=\"fa fa-check-circle\"><\/i> L\u1ed7i,kh\u00f4ng k\u1ebft n\u1ed1i \u0111\u01b0\u1ee3c.","<i class=\"fa fa-user\"><\/i> B\u1ea1n c\u1ea7n \u0111\u0103ng nh\u1eadp \u0111\u1ec3 s\u1eed d\u1ee5ng ch\u1ee9c n\u0103ng n\u00e0y","B\u1ea1n \u0111\u00e3 th\u00edch s\u1ea3n ph\u1ea9m n\u00e0y","B\u1ea1n \u0111\u00e3 b\u1ecf th\u00edch s\u1ea3n ph\u1ea9m n\u00e0y","B\u1ea1n c\u1ea7n nh\u1eadp th\u00f4ng tin chi\u1ec1u cao","B\u1ea1n c\u1ea7n nh\u1eadp th\u00f4ng tin c\u00e2n n\u1eb7ng","B\u1ea1n ch\u1ec9 \u0111\u01b0\u1ee3c nh\u1eadp s\u1ed1","B\u1ea1n vui l\u00f2ng chon m\u00e0u s\u1ea3n ph\u1ea7m","B\u1ea1n vui l\u00f2ng ch\u1ecdn size","B\u1ea1n vui l\u00f2ng chon s\u1ed1 l\u01b0\u1ee3ng > 0","S\u1ed1 l\u01b0\u1ee3ng b\u1ea1n mua \u0111ang l\u1edbn h\u01a1n s\u1ed1 l\u01b0\u1ee3ng cho ph\u00e9p"]' />

        <div class="demo">

        </div>

        <div class=" c-box_product">
            <div>
                <nav class=" location-page" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb-item">
                            <a itemprop="url" title="Trang chủ" rel="nofollow" href="/" itemprop="title">Trang chủ</a>
                        </li>
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb-item">
                            <a itemprop="url" href="/clothes-p21" title="THỜI TRANG NỮ" itemprop="title">THỜI TRANG
                                NỮ</a>
                        </li>
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb-item">
                            <a itemprop="url" href="/dresses-p21" title="Váy Đầm" itemprop="title">Váy Đầm</a>
                        </li>
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb-item">
                            <a itemprop="url" title="Light Purple Floral Midi Voile Dress" itemprop="title">Light Purple
                                Floral Midi Voile Dress</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <input type="hidden" value="sản phẩm được thêm vào giỏ hàng" id="alert_addcart">
                <input type="hidden" value="/" id="url_root">
                <input type="hidden" value="1" id="total_color">

                <div class="row c-row_head">
                    <h1 class="hide">
                        Light Purple Floral Midi Voile Dress </h1>
                    <!--            -->
                    <div class="col-md-6 img-product my-gallery" id="col-img">
                        <div class="c-box_all--images ">
                            <div id="lightSlider0" class="dddd">
                                <div class="c-item img-watch134"
                                    data-thumb="/images/products/2022/small/sbt_0384-1661156718.jpg">
                                    <!--                                    <a id="Zoomer" class="MagicZoomPlus" href="-->
                                    <!--"-->
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="/images/products/2022/original/sbt_0384-1661156718.jpg"
                                        itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/sbt_0384-1661156718.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>

                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/SBT_0361.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0361.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0361.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0361.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/SBT_0380.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0380.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0380.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0380.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/SBT_0352.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0352.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0352.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0352.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/SBT_0364.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0364.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0364.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0364.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/ALI18198.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18198.jpg"
                                        data-thumb="/images/products/2022/small/ALI18198.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18198.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/ALI18177.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18177.jpg"
                                        data-thumb="/images/products/2022/small/ALI18177.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18177.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/ALI18123.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18123.jpg"
                                        data-thumb="/images/products/2022/small/ALI18123.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18123.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/ALI18145.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18145.jpg"
                                        data-thumb="/images/products/2022/small/ALI18145.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18145.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item img-watch134" data-thumb="/images/products/2022/small/ALI18215.jpg">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18215.jpg"
                                        data-thumb="/images/products/2022/small/ALI18215.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18215.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>


                            </div>


                            <div class="main-img hide" id="product-image-gallery1">

                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0361.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0361.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0361.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0380.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0380.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0380.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0352.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0352.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0352.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/SBT_0364.jpg"
                                        data-thumb="/images/products/2022/small/SBT_0364.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/SBT_0364.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18198.jpg"
                                        data-thumb="/images/products/2022/small/ALI18198.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18198.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18177.jpg"
                                        data-thumb="/images/products/2022/small/ALI18177.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18177.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18123.jpg"
                                        data-thumb="/images/products/2022/small/ALI18123.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18123.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18145.jpg"
                                        data-thumb="/images/products/2022/small/ALI18145.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18145.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="images/products/2022/original/ALI18215.jpg"
                                        data-thumb="/images/products/2022/small/ALI18215.jpg" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="images/products/2022/large/ALI18215.jpg"
                                            alt="Image description" />
                                    </a>
                                </div>
                            </div>
                            <div class="thumb-pro1 hide hidden-xs">
                                <ul id="thumb-pro1" class="owl-loaded owl-drag owl-carousel">

                                    <!--                            -->
                                    <!--                                <li class="item has-video">-->
                                    <!--                                    <a href="#" onclick='opent_video()'>-->
                                    <!--                                        <img alt="Youtube video" class="img-responsive"-->
                                    <!--                                             src="-->
                                    <!--">-->
                                    <!--                                    </a>-->
                                    <!--                                </li>-->
                                    <!--                            -->
                                </ul>
                            </div>
                            <div class="c-box--thumb_image hide">
                                <div class="c-list--thumb_image">

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 body-product">
                        <div id="body_fix_add_cart">
                            <div class="content_pro">
                                <h2 class="c-title_module">
                                    Light Purple Floral Midi Voile Dress </h2>
                                <p class="c-code">MSP:
                                    66220608801DI1817 </p>
                                <p class="price price-product">
                                    <span data-price="2496000" id="price-no-discount" class="price-no-discount ">
                                        2.496.000đ </span>

                                </p>
                                <p class="color c-show_color--name">
                                    Color :
                                    <span>
                                        Tím nhạt </span>
                                </p>
                                <ul class="list_color" id="extend_colorProduct">

                                    <li class="c-item">
                                        <input type="radio" name="selection_color" id="selection_color-134" class="hide"
                                            value="134" checked>
                                        <label for="selection_color-134" class=" c-item_color  active"
                                            data-watch="img-watch134" data-show="lightSlider0" d-color="134"
                                            d-name="Tím nhạt">
                                            <span class="c-color" style="background: #FBB3FB;  "></span>
                                        </label>
                                    </li>

                                </ul>
                                <p class="size" id="c-show_size--name">
                                    size :
                                    <span></span>
                                </p>

                                <div class="items-option input_size ">
                                    <div
                                        class="  c-item_choose--first  c-item_choose--size item-radio-choose c-item_choose134">
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_1134 " data-v="1"
                                            data-name="S" data-stock="1" dt-mx="2">
                                            <span class="">
                                                S </span>
                                        </a>
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_2134  c-sold_out"
                                            data-v="2" data-name="M" data-stock="2" dt-mx="0">
                                            <span class="">
                                                M </span>
                                            <span class="tooltip-text  c-out_stock">Hết hàng</span>
                                        </a>
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_3134 " data-v="3"
                                            data-name="L" data-stock="1" dt-mx="3">
                                            <span class="">
                                                L </span>
                                        </a>
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_4134 last-size"
                                            data-v="4" data-name="XL" data-stock="1" dt-mx="2">
                                            <span class="">
                                                XL </span>
                                        </a>
                                    </div>
                                    <div class="hide items-center c-item_choose--size item-radio-choose">
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_1 " data-v="1"
                                            data-name="S" data-stock="1">
                                            <span class="">
                                                S </span>
                                        </a>
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_2 " data-v="2"
                                            data-name="M" data-stock="1">
                                            <span class="">
                                                M </span>
                                        </a>
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_3 " data-v="3"
                                            data-name="L" data-stock="1">
                                            <span class="">
                                                L </span>
                                        </a>
                                        <a href="javascript:void(0)" class="c-name_size--choose c-size_4 last-size"
                                            data-v="4" data-name="XL" data-stock="1">
                                            <span class="">
                                                XL </span>
                                        </a>
                                    </div>

                                    <a href="javascript:void(0)" class="c-btn_call--findsize" data-toggle="modal"
                                        data-target="#modalFindSize" title="Tìm đúng kích thước">
                                        Tìm đúng kích thước <span>&rightarrow;</span>
                                    </a>
                                    <div class="items-center item-radio-choose hide">
                                        <!--                                    <select name="extend_size" id="extend_size" class="extend_size">-->
                                        <!--                                        <option value="">-->
                                        <!--</option>-->
                                        <!--                                        -->
                                        <!--                                            <option value="-->
                                        <!--">-->
                                        <!--</option>-->
                                        <!--                                        -->
                                        <!--                                    </select>-->
                                        <input type="hidden" id="extend_size" name="extend_size" value="">
                                    </div>
                                </div>
                                <div></div>

                                <div class="buy">
                                    <div class="toggle-quantity">
                                        <button id="decrement"><i class="fa fa-minus"></i></button>
                                        <input id="quantity" type="text" value="1" disabled>
                                        <button id="increment"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <a data-id="3913" class="c-btn btn-add_cart add-cart detail-add-cart "
                                        title="Thêm vào giỏ hàng" href="javascript:void (0)">
                                        Thêm vào giỏ hàng </a>

                                    <a href="javascript:void(0)" title="Yêu thích" class="c-btn c-btn_heart pull-right "
                                        onclick="save_post(3913)">
                                        <i class="fa fa-heart-o"></i>
                                        <i class="fa fa-heart"></i>
                                    </a>

                                </div>
                                <div class="c-box_detail">
                                    <a href="#description" data-toggle="collapse" class="c-call_detail--box"
                                        title="Chi tiết">
                                        Chi tiết <i class="fa fa-minus"></i>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <div id="description" class="collapse c-content_detail in">
                                    </div>
                                </div>
                                <div class="c-box_detail">
                                    <a href="#care_instration" data-toggle="collapse"
                                        class="c-call_detail--box collapsed" title="Hướng dẫn bảo quản">
                                        Hướng dẫn bảo quản <i class="fa fa-minus"></i>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <div id="care_instration" class="collapse c-content_detail">
                                    </div>
                                </div>

                                <div class="contact_pro">
                                    <a href="tel:18006650" title="Hotline">
                                        <i class="fa fa-phone"></i> Hotline
                                    </a>
                                    <a href="https://www.facebook.com/messages/t/107198024283962" title=" Chat online "
                                        target="_blank">
                                        <i class="fa fa-comments"></i> Chat online </a>
                                    <a href="#" title="Chia sẻ"><i class=" fa fa-share-alt"></i> Chia sẻ </a>
                                </div>
                            </div>

                            <div class="hide">

                                <form action="#" method="post" class="form-add-cart" id="form-add-cart">


                                    <hr class="hidden-xs">

                                    <div class="form-group view-guide hidden-xs">
                                        <a class="c-btn c-btn_modal--size btn-click_ btn-click-11" data-toggle="modal"
                                            data-target="#modalFindSize">
                                            Tìm kích thước phù hợp </a>
                                    </div>

                                    <div class="detail-task clearfix hidden-xs">
                                        <a data-id="3913" class="c-btn btn-add_cart add-cart detail-add-cart"
                                            title="Thêm vào giỏ hàng">
                                            Thêm vào giỏ hàng </a>
                                    </div>
                                </form>

                            </div>

                            <div class="c-mbox--add_cart hidden-lg hidden-md hidden-sm hide">
                                <div class="c-m--add_cart">
                                    <div class="c-head">
                                        <h2 class="c-title_module">Light Purple Floral Midi Voile Dress</h2>
                                        <div class="c-m--product-price" id="m--product-price">
                                            <span class="is-regular">2.496.000 VND </span>
                                        </div>
                                    </div>
                                    <div class="c-m--box_task">
                                        <a class="c-btn c-btn_modal--size btn-click_ btn-click-11" data-toggle="modal"
                                            data-target="#modalFindSize">
                                            Tìm size phù hợp </a>

                                        <a data-id="3913" class="c-btn btn-add_cart add-cart detail-add-cart"
                                            title="Thêm vào giỏ hàng" href="javascript:void(0)">
                                            Thêm vào giỏ hàng </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-modal_size modal fade" id="modalFindSize" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-body">

                            <div class=" c-row_calculator">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!--                            --> <img src="images/products/size/dam_1660027564.jpg"
                                    alt="kích thước sản phẩm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- List product same -->
            <div class="list-product-same" id="list-product-same">
                <div class="header-product">
                    <h2 class="c-title">Có thể bạn cũng thích </h2>
                </div>

                <div class="row c-box_list">
                    <div class="swiper-container  c-swipper-relate">
                        <div class="swiper-wrapper">
                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/yellow-sleeveless-mini-raw-dress-pd3717"
                                    title="Yellow Sleeveless Mini Raw Dress" class="c-image">
                                    <img src="images/products/2022/large/sbt_6993-1654589598.jpg"
                                        alt="Yellow Sleeveless Mini Raw Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/yellow-sleeveless-mini-raw-dress-pd3717"
                                        title="Yellow Sleeveless Mini Raw Dress" class="name">
                                        Yellow Sleeveless Mini Raw Dress </a>
                                </h3>
                                <p class="c-price">
                                    2.496.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/orange-sleeveless-midi-silk-dress-pd3670"
                                    title="Orange Sleeveless Midi Silk Dress" class="c-image">
                                    <img src="images/products/2022/large/_dsc5174say-1652767683.jpg"
                                        alt="Orange Sleeveless Midi Silk Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/orange-sleeveless-midi-silk-dress-pd3670"
                                        title="Orange Sleeveless Midi Silk Dress" class="name">
                                        Orange Sleeveless Midi Silk Dress </a>
                                </h3>
                                <p class="c-price">
                                    2.647.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/dark-violet-off-shoulder-midi-silk-dress-pd3650"
                                    title="Dark Violet Off-shoulder Midi Silk Dress" class="c-image">
                                    <img src="images/products/2022/large/_dsc4356-1say-1651110459.jpg"
                                        alt="Dark Violet Off-shoulder Midi Silk Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/dark-violet-off-shoulder-midi-silk-dress-pd3650"
                                        title="Dark Violet Off-shoulder Midi Silk Dress" class="name">
                                        Dark Violet Off-shoulder Midi Silk Dress </a>
                                </h3>
                                <p class="c-price">
                                    2.451.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/red-butterfly-midi-taffeta-dress-pd3608"
                                    title="Red Butterfly Midi Taffeta Dress" class="c-image">
                                    <img src="images/products/2022/large/vnq07128say-1650099506.jpg"
                                        alt="Red Butterfly Midi Taffeta Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/red-butterfly-midi-taffeta-dress-pd3608"
                                        title="Red Butterfly Midi Taffeta Dress" class="name">
                                        Red Butterfly Midi Taffeta Dress </a>
                                </h3>
                                <p class="c-price">
                                    2.942.000 VND </p>
                            </div>

                            <div class="clearfix"></div>
                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/dark-green-floral-mini-brocade-dress-pd3660"
                                    title="Dark Green Floral Mini Brocade Dress" class="c-image">
                                    <img src="images/products/2022/large/vnq01661say-1651113066.jpg"
                                        alt="Dark Green Floral Mini Brocade Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/dark-green-floral-mini-brocade-dress-pd3660"
                                        title="Dark Green Floral Mini Brocade Dress" class="name">
                                        Dark Green Floral Mini Brocade Dress </a>
                                </h3>
                                <p class="c-price">
                                    2.647.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/white-floral-midi-lace-dres-pd3765" title="White Floral Midi Lace Dres"
                                    class="c-image">
                                    <img src="images/products/2022/large/sbt_5554-1654829569.jpg"
                                        alt="White Floral Midi Lace Dres" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/white-floral-midi-lace-dres-pd3765" title="White Floral Midi Lace Dres"
                                        class="name">
                                        White Floral Midi Lace Dres </a>
                                </h3>
                                <p class="c-price">
                                    5.396.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/nancy-dress-with-bow-pd2626" title="Nancy Dress With Bow" class="c-image">
                                    <img src="images/products/2022/large/nancy-black-dress-with-bow-3-1644888899.jpg"
                                        alt="Nancy Dress With Bow" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/nancy-dress-with-bow-pd2626" title="Nancy Dress With Bow" class="name">
                                        Nancy Dress With Bow </a>
                                </h3>
                                <p class="c-price">
                                    3.432.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/green-sleeveless-midi-dress-1-pd3908" title="Green Sleeveless Midi Dress"
                                    class="c-image">
                                    <img src="images/products/2022/large/ali17885-1659773581.jpg"
                                        alt="Green Sleeveless Midi Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/green-sleeveless-midi-dress-1-pd3908" title="Green Sleeveless Midi Dress"
                                        class="name">
                                        Green Sleeveless Midi Dress </a>
                                </h3>
                                <p class="c-price">
                                    2.496.000 VND </p>
                            </div>

                            <div class="clearfix"></div>
                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/chocolate-brown-puff-sleeves-midi-linen-dress-pd3813"
                                    title="Chocolate-brown Puff-sleeves Midi Linen Dress" class="c-image">
                                    <img src="images/products/2022/large/140sixdo-2022-am-foto-kiengcan-team_-1656316390.jpg"
                                        alt="Chocolate-brown Puff-sleeves Midi Linen Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/chocolate-brown-puff-sleeves-midi-linen-dress-pd3813"
                                        title="Chocolate-brown Puff-sleeves Midi Linen Dress" class="name">
                                        Chocolate-brown Puff-sleeves Midi Linen Dress </a>
                                </h3>
                                <p class="c-price">
                                    3.996.000 VND </p>
                            </div>

                            <!--                        <div class="col-lg-3 col-md-6 col-xs-6 c-item">-->
                            <div class=" c-item swiper-slide">
                                <a href="/white-midi-brocade-wraparound-dress-pd3513"
                                    title="White Midi Brocade Wraparound Dress" class="c-image">
                                    <img src="images/products/2022/large/0081sixdo_kiengcanteam-1645157532.jpeg"
                                        alt="White Midi Brocade Wraparound Dress" class="img-fluid">
                                </a>
                                <h3 class="c-name">
                                    <a href="/white-midi-brocade-wraparound-dress-pd3513"
                                        title="White Midi Brocade Wraparound Dress" class="name">
                                        White Midi Brocade Wraparound Dress </a>
                                </h3>
                                <p class="c-price">
                                    3.432.000 VND </p>
                            </div>


                        </div>
                    </div>

                    <!--            <div class="swiper-pagination"></div>-->
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev "></div>
                </div>

            </div>

            <!-- List product viewed -->
            <div class="container-fluid list-product-same list-product-viewed hide">
                <div class="header-product">
                    <h2>Các sản phẩm đã xem</h2>
                </div>
                <div class="body-product">
                    <div class="row">
                        <div class="col-md-3 item-product">
                            <a href="/light-purple-floral-midi-voile-dress-pd3913">
                                <div class="img_size">
                                    <img src="images/products/2022/large/sbt_0384-1661156718.jpg" />
                                </div>
                                <div class="link-product-detail">
                                    <h4>Light Purple Floral Midi Voile Dress</h4>
                                    <span>2.496.000 đ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    dataLayer.push({
        'event': 'viewitem',
        'ecommerce': {
            'detail': {
                'actionField': {
                    'list': 'Váy Đầm'
                },
                'products': [{
                    'name': 'Light Purple Floral Midi Voile Dress',
                    'id': 3913,
                    'price': 2496000,
                    'brand': 'SixDo',
                    'category': 'Váy Đầm',
                    'variant': 'Tím nhạt'
                }]
            }
        }
    });
    </script>

    <div class="pswp hide" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .btn-click {
        border: none;
        background: none;
        float: left;
        margin-bottom: 10px;
        text-decoration: underline;
    }
    </style>



    </div>

</main><!-- END: #main -->

<div class="clearfix"></div>
@endsection