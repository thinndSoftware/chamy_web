@extends('client.layouts.index')
@section('content')
<main id="main" class="row-content c-box_root main-content" style="">

    <div class="container row-item">

        <div class=" c-box_album">
            <h1 class="c-title_module hidden-lg hidden-md">
                Bộ sưu tập </h1>
            <h2 class="hide">
                Bộ sưu tập </h2>
            <div class="row c-list_album">
                @foreach($products as $pro)
                <div class="col-md-4 col-xs-12 c-col_item">
                    <div class="c-item">
                        <a href="/yes-to-love:-merry-christmas-amp;-love-u-always❣-cld31"
                            title="YES TO LOVE!: MERRY CHRISTMAS &amp; LOVE U ALWAYS❣" class="c-image">
                            <img src="{{asset('client/img/collection/2021/medium/doc-tk-copy_1629286514.jpg')}}" class="img-responsive"
                                alt="YES TO LOVE!: MERRY CHRISTMAS &amp; LOVE U ALWAYS❣" />
                            <h3 class="hide">YES TO LOVE!: MERRY CHRISTMAS &amp; LOVE U ALWAYS❣</h3>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row c-list_album c-box_loadMore"></div>

            <div class=" show_btn">
                <div class="show_more" id="loading" data-pagecurrent="1" data-nextpage="2" limit="9" data-cat=""
                    data-end="1" onclick="loadMore()">
                    view more +
                </div>
                <!--        <a class="show_more" href="#show_div">-->
                <!-- +</a>-->
            </div>
        </div>
    </div>

</main><!-- END: #main -->

@endsection