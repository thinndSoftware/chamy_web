@extends('client.layouts.index')
@section('content')
<main id="main" class="row-content c-box_root main-content" style="">

    <div class="container row-item">


        <h1 class="c-title_module hidden-lg hidden-md">YES TO LOVE!: MERRY CHRISTMAS &amp; LOVE U ALWAYS❣</h1>
        <h2 class="hide">YES TO LOVE!: MERRY CHRISTMAS &amp; LOVE U ALWAYS❣</h2>
        <div class="c-content_detail ">
            <p><img alt="" src="upload_images/images/2022/01/03/layout-01-01.png" style="width: 1800px;" /></p>
        </div>
        <div class="c-box_products ">
            <div class="row c-box_list">
                @foreach($productList as $pro)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 c-item c-item1">
                    <a href="{{ route('shop-details', ['id' => $pro->id]) }}" title="Red Long Sleeves Tweed Vest" class="c-image">
                        <img src="{{ asset($pro->product_vartar_path) }}" alt="Red Long Sleeves Tweed Vest"
                            class="img-fluid img-first c-img_3444">
                    </a>
                    <div class="price">
                        <p class="c-price">
                            <span class="c-real_price">
                            {{ number_format($pro->discount) }} VND </span>
                            <p style="text-decoration:line-through;">{{ number_format($pro->price) }} VND</p>


                        </p>
                        <a class="c-btn_like c-like3444 " href="javascript:void(0);" title="Yêu thích" data-id="3444">
                            <i class="fa fa-heart-o"></i>
                            <i class="fa fa-heart"></i>
                        </a>
                    </div>

                    <h3 class="c-name">
                        <a href="{{ route('shop-details', ['id' => $pro->id]) }}" title="Red Long Sleeves Tweed Vest" class="name">
                        {{ $pro->name }}</a>
                    </h3>
                    <p class="c-box_color">
                    </p>

                </div>
                @endforeach
               
                <div class="clearfix  hidden-xs hidden-sm"></div>
            </div>
        </div>
    </div>

</main><!-- END: #main -->
<!-- Related Blog Section End -->
@endsection