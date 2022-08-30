<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Các mẫu Điện Thoại</span>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="#">{{ $category->category_name }}</a>
                                </li>

                                {{-- @foreach ($category->categoryChildrent as $categoryChildrent ) --}}
                                    {{-- Thêm category cấp nhỏ hơn sau này --}}
                                {{-- @endforeach --}}
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    @yield('banner')
                    <div class="hero__item set-bg" data-setbg="{{ asset($sliderMain->image_path) }}">
                        <div class="hero__text">
                            <span>MÀU MỚI ĐẶC BIỆT</span>
                            <h2>Iphone 13 <br />Xanh rêu lục bảo</h2>
                            <p>Màu mới đột phá phong cách</p>
                            <a href="#" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
