@extends('client.layouts.index')
@section('content')
    @include('client.layouts.heropage')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('client/img/breadcrum23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Tin Tức</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('home') }}">Trang Chủ</a>
                            <span>Tin tức</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h4>Tin Mới</h4>
                            <div class="blog__sidebar__recent">
                                @foreach ($blogsNews as $blogNew)
                                    <a href="{{ route('blog_details', ['id' => $blogNew->id]) }}"
                                        class="blog__sidebar__recent__item">
                                        <div class="blog__sidebar__recent__item__pic">
                                            <img src="{{ asset($blogNew->image_path) }}" alt="" width="80px">
                                        </div>
                                        <div class="blog__sidebar__recent__item__text">
                                            <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                            <span>MAR 05, 2019</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->image_name }}">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i>{{ $blog->created_at->toDateString() }}</li>
                                        </ul>
                                        <h5><a href="{{ route('blog_details', ['id' => $blog->id]) }}">{{ $blog->name }}</a>
                                        </h5>
                                        <p>
                                            {{ $blog->slogan }}
                                        </p>
                                        <a href="{{ route('blog_details', ['id' => $blog->id]) }}" class="blog__btn">Xem Ngay
                                            <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
