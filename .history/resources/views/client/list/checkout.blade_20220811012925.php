@extends('client.layouts.index')
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('client/img/breadcrum23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh Toán</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang Chủ</a>
                            <a href="./index.html">Danh Mục</a>
                            <span>Thanh Toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">

            </div>
            <div class="checkout__form">
                <h4>Chi Tiết Thanh Toán</h4>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="checkout__input">
                                        <p>Họ tên Tên<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span></p>
                                <input type="text" placeholder="Xã phường" class="checkout__input__add">
                                <input type="text" placeholder="Căn hộ, dãy phòng, căn hộ, v.v. (tùy chọn)">
                            </div>
                            <div class="checkout__input">
                                <p>Thành Phố<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số Điện Thoại<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Chú Thích<span>*</span></p>
                                <input type="text"
                                    placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt khi giao hàng.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn Hàng Của Bạn</h4>
                                <div class="checkout__order__products">Sản Phẩm <span>Thành Tiền</span></div>
                                <ul>
                                    @foreach (Cart::content() as $content)
                                        <li>{{ $content->name }}<span>{{ number_format($content->price) }} VND</span></li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Thành Tiền <span>{{ Cart::subtotal() }}</span></div>
                                <div class="checkout__order__total">Phải Trả <span>{{ Cart::subtotal() }}</span></div>
                                <button type="submit" class="site-btn">Đặt Hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
