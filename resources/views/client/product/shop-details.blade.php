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
                            <a itemprop="url" title="Light Purple Floral Midi Voile Dress" itemprop="title">{{ $productDetail->name }}</a>
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
                                    data-thumb="{{ asset($productDetail->product_vartar_path) }}">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="{{ asset($productDetail->product_vartar_path) }}"
                                        itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="{{ asset($productDetail->product_vartar_path) }}"
                                            alt="Image description" />
                                    </a>
                                </div>
                                @foreach ($productDetail->images as $productImageDetail)
                                <div class="c-item img-watch134" data-thumb="{{ asset($productImageDetail->image_detail_link) }}">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="{{ asset($productImageDetail->image_detail_link) }}"
                                        data-thumb="{{ asset($productImageDetail->image_detail_link) }}" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="{{ asset($productImageDetail->image_detail_link) }}"
                                            alt="Image description" />
                                    </a>
                                </div>
                                @endforeach
                            </div>


                            <div class="main-img hide" id="product-image-gallery1">
                                @foreach ($productDetail->images as $productImageDetail)
                                <div class="c-item  img-watch134">
                                    <a id="Zoomer" class="MagicZoomPlus"
                                        href="{{ asset($productImageDetail->image_detail_link) }}"
                                        data-thumb="{{ asset($productImageDetail->image_detail_link) }}" itemprop="contentUrl"
                                        data-options="zoomPosition: inner; zoomWidth:450px; zoomHeight:450px; rightClick: true;hint: on;zoomCaption: off;expand: true;">
                                        <img class="img-fluid" src="{{ asset($productImageDetail->image_detail_link) }}"
                                            alt="Image description" />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="thumb-pro1 hide hidden-xs">
                                <ul id="thumb-pro1" class="owl-loaded owl-drag owl-carousel">
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
                                {{ $productDetail->name }} </h2>
                                <p class="c-code">MSP:
                                    66220608801DI1817 </p>
                                <p class="price price-product">
                                    <span data-price="2496000" id="price-no-discount" class="price-no-discount ">
                                    {{ number_format($productDetail->discount) }} VNĐ </span>
                                    <p style="text-decoration:line-through;">{{ number_format($productDetail->price) }} VND</p>

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
                                <form action="{{ route('save_cart') }}" method="post">
                                @csrf
                                <div class="buy">
                                    <div class="toggle-quantity">
                                        <button id="decrement"><i class="fa fa-minus"></i></button>
                                        <input id="quantity" type="text" value="1" disabled>
                                        <button id="increment"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <button data-id="3913"  type="submit" class="c-btn btn-add_cart add-cart detail-add-cart "
                                        title="Thêm vào giỏ hàng" href="javascript:void (0)">
                                        Thêm vào giỏ hàng </button>

                                    <!-- <a href="javascript:void(0)" title="Yêu thích" class="c-btn c-btn_heart pull-right "
                                        onclick="save_post(3913)">
                                        <i class="fa fa-heart-o"></i>
                                        <i class="fa fa-heart"></i>
                                    </a> -->

                                </div>
                                </form>
                                <div class="c-box_detail">
                                    <a href="#description" data-toggle="collapse" class="c-call_detail--box"
                                        title="Chi tiết">
                                        Chi tiết <i class="fa fa-minus"></i>
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <div id="description" class="collapse c-content_detail in">
                                        {!! $productDetail->content !!}
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
                        @foreach ($productsRecommend as $productsRecommendItem)
                            <div class=" c-item swiper-slide">
                                <a href="{{ route('shop-details', ['id' => $productsRecommendItem->id]) }}"
                                    title="{{ $productsRecommendItem->name }}" class="c-image">
                                    <img src="{{ asset($productsRecommendItem->product_vartar_path) }}"
                                        alt="{{ $productsRecommendItem->name }}" class="img-fluid-new">
                                </a>
                                <h3 class="c-name">
                                    <a href="{{ route('shop-details', ['id' => $productsRecommendItem->id]) }}"
                                        title="{{ $productsRecommendItem->name }}" class="name">
                                        {{ $productsRecommendItem->name }} </a>
                                </h3>
                                <p class="c-price">
                                {{ $productsRecommendItem->discount }}VNĐ </p>
                                <p style="text-decoration:line-through;">{{ $productsRecommendItem->price }}</p>
                            </div>
                            @endforeach
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