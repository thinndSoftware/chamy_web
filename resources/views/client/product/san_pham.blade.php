@extends('client.layouts.index')
@section('content')


<!-- banner -->
<div class="row-content pos_contents_top">
    <div class='block_banners banners_0 blocks_banner blocks0 block'>
        <div id="block-21" class="block-banner block-banner-products" style="float:none;">
            <div class="row-">
                <div id="banner-17" class=" banner_products col-lg- 12 col-md- 12 ">
                    <div class="content c-content_detail">
                    </div>
                    <div class="img">
                        <a class="thumb" href="/uu-dai-p36">
                            <img class="img-responsive" alt="Banner Top - Trang sản phẩm"
                                src="{{asset('client/img/banners/original/ngang-nho-1658296369.jpg')}} " />
                        </a>
                    </div>
                </div>
            </div>

            <!--    </div>-->
            <!-- /.container-->
        </div>
        <!--end: #block-21-->
    </div>
</div>
<!-- @include('client.layouts.heropage') -->
<div class="container">
    <div class="c-box_products ">
        <h1 class="c-title_block hide">
            Sản phẩm </h1>
        <h2 class="c-title_block hide">
            Sản phẩm </h2>
        <div class="main_products">
            <div class="menu hidden-sm hidden-xs">
                <p class="title"> category</p>
                <!--	CONTENT -->
                <ul class='c-product_menu  product_menu_default'>
                @foreach ($categories as $indexCategory => $categoryitem)
                    <li class='c-item_parent  level_0' data-filter=".product{{ $categoryitem->category_id }}" id='pr_20'><a href="{{ route('product', ['id' => $categoryitem->category_id]) }}" class='item 0'
                            title='{{ $categoryitem->category_name }}'> {{ $categoryitem->category_name }}</a> <span
                            class='show_cat offcanvas-menu-toggler collapsed' href='#{{ $categoryitem->category_id }}'
                            data-toggle='collapse'></span>
                        @if($categoryitem->categoryChildrent)    
                        <ul id="{{ $categoryitem->category_id }}" class=" c-box_child collapse   ">
                        @foreach ($categoryitem->categoryChildrent as $child)
                        <li class='c-item_child   level_1 child_20'>
                                <div class='c-sub'> <a href="{{ route('product', ['id' => $child->category_id]) }}" class='sub_item 1' title='Quần nữ'> {{$child->category_name}}</a>
                                </div>
                                @endforeach
                        </ul>
                        @endif
                    </li>
                @endforeach
                </ul>
                <!--	end CONTENT -->

            </div>
            <div class="list">

                <div class="c-box_head ">
                    <h2 class="c-title_block">
                        Shop <span>(515 Items)</span>
                    </h2>

                    <div class="c-box_sort">
                        <a class="c-btn_sort dropdown-toggle" type="button" data-toggle="dropdown" title="Sort"
                            href="javascript:void(0)">
                            <img src="{{asset('client/img/ic-list.png')}}" alt="sort" class="img-responsive">
                            &nbsp;Sort </a>
                        <ul class="dropdown dropdown-menu dropdown-sort">
                            <li class="">
                                <a href="/san-pham?sort_by=3" title="Giá tăng dần">Giá tăng dần</a>
                            </li>
                            <li class="">
                                <a href="/san-pham?sort_by=4" title="Giá giảm dần">Giá giảm dần</a>
                            </li>
                            <li class="">
                                <a href="/san-pham?sort_by=2" title="Mới nhất">Mới nhất</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row c-box_list ">

                     @foreach ($productsAppreciate as $productItemtab)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 c-item c-item1">
                        <a href="{{ route('shop-details', ['id' => $productItemtab->id]) }}" title="Dark Red Box Pleated Midi Skirt"
                            class="c-image">
                            <img src="{{ asset($productItemtab->product_vartar_path) }}"
                                alt="Dark Red Box Pleated Midi Skirt" class="img-fluid img-first c-img_3894">
                            <img src="{{ asset($productItemtab->product_vartar_path) }}"
                                alt="Sixdo Dark Red Box Pleated Midi Skirt" class="img-fluid img-sec">
                        </a>
                        <div class="price">
                            <p class="c-price">
                                <span class="c-real_price">
                                {{ number_format($productItemtab->discount) }} VND </span>
                                <p style="text-decoration:line-through;">{{ number_format($productItemtab->price) }}
                            VND</p>

                            </p>
                            <a class="c-btn_like c-like3894 " href="javascript:void(0);" title="Yêu thích"
                                data-id="3894">
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart"></i>
                            </a>
                        </div>

                        <h3 class="c-name">
                            <a href="{{ route('shop-details', ['id' => $productItemtab->id]) }}" title="Dark Red Box Pleated Midi Skirt"
                                class="name">
                                {{ $productItemtab->name }} </a>
                        </h3>
                        <p class="c-box_color">
                            <a class="c-color  active c-default" href="javascript:void(0)" data-action="1"
                                data-rel="{{ asset($productItemtab->product_vartar_path) }}" title="Đỏ Đậm"
                                style="background:  #C00000;  "></a>
                        </p>

                    </div>
                    <div class="clearfix  hidden-xs hidden-sm"></div>
                    @endforeach
                </div>
                <div class='pagination justify-content-end'><a class='current' title='Page 1'>1</a><a rel='nofollow'
                        class='other-page' title='Page 2' href='/san-pham/page-2'>2</a><a rel='nofollow'
                        class='other-page' title='Page 3' href='/san-pham/page-3'>3</a><a rel='nofollow'
                        class='next-page' title='Next page' href='/san-pham/page-2'><i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a><a title='Last page' href='/san-pham/page-22'>Trang cuối</a>
                </div>
                <div class="row c---box_list c-box_loadMore"></div>
                <div id="e-loader" class="c-loader hide">
                    <img src="https://sixdo.vn/images/banners/original/ngang-nho-1658296369.jpg" alt="loader" class="img-responsive">
                </div>
                <div id="loading" data-pagecurrent="1" data-nextpage="2" limit="24" data-cat="" data-order="0"
                    data-end="1" class=""></div>
            </div>
        </div>
    </div>
</div>

@endsection