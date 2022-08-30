<section class="hero hero-normal">
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
                                    <a href="{{ route('product',['id'=>$category->category_id]) }}">{{ $category->category_name }}</a>
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
                            <form action="{{ route('search-product') }}" method="post">
                                @csrf
                                <div class="hero__search__categories">
                                    Tìm kiếm
                                </div>
                                <input type="text" placeholder="Bạn cần tìm về Điện Thoại?" name="keywords_submit">
                                <button type="submit" class="site-btn" name="search_product">Tìm</button>
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
                </div>
            </div>
        </div>
    </section>
