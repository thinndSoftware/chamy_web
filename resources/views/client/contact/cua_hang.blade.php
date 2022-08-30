@extends('client.layouts.index')
@section('content')
<main id="main" class="row-content c-box_root main-content" style="">

    <div class="container row-item">
        <div class="row">
            <div class="main-column row-content col-sm-12 col-xs-12">
                <div class="row-content pos_contents_top">
                    <div class='block_banners banners_0 blocks_banner c-banner_store blocks0 block'>
                        <div id="block-20" class="banner-full container-fuild block-banner block-banner-default"
                            style="float:none;">
                            <div id="banner-16" class="item">
                                <a target="_blank" rel="nofollow" href="" title='Banner Top Trang Store'>
                                    <img class="img-responsive" alt="Banner Top Trang Store"
                                        src="https://sixdo.vn/images/banners/original/7akthxy1-1603101178.png" />
                                </a>
                            </div>
                        </div>
                        <!--end: #block-20-->
                    </div>
                </div> <!-- END: .pos_contents_top -->
                <style>
                .mapContainer,
                #myMap {
                    position: relative;
                    width: 100%;
                    height: 400px;
                }

                .customNavBar {
                    position: absolute;
                    top: 10px;
                    left: 10px;
                }
                </style>




                <!-- Breadcrumb -->


                <div class="c-box_store">
                    <h1 class="c-title_module">store</h1>
                    <h2 class="c-title_module hide">store</h2>
                    <p class="c-summary">
                        SIXDO hiện đã có mặt 50 showroom trên toàn quốc. Giờ hoạt động: 8:00 AM - 22:00 PM mỗi ngày, trừ
                        các dịp lễ Tết (lịch hoạt động trong các dịp đặc biệt sẽ có thông báo riêng). Các showroom trong
                        TTTM hoạt động theo giờ của TTTM. </p>

                    <div class="block block-news block-news-default">
                        <div class="block-content">
                            <div class="row c-box_map">
                                <div class="col-md-8 c-col_map">
                                    <div class="mapContainer">
                                        <div style="text-align: center; margin: 10px auto;">
                                            <div id="myMap"
                                                style="position:relative; width:100%; height:750px; border: 1px solid #fff;">
                                            </div>
                                        </div>
                                        <script type='text/javascript'>
                                        function GetMap() {
                                            var locations = [
                                                ['SIXDO TIMES CITY', 20.995863005310706, 105.86785326188445, 13,
                                                    'TD - 34 - 36, B1 TIMES CITY, Q. HAI BA TRUNG, HN'
                                                ],
                                                ['SIXDO TRẦN DUY HƯNG', 21.010787681758718, 105.79951987927113, 13,
                                                    '108A TRAN DUY HUNG, Q. CAU GIAY, HN'
                                                ],
                                                ['SIXDO ROYAL CITY', 21.000870356347473, 105.8159499152406, 13,
                                                    'B2 - R6 - 43A, B2 ROYAL CITY, Q. THANH XUAN, HN'
                                                ],
                                                ['SIXDO LÁNG HẠ', 21.01981261557255, 105.81695495566319, 13,
                                                    '12 LANG HA, Q. BA DINH, HN'
                                                ],
                                                ['SIXDO HẢI DƯƠNG', 20.939267671333994, 106.33215152529479, 13,
                                                    '7c Trần Hưng Đạo, Phường Quang Trung'
                                                ],
                                                ['SIXDO SIXDO SAIGON CENTRE', 10.773602646765042,
                                                    106.70128112373743, 13,
                                                    'Lô L2 - 30/31, TTTM Saigon Centre, Số 67 Lê Lợi, Phường Bến Nghé, Quận 1, TP HCM'
                                                ],
                                                ['SIXDO VIỆT TRÌ - PHÚ THỌ', 21.316262889803866, 105.39015572679835,
                                                    13,
                                                    'Số 1903 đường Hùng Vương, Phường Gia Cẩm, TP Việt Trì, Tỉnh Phú Thọ'
                                                ],
                                                ['SIXDO TÂN PHÚ', 10.779281620877839, 106.63564627013056, 13,
                                                    'Số 470 Luỹ Bán Bích, phường Hoà Thạnh, Quận Tân Phú, Tp. HCM'
                                                ],
                                                ['SIXDO LOTTE - HN', 21.032230088541198, 105.81296866910964, 13,
                                                    'F2-A04, Toà nhà lotte center Hanoi, 54 Liễu Giai, Phường Cống Vị, Quận Ba Đình'
                                                ],
                                                ['SIXDO AEONMALL - HN', 21.026560835634, 105.90053437294918, 13,
                                                    'T210-2, TTTM AEONMALL Long Biên, Tầng 2 - số 27 Đường Cổ Linh, P. Long Biên, Q. Long Biên, TP. Hà Nội'
                                                ],
                                                ['SIXDO BÌNH PHƯỚC', 11.529399580176687, 106.89525165065947, 13,
                                                    '772 Đường Phú Riềng Đỏ,Phường Tân Xuân, TX Đồng Xoài'
                                                ],
                                                ['SIXDO LÊ ĐỨC THỌ - HN', 21.02808578215067, 105.76972015589031, 13,
                                                    '69 Lê Đức Thọ, Mỹ Đình, Nam Từ Liêm'
                                                ],
                                                ['SIXDO HÀ TĨNH', 18.343107100565135, 105.89140290822606, 13,
                                                    '109-111 Trần Phú'
                                                ],
                                                ['SIXDO BIÊN HÒA', 10.958158667971787, 106.83898428618079, 13,
                                                    '1098-1100 Phạm Văn Thuận, P. Tân Tiến , TP. Biên Hoà'
                                                ],
                                                ['SIXDO ĐÀ NẴNG 2', 16.070750662771868, 108.2184104041453, 13,
                                                    '49 LÊ DUẨN, Q. HẢI CHÂU'
                                                ],
                                                ['SIXDO LÊ ĐẠI HÀNH - HCM', 10.762672617207397, 106.6564896188953,
                                                    13, '169-171 LÊ ĐẠI HÀNH, QUẬN 11'
                                                ],
                                                ['SIXDO HUẾ', 16.466165950246417, 107.59444179857195, 13,
                                                    '11 Nguyễn Tri Phương (ngã tư Bến Nghé ), Phường Phú Hội, TP Huế'
                                                ],
                                                ['SIXDO KIÊN GIANG', 9.995616281120153, 105.09344458596419, 13,
                                                    '410 Đường Nguyễn Trung Trực, Phường Vĩnh Lạc , TP. Rạch Giá'
                                                ],
                                                ['SIXDO ĐÀ LẠT', 11.946085160633825, 108.4347466761425, 13,
                                                    '157 - 159 Đường Phan Đình Phùng, Phường 2, TP Đà Lạt'
                                                ],
                                                ['SIXDO NINH BÌNH', 20.261260016131423, 105.97471948564099, 13,
                                                    '89-91 Đinh Tiên Hoàng, P. Đông Thành, TP.Ninh Bình'
                                                ],
                                                ['SIXDO VĨNH PHÚC', 21.313770676129277, 105.60050403226803, 13,
                                                    '35 - 35A Mê Linh, TP. Vĩnh Yên'
                                                ],
                                                ['SIXDO THÁI HÀ', 21.01338316117976, 105.81978870029639, 13,
                                                    '182-184 Thái Hà, Phường Trung Liệt, Quận Đống Đa, TP. Hà Nội'
                                                ],
                                                ['SIXDO NHA TRANG', 12.247787673036594, 109.18692826642535, 13,
                                                    'Số 45-47 đường Thái Nguyên, phường Phước Tân, TP Nha Trang, tỉnh Khánh Hòa'
                                                ],
                                                ['SIXDO LÊ VĂN SỸ - HCM', 10.789016007587586, 106.67546036224233,
                                                    13, '411 Lê Văn Sỹ, Q3, Hồ Chí Minh'
                                                ],
                                                ['SIXDO QUANG TRUNG - HCM', 10.842730076422692, 106.64276308074618,
                                                    13, '1162 Quang Trung, Gò Vấp, Hồ Chí Minh'
                                                ],
                                                ['SIXDO NGUYỄN VĂN CỪ', 21.04452410193968, 105.87374179487479, 13,
                                                    '252-256-258 Nguyễn Văn Cừ, Long Biên, Hà Nội'
                                                ],
                                                ['SIXDO BÌNH DƯƠNG', 10.982443785647712, 106.6611600226271, 13,
                                                    '93 đường Yersin, Tp Bình Dương'
                                                ],
                                                ['SIXDO TRƯỜNG CHINH - HCM', 10.798236537714917, 106.64357726289627,
                                                    13, '312 Trường Chinh,Quận Tân Bình, Thành Phố Hồ Chí Minh'
                                                ],
                                                ['SIXDO BÀ TRIỆU', 21.010395662364598, 105.8490496462471, 13,
                                                    '240 Bà Triệu,Quận Hai Bà Trưng,TP Hà Nội'
                                                ],
                                                ['SIXDO AN GIANG', 10.378082886333495, 105.43979552265273, 13,
                                                    '317 TRAN HUNG DAO, TP. LONG XUYEN'
                                                ],
                                                ['SIXDO ĐỒNG THÁP', 10.456423132228599, 105.63776009811585, 13,
                                                    '191 - 193 HUNG VUONG, TP. CAO LANH'
                                                ],
                                                ['SIXDO CẦN THƠ', 10.041413946925363, 105.78403982743883, 13,
                                                    '103 NGUYEN TRAI, Q. NINH KIEU, CAN THO'
                                                ],
                                                ['SIXDO VŨNG TÀU', 10.35035410228835, 107.07773178707077, 13,
                                                    '86 - 88 BA CU, TP. VUNG TAU'
                                                ],
                                                ['SIXDO CÀ MAU', 9.179781089689747, 105.15669886868548, 13,
                                                    '45 TRAN HUNG DAO, TP. CA MAU'
                                                ],
                                                ['SIXDO LÝ TỰ TRỌNG - HCM', 10.773064584285168, 106.69593445205143,
                                                    13, '193 - 195 LY TU TRONG, Q. 1, HCM'
                                                ],
                                                ['SIXDO NGUYỄN THỊ THẬP - HCM', 10.738734065075525,
                                                    106.71170180486179, 13, '364A NGUYEN THI THAP, Q. 7, HCM'
                                                ],
                                                ['SIXDO HAI BÀ TRƯNG - HCM', 10.786528354882325, 106.69354132692017,
                                                    13, '195A HAI BA TRUNG, Q. 3, HCM'
                                                ],
                                                ['SIXDO PHAN ĐĂNG LƯU - HCM', 10.802761689098892,
                                                    106.69538262810586, 13, '26B PHAN DANG LUU, Q. BINH THANH, HCM'
                                                ],
                                                ['SIXDO VÕ VĂN TẦN - HCM', 10.771298155232058, 106.68536330059732,
                                                    13, '324 - 326 VO VAN TAN, Q. 3, HCM'
                                                ],
                                                ['SIXDO ĐÀ NẴNG 1', 16.06023923598802, 108.21397991132638, 13,
                                                    '91 NGUYEN VAN LINH, Q. HAI CHAU, DN'
                                                ],
                                                ['SIXDO ĐẮK LẮK', 12.684618324634577, 108.04425368908691, 13,
                                                    '58 - 60 - 62 HAI BA TRUNG, TP. BUON MA THUOT'
                                                ],
                                                ['SIXDO GIA LAI', 13.979398037146849, 107.99301319996829, 13,
                                                    '162B HAI BA TRUNG, TP. PLEIKU'
                                                ],
                                                ['SIXDO QUẢNG BÌNH', 17.469349439774867, 106.61304495211786, 13,
                                                    '135 TRAN HUNG DAO, TP. DONG HOI'
                                                ],
                                                ['SIXDO NGHỆ AN', 18.680602889383707, 105.68451692910003, 13,
                                                    '222 NGUYEN VAN CU, TP. VINH'
                                                ],
                                                ['SIXDO THANH HÓA', 19.80521018273118, 105.77907330844181, 13,
                                                    '192 - 194 LE HOAN, TP. THANH HOA'
                                                ],
                                                ['SIXDO BẮC NINH', 21.177605835917124, 106.06384127973055, 13,
                                                    '94 - 96 NGUYEN CAO, TP. BAC NINH'
                                                ],
                                                ['SIXDO HẢI PHÒNG', 20.855068994380552, 106.67701790990213, 13,
                                                    '55 NGUYEN DUC CANH, Q. LE CHAN, TP. HAI PHONG'
                                                ],
                                                ['SIXDO BẮC GIANG', 21.28020284388671, 106.20601072635758, 13,
                                                    '149 - 151 HOANG VAN THU, TP. BAC GIANG'
                                                ],
                                                ['SIXDO HẠ LONG', 20.95189039606357, 107.0842833967677, 13,
                                                    'SH 7 - 1, TIMES GARDEN, TP. HA LONG'
                                                ],
                                                ['SIXDO THÁI NGUYÊN', 21.596439871032032, 105.8306336402893, 13,
                                                    '265 HOANG VAN THU, TP. THAI NGUYEN'
                                                ],
                                                ['SIXDO LẠNG SƠN', 21.85305438444954, 106.75713969707353, 13,
                                                    '34 TRAN DANG NINH, TP. LANG SON'
                                                ]
                                            ];
                                            // console.log(locations.length);
                                            var pinInfoBox; //the pop up info box
                                            var infoboxLayer = new Microsoft.Maps.EntityCollection();
                                            var pinLayer = new Microsoft.Maps.EntityCollection();
                                            var apiKey =
                                                "Apwotc2pglOqY_bLannByqBGVxp6nHjH6ZGhPsTBOyfdyHbaJZnV87ozNmjKBdlF";

                                            map = new Microsoft.Maps.Map(document.getElementById("myMap"), {
                                                credentials: apiKey
                                            });

                                            // Create the info box for the pushpin
                                            pinInfobox = new Microsoft.Maps.Infobox(new Microsoft.Maps.Location(0, 0), {
                                                visible: false
                                            });
                                            infoboxLayer.push(pinInfobox);


                                            for (var i = 0; i < locations.length; i++) {
                                                //add pushpins
                                                var latLon = new Microsoft.Maps.Location(locations[i][1], locations[i][
                                                    2]);
                                                var pin = new Microsoft.Maps.Pushpin(latLon, {
                                                    color: '#C3002F'
                                                    // title: locations[i][0],
                                                    // subTitle: locations[i][4],
                                                    // icon: '/images/point.png'
                                                });
                                                pin.Title = locations[i][0]; //usually title of the infobox
                                                pin.Description = locations[i][
                                                4]; //information you want to display in the infobox
                                                pinLayer.push(pin); //add pushpin to pinLayer
                                                Microsoft.Maps.Events.addHandler(pin, 'click', displayInfobox);
                                            }

                                            map.entities.push(pinLayer);
                                            map.entities.push(infoboxLayer);
                                            map.setView({
                                                zoom: 5,
                                                center: new Microsoft.Maps.Location(20.995863005310706,
                                                    105.86785326188445)
                                            });

                                        }

                                        function displayInfobox(e) {
                                            pinInfobox.setOptions({
                                                title: e.target.Title,
                                                description: e.target.Description,
                                                visible: true,
                                                offset: new Microsoft.Maps.Point(0, 25)
                                            });
                                            pinInfobox.setLocation(e.target.getLocation());
                                        }

                                        function hideInfobox(e) {
                                            pinInfobox.setOptions({
                                                visible: false
                                            });
                                        }
                                        </script>
                                        <script type='text/javascript'
                                            src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=Apwotc2pglOqY_bLannByqBGVxp6nHjH6ZGhPsTBOyfdyHbaJZnV87ozNmjKBdlF&CountryRegion=VN'
                                            async defer></script>

                                    </div>
                                </div>
                                <div class="col-md-4 c-col_store">
                                    <div class="c-box_selection">
                                        <h4>
                                            <img src="{{asset('client/img/ic-store.png')}}" alt="store" class="img">
                                            Hệ thống cửa hàng
                                        </h4>
                                        <div class="select-aria">
                                            <select name="province" id="province" class="select_box"
                                                onchange="changeCity22(this.value,'district');">
                                                <option value="">--Chọn tỉnh/thành phố--</option>
                                                <option value="89">
                                                    An Giang </option>
                                                <option value="77">
                                                    Bà Rịa - Vũng Tàu </option>
                                                <option value="24">
                                                    Bắc Giang </option>
                                                <option value="27">
                                                    Bắc Ninh </option>
                                                <option value="74">
                                                    Bình Dương </option>
                                                <option value="70">
                                                    Bình Phước </option>
                                                <option value="96">
                                                    Cà Mau </option>
                                                <option value="92">
                                                    Cần Thơ </option>
                                                <option value="64">
                                                    Gia Lai </option>
                                                <option value="1">
                                                    Hà Nội </option>
                                                <option value="42">
                                                    Hà Tĩnh </option>
                                                <option value="30">
                                                    Hải Dương </option>
                                                <option value="31">
                                                    Hải Phòng </option>
                                                <option value="79">
                                                    Hồ Chí Minh </option>
                                                <option value="56">
                                                    Khánh Hòa </option>
                                                <option value="91">
                                                    Kiên Giang </option>
                                                <option value="68">
                                                    Lâm Đồng </option>
                                                <option value="20">
                                                    Lạng Sơn </option>
                                                <option value="40">
                                                    Nghệ An </option>
                                                <option value="37">
                                                    Ninh Bình </option>
                                                <option value="25">
                                                    Phú Thọ </option>
                                                <option value="44">
                                                    Quảng Bình </option>
                                                <option value="22">
                                                    Quảng Ninh </option>
                                                <option value="19">
                                                    Thái Nguyên </option>
                                                <option value="38">
                                                    Thanh Hóa </option>
                                                <option value="46">
                                                    Thừa Thiên Huế </option>
                                                <option value="26">
                                                    Vĩnh Phúc </option>
                                                <option value="48">
                                                    Đà Nẵng </option>
                                                <option value="66">
                                                    Đắk Lắk </option>
                                                <option value="75">
                                                    Đồng Nai </option>
                                                <option value="87">
                                                    Đồng Tháp </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="c-list_map">
                                        <div class="list">
                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO TIMES CITY</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        TD - 34 - 36, B1 TIMES CITY, Q. HAI BA TRUNG, HN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 3050 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO TRẦN DUY HƯNG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        108A TRAN DUY HUNG, Q. CAU GIAY, HN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 3030 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO ROYAL CITY</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        B2 - R6 - 43A, B2 ROYAL CITY, Q. THANH XUAN, HN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 3040 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LÁNG HẠ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        12 LANG HA, Q. BA DINH, HN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 3020 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO HẢI DƯƠNG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        7c Trần Hưng Đạo, Phường Quang Trung
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02207309996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO SIXDO SAIGON CENTRE</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        Lô L2 - 30/31, TTTM Saigon Centre, Số 67 Lê Lợi, Phường Bến
                                                        Nghé, Quận 1, TP HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0287 301 1996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO VIỆT TRÌ - PHÚ THỌ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        Số 1903 đường Hùng Vương, Phường Gia Cẩm, TP Việt Trì, Tỉnh Phú
                                                        Thọ
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0210 7306 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO TÂN PHÚ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        Số 470 Luỹ Bán Bích, phường Hoà Thạnh, Quận Tân Phú, Tp. HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0287 303 6996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LOTTE - HN</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        F2-A04, Toà nhà lotte center Hanoi, 54 Liễu Giai, Phường Cống
                                                        Vị, Quận Ba Đình
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 300 3996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO AEONMALL - HN</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        T210-2, TTTM AEONMALL Long Biên, Tầng 2 - số 27 Đường Cổ Linh,
                                                        P. Long Biên, Q. Long Biên, TP. Hà Nội
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 300 1996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO BÌNH PHƯỚC</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        772 Đường Phú Riềng Đỏ,Phường Tân Xuân, TX Đồng Xoài
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0271 730 6996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LÊ ĐỨC THỌ - HN</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        69 Lê Đức Thọ, Mỹ Đình, Nam Từ Liêm
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02473060996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO HÀ TĨNH</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        109-111 Trần Phú
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0239 7306 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO BIÊN HÒA</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        1098-1100 Phạm Văn Thuận, P. Tân Tiến , TP. Biên Hoà
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0251 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO ĐÀ NẴNG 2</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        49 LÊ DUẨN, Q. HẢI CHÂU
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02367300996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LÊ ĐẠI HÀNH - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        169-171 LÊ ĐẠI HÀNH, QUẬN 11
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02873030996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO HUẾ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        11 Nguyễn Tri Phương (ngã tư Bến Nghé ), Phường Phú Hội, TP Huế
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0211 730 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO KIÊN GIANG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        410 Đường Nguyễn Trung Trực, Phường Vĩnh Lạc , TP. Rạch Giá
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0297 730 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO ĐÀ LẠT</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        157 - 159 Đường Phan Đình Phùng, Phường 2, TP Đà Lạt
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0229 730 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO NINH BÌNH</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        89-91 Đinh Tiên Hoàng, P. Đông Thành, TP.Ninh Bình
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0263 730 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO VĨNH PHÚC</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        35 - 35A Mê Linh, TP. Vĩnh Yên
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0234 730 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO THÁI HÀ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        182-184 Thái Hà, Phường Trung Liệt, Quận Đống Đa, TP. Hà Nội
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02473000996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO NHA TRANG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        Số 45-47 đường Thái Nguyên, phường Phước Tân, TP Nha Trang, tỉnh
                                                        Khánh Hòa
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02587300996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LÊ VĂN SỸ - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        411 Lê Văn Sỹ, Q3, Hồ Chí Minh
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0287 3041 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO QUANG TRUNG - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        1162 Quang Trung, Gò Vấp, Hồ Chí Minh
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0287 3050 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO NGUYỄN VĂN CỪ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        252-256-258 Nguyễn Văn Cừ, Long Biên, Hà Nội
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0247 3070 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO BÌNH DƯƠNG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        93 đường Yersin, Tp Bình Dương
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0274 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO TRƯỜNG CHINH - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        312 Trường Chinh,Quận Tân Bình, Thành Phố Hồ Chí Minh
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02873021996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO BÀ TRIỆU</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        240 Bà Triệu,Quận Hai Bà Trưng,TP Hà Nội
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02473080996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO AN GIANG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        317 TRAN HUNG DAO, TP. LONG XUYEN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0296 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO ĐỒNG THÁP</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        191 - 193 HUNG VUONG, TP. CAO LANH
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0277 7301 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO CẦN THƠ</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        103 NGUYEN TRAI, Q. NINH KIEU, CAN THO
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0292 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO VŨNG TÀU</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        86 - 88 BA CU, TP. VUNG TAU
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0254 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO CÀ MAU</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        45 TRAN HUNG DAO, TP. CA MAU
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0290 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LÝ TỰ TRỌNG - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        193 - 195 LY TU TRONG, Q. 1, HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        02873010996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO NGUYỄN THỊ THẬP - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        364A NGUYEN THI THAP, Q. 7, HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        028 7308 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO HAI BÀ TRƯNG - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        195A HAI BA TRUNG, Q. 3, HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        028 7304 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO PHAN ĐĂNG LƯU - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        26B PHAN DANG LUU, Q. BINH THANH, HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        028 7306 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO VÕ VĂN TẦN - HCM</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        324 - 326 VO VAN TAN, Q. 3, HCM
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        028 7309 0996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO ĐÀ NẴNG 1</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        91 NGUYEN VAN LINH, Q. HAI CHAU, DN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0236 7301 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO ĐẮK LẮK</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        58 - 60 - 62 HAI BA TRUNG, TP. BUON MA THUOT
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0262 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO GIA LAI</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        162B HAI BA TRUNG, TP. PLEIKU
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0269 7301 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO QUẢNG BÌNH</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        135 TRAN HUNG DAO, TP. DONG HOI
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0232 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO NGHỆ AN</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        222 NGUYEN VAN CU, TP. VINH
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0238 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO THANH HÓA</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        192 - 194 LE HOAN, TP. THANH HOA
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0237 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO BẮC NINH</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        94 - 96 NGUYEN CAO, TP. BAC NINH
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0222 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO HẢI PHÒNG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        55 NGUYEN DUC CANH, Q. LE CHAN, TP. HAI PHONG
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0225 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO BẮC GIANG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        149 - 151 HOANG VAN THU, TP. BAC GIANG
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0204 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO HẠ LONG</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        SH 7 - 1, TIMES GARDEN, TP. HA LONG
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0203 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO THÁI NGUYÊN</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        265 HOANG VAN THU, TP. THAI NGUYEN
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0208 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                            <div class="item_map">
                                                <div class="content">
                                                    <p class="title"><strong>SIXDO LẠNG SƠN</strong></p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-marker.png')}}" alt="marker"
                                                                class="img-responsive icon">
                                                        </span>
                                                        34 TRAN DANG NINH, TP. LANG SON
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <img src="{{asset('client/img/ic-phone.png')}}" alt="tel"
                                                                class="img-responsive icon">
                                                        </span>
                                                        0205 7300 996
                                                    </p>
                                                    <!--                                        <p><span><img src="images/traffic-right-turn.png" alt="find" class="img-responsive"></span><a href="#">Tìm-->
                                                    <!--                                                đường đi</a></p>-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="news-info" style="height: 40px"></div>
                </div>
            </div><!-- END: .main-column -->
        </div>
    </div>

</main><!-- END: #main -->
@endsection