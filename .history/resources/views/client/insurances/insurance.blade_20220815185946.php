@extends('client.layouts.index')
@section('content')
    <!-- Breadcrumb Section Begin -->
    @include('client.layouts.heropage')

    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('client/img/breadcrum23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Bảo hành</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Trang Chủ</a>
                            <span>Bảo hành</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Điện Thoại</h4>
                        <p>{{ getConfigValueFromSettingTable('contact_phone') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa chỉ</h4>
                        <p>{{ getConfigValueFromSettingTable('addess_shop') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Giờ Hoạt Động</h4>
                        <p>{{ getConfigValueFromSettingTable('time-online') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>{{ getConfigValueFromSettingTable('contact_email') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->

    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Tra cứu thông tin bảo hành</h2>
                    </div>
                </div>
            </div>
            <form action="{{ route('insurance.search') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Mã bảo hành" name="insurance_id"
                            class="@error('name') is-invalid @enderror">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4">
                        <input type="submit" value="Tra cứu" class="site-btn text-white w-10" name="submit">
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                </div>
            </form>
            @if (!empty($insurance))
            <div class="card">
                <h5 class="card-header">Bảo hành</h5>
                <div class="card-body">
                    <h5 class="card-title">Tên sản phẩm: {{ $insurance->product_name }}</h5>
                    <p class="card-text">Tên khách hàng: {{ $insurance->name }}</p>
                    <p class="card-text">Địa chỉ: Hà Nội {{ $insurance->address }}</p>
                    <p class="card-text">Số điện thoại: {{ $insurance->phone }}</p>
                    <p class="card-text">Mã Hóa Đơn: {{ $insurance->order_id }}</p>
                    <p class="card-text">Mã Sản Phẩm: {{ $insurance->product_id }}</p>
                    <p class="card-text">Tình trạng lỗi: {{ $insurance->status }}</p>
                    <p class="card-text">Ngày bảo hành: {{ $insurance->updated_at }}</p>
                    <p class="card-text">Ghi chú: {{ $insurance->note }}</p>
                </div>
            </div>
            @endif
            </div>
    </div>
    <!-- Contact Form End -->
@endsection
