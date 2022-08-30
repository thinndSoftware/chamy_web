@extends('client.layouts.index')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('client/img/breadcrum23.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Tin Tức về Sản Phẩm</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ route('home') }}">Trang Chủ</a>
                        <a href="{{ route('blog') }}">Tin tức</a>
                        <span>Tin tức về sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 order-md-1 order-2">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__item">
                        <h4>Tin Mới</h4>
                        <div class="blog__sidebar__recent">
                            @foreach ($blogsNews as $blogNew )
                            <a href="{{ route('blog_details',['id'=>$blogNew->id]) }}" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="{{ asset($blogNew->image_path)}}" alt="{{ $blogNew->image_name }}" width="80px">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>{{ $blogNew->name }}</h6>
                                    <span>{{ $blogNew->created_at->toDateString() }}</span>
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="blog__details__text">
                    <img src="{{ asset('client/img/blog/details/details-pic.jpg')}}" alt="">
                    <p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                        dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit
                        aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur
                        sed, convallis at tellus. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.
                        Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis
                        quis ac lectus. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada
                        feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                    <h3>The corner window forms a place within a place that is a resting point within the large
                        space.</h3>
                    <p>The study area is located at the back with a view of the vast nature. Together with the other
                        buildings, a congruent story has been managed in which the whole has a reinforcing effect on
                        the components. The use of materials seeks connection to the main house, the adjacent
                        stables</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<!-- Related Blog Section Begin -->
<section class="related-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related-blog-title">
                    <h2>Bài Viết Liên Quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('client/img/blog/blog-1.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('client/img/blog/blog-2.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('client/img/blog/blog-3.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Blog Section End -->
@endsection
