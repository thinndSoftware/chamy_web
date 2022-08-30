<div class="row-content pos-top">
    <div class='block_banners banners_0 blocks_banner c-banner_showpc hidden-xs blocks0 block'>
        <div id="block-16" class="block-banner-home-new block-banner block-banner-fullpage ">
            <div id="" class="banner-home-new owl-carousel owl-theme">
                @foreach ( $slidersExtras as $sl)
                <div class="item">
                    <a title="Banner 2" href="/san-pham" target="_blank">
                        <img src="{{ asset($sl->image_path)}}" alt="Banner 2"
                            class="img-responsive">
                    </a>
                </div>
                @endforeach
            </div>
            
        </div>
        <!--end: #block-16-->
    </div>
    <div class='block_banners banners_1 blocks_banner c-banner_mshow hidden-lg hidden-md hidden-sm blocks1 block'>
        <div id="block-17" class="block-banner-home-new block-banner block-banner-fullpage ">
            <div id="" class="banner-home-new owl-carousel owl-theme">
                <div class="item">
                    <a title="Banner 2" href="/san-pham" target="_blank">
                        <img src="{{ asset('client/img/banners/mresized/doc-copy-1655273384.jpg')}}" alt="Banner 2"
                            class="img-responsive">
                    </a>
                </div>
                <div class="item">
                    <a title="Banner Home Mobile 2" href="/fashion-show-sixdo-for-all-p47" target="_blank">
                        <img src="{{ asset('client/img/banners/mresized/doc--1654823839.jpg')}}"
                            alt="Banner Home Mobile 2" class="img-responsive">
                    </a>
                </div>
                <div class="item">
                    <a title="Banner Home Mobile 1" href="/uu-dai-p36" target="_blank">
                        <img src="{{ asset('client/img/banners/mresized/doc-web--1658296409.jpg')}}"
                            alt="Banner Home Mobile 1" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
        <!--end: #block-17-->
    </div>
</div>