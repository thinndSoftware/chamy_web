@extends('client.layouts.index')

@section('content')
    <div id="preloder" style="display: none;">
        <div class="loader" style="display: none;"></div>
    </div>

    @include('client.layouts.herohome')

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    {{-- start category --}}
                    @foreach ($categories as $category)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset($category->image_path) }}">
                                <h5><a
                                        href="{{ route('product', ['id' => $category->category_id]) }}">{{ $category->category_name }}</a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                    {{-- end category --}}
                </div>
            </div>
        </div>
    </section>

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Nổi Bật</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            @foreach ($categories as $indexCategory => $categoryitem)
                                <li data-filter=".{{ $categoryitem->category_name }}">
                                    {{ $categoryitem->category_name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($categories as $indexCategoryProduct => $valueCategoryProduct)
                    @foreach ($valueCategoryProduct->products->take(8) as $productItemtab)
                        <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $valueCategoryProduct->category_name }} fresh-meat">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="{{ asset($productItemtab->product_vartar_path) }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a
                                            href="{{ route('shop-details', ['id' => $productItemtab->id]) }}">{{ $productItemtab->name }}</a>
                                    </h6>
                                    <h5>{{ number_format($productItemtab->discount) }} VND</h5>
                                    <p  style="text-decoration:line-through;">{{ number_format($productItemtab->price) }} VND</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <div class="banner">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i <= 1; $i++)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset($slidersExtras[$i]->image_path) }}"
                                alt="{{ $slidersExtras[$i]->image_name }}">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Mới</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($productsRecommend as $keyRecommend => $valueRecommend)
                                    @if ($keyRecommend % 3 == 0 && $keyRecommend != 0)
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="{{ route('shop-details', ['id' => $valueRecommend->id]) }}"
                                    class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset($valueRecommend->product_vartar_path) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $valueRecommend->name }}</h6>
                                        <span>{{ number_format($valueRecommend->discount) }} VND</span>
                                        <p style="text-decoration:line-through;">
                                            {{ number_format($valueRecommend->price) }}</p>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('shop-details', ['id' => $valueRecommend->id]) }}"
                                    class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset($valueRecommend->product_vartar_path) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $valueRecommend->name }}</h6>
                                        <span>{{ number_format($valueRecommend->discount) }} VND</span>
                                        <p style="text-decoration:line-through;">
                                            {{ number_format($valueRecommend->price) }}</p>
                                    </div>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Đánh Giá Cao</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($productsAppreciate as $keyAppreciate => $valueAppreci)
                                    @if ($keyAppreciate % 3 == 0 && $keyAppreciate != 0)
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="{{ route('shop-details', ['id' => $valueAppreci->id]) }}"
                                    class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset($valueAppreci->product_vartar_path) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $valueAppreci->name }}</h6>
                                        <span>{{ number_format($valueAppreci->discount) }} VND</span>
                                        <p style="text-decoration:line-through;">
                                            {{ number_format($valueAppreci->price) }}</p>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('shop-details', ['id' => $valueAppreci->id]) }}"
                                    class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset($valueAppreci->product_vartar_path) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $valueAppreci->name }}</h6>
                                        <span>{{ number_format($valueAppreci->discount) }} VND</span>
                                        <p style="text-decoration:line-through;">
                                            {{ number_format($valueAppreci->price) }}</p>
                                    </div>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Bán Chạy Nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($productsRecommend as $keyRecommend => $valueRecommend)
                                    @if ($keyRecommend % 3 == 0 && $keyRecommend != 0)
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="{{ route('shop-details', ['id' => $valueRecommend->id]) }}"
                                    class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset($valueRecommend->product_vartar_path) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $valueRecommend->name }}</h6>
                                        <span>{{ number_format($valueRecommend->discount) }} VND</span>
                                        <p style="text-decoration:line-through;">
                                            {{ number_format($valueRecommend->price) }}</p>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('shop-details', ['id' => $valueRecommend->id]) }}"
                                    class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset($valueRecommend->product_vartar_path) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $valueRecommend->name }}</h6>
                                        <span>{{ number_format($valueRecommend->discount) }} VND</span>
                                            {{ number_format($valueRecommend->price) }}</p>
                                    </div>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Trang Tin Tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogsNews as $blogNew)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ asset($blogNew->image_path) }}" alt="{{ $blogNew->image_name }}"
                                    width="100%">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i>{{ $blogNew->created_at->toDateString() }}</li>

                                </ul>
                                <h5><a href="{{ route('blog_details',['id'=>$blogNew->id]) }}">{{ $blogNew->name }}</a></h5>
                                <p>{{ $blogNew->slogan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
