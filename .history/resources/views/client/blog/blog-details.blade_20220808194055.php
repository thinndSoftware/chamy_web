@extends('client.layouts.index')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('client/img/breadcrum23.jpg') }}">
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
                                @foreach ($blogsNews as $blogNew)
                                    <a href="{{ route('blog_details', ['id' => $blogNew->id]) }}"
                                        class="blog__sidebar__recent__item">
                                        <div class="blog__sidebar__recent__item__pic">
                                            <img src="{{ asset($blogNew->image_path) }}" alt="{{ $blogNew->image_name }}"
                                                width="80px">
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
                    {!! $blogItems->content !!}
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
                @foreach ($blogsRecomend as $blogsRecomendItem)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ asset($blogsRecomendItem->image_path) }}"
                                    alt="{{ $blogsRecomendItem->image_name }}">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i>
                                        {{ $blogsRecomendItem->created_at->toDateString() }}
                                    </li>
                                </ul>
                                <h5>
                                    <a href="{{ route('blog_details',['id'=>$blogsRecomendItem->id]) }}">
                                        {{ $blogsRecomendItem->name }}
                                    </a>
                                </h5>
                                <p>
                                    {{ $blogsRecomendItem->slogan }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->
@endsection
