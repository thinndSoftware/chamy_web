@if ($sliderMain)
    <section class="hero">
    @else
        <section class="hero hero-normal">
@endif
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

                        {{-- @foreach ($category->categoryChildrent as $categoryChildrent) --}}
                        {{-- Thêm category cấp nhỏ hơn sau này --}}
                        {{-- @endforeach --}}
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            @yield('banner')
        </div>
    </div>
</div>
</section>
