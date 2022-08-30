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
                            <li><a href="{{ route('category.product',['id'=>1]) }}">test</a></li>
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
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tìm kiếm
                                </div>
                                <input type="text" placeholder="Bạn cần tìm về Điện Thoại?">
                                <button type="submit" class="site-btn">Tìm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>{{ getConfigValueFromSettingTable('contact_phone')}}</h5>
                                <span>Hỗ Trợ 24/7</span>
                            </div>
                        </div>
                    </div>
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
