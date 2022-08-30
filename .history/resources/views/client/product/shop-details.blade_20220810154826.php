@extends('client.layouts.index')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('client/img/breadcrum23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chi Tiết Sản Phẩm</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang Chủ</a>
                            <a href="{{ route('product',['id' =>$productDetail->category_id]) }}">Danh Mục</a>
                            <span>Chi Tiết Sản Phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ asset($productDetail->product_vartar_path) }}"
                                alt="{{ $productDetail->product_avatar }}">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach ($productDetail->images as $productImageDetail)
                                <img data-imgbigurl="{{ asset($productImageDetail->image_detail_link) }}"
                                    src="{{ asset($productImageDetail->image_detail_link) }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $productDetail->name }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">{{ number_format($productDetail->discount) }} VND</div>
                        <p  style="text-decoration:line-through;">{{ number_format($productDetail->price) }} VND</p>
                        <p>
                            {{ $productDetail->category->category_name }}
                        </p>
                        <form action="#" method="post">
                            <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="primary-btn">ADD TO CARD</input>
                        </form>
                        <ul>
                            <li><b>Trạng thái</b> <span>Trong kho</span></li>
                            <li><b>Vận chuyển</b> <span>Giao hàng nhanh<samp> Miễn phí</samp></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông Tin Sản Phẩm</a>
                            </li>
                        </ul>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Thông Tin</h6>
                                {!! $productDetail->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Có Thể Bạn Cũng Thích</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($productsRecommend as $productsRecommendItem)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset($productsRecommendItem->product_vartar_path) }}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('shop-details',['id'=>$productsRecommendItem->id]) }}">{{ $productsRecommendItem->name }}</a></h6>
                                <h5>{{ $productsRecommendItem->discount }}</h5>
                                <p  style="text-decoration:line-through;">{{ $productsRecommendItem->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
@endsection
