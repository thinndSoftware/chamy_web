<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hóa Đơn</title>

    <link rel="icon" href="{{ asset('./print/img/logoDN.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('./print/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('./print/css/css/style.css') }}">
    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: normal;
            src: url({{ asset('./print/fonts/Roboto-Regular.ttf') }}) format('truetype');
            src: url({{ asset('./print/fonts/Roboto-Italic.ttf') }}) format('truetype');
            src: url({{ asset('./print/fonts/Roboto-Bold.ttf') }}) format('truetype');
        }
    </style>
</head>

<body style="font-family:Roboto">
    <div class="page">
        <div class="header">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <img class="img-fluid" src="{{ asset('./print/img/logoDN.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 title-in">
                    <h1 class="title">Bảng báo giá</h1>
                    <p>Liên 1: Lưu</p>
                    <p>Ngày..... tháng..... năm 20....</p>
                </div>
                <div class="col-md-4">
                    <h5>Mẫu số: </h5>
                    <p>Ký hiệu: </p>
                    <p>Mã Hóa Đơn: {{ $order_by_id->id }}</p>
                </div>
            </div>
        </div>
        <div class="content">
            <p><strong>Đơn vị bán hàng:</strong><span class="viethoa">Công ty TNHH Thương mại và dịch vụ thiết bị DN
                    Phone</span></p>
            <p><strong>Mã số thuế:</strong><span></span></p>
            <p><strong>Địa chỉ:</strong><span>Quán Gánh ,Nhị Khê ,Thường Tín ,Hà Nội , Việt Nam</span></p>
            <p><strong>Điện thoại:</strong><span>0399574700</span></p>
            <p><strong>Số tài khoản</strong><span>19910000748627 tại Ngân hàng BIDV Hồng Hà Hà Nội</span></p>
            <div class="gach"></div>
            <div class="gach mgb-10"></div>
            <p><strong>Họ và tên người mua
                    hàng:</strong><span>..........{{ $user->name }}.............</span></p>
            <p><strong>Tên đơn vị:</strong><span>..........................................................</span></p>
            <p><strong>Mã số thuế:</strong><span>..........................................................</span></p>
            <p><strong>Địa
                    chỉ:</strong><span>...........{{ $order_by_id->shipping_address }}...............................................</span>
            </p>
            <p><strong>Hình thức thanh
                    toán:</strong><span>.................Tiền mặt...................................</span></p>
            <p><strong>Số tài khoản:</strong><span>..........................................................</span></p>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên hàng hóa, dịch vụ</th>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">ĐVT</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_order as $key => $product_orderDetail)
                        <tr>
                            <td class="text-center">{{ $key }}</td>
                            <td class="text-center">{{ $product_orderDetail->product_name }}</td>
                            <td class="text-center">{{ $product_orderDetail->product_id }}</td>
                            <td class="text-center">vnd</td>
                            <td class="text-center">{{ $product_orderDetail->product_qty }}</td>
                            <td class="text-center">{{ number_format($product_orderDetail->product_discount) }} vnđ</td>
                            <td class="text-center">
                                {{ number_format($product_orderDetail->product_qty * $product_orderDetail->product_discount) }} vnđ</td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="6" class="text-center">Cộng tiền hàng</td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <p class="text-right">Tổng cộng tiền thanh toán: {{ number_format(floatval(implode(explode(',', $$order_by_id->order_total)))) }} vnd</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-4 text-center">
                    <strong>Người mua hàng</strong>
                    <p>(Ký, ghi rõ họ tên)</p>
                </div>
                <div class="col-md-4 text-center">
                    <strong>Người bán hàng</strong>
                    <p>(Ký, ghi rõ họ tên)</p>
                </div>
                <div class="col-md-4 text-center">
                    <strong>Thủ trưởng đơn vị</strong>
                    <p>(Ký, ghi rõ họ tên)</p>
                </div>
                <div class="col-md-12 text-center mgt-50">
                    <small>(Cần kiểm tra, đối chiếu, giao nhận hóa đơn)</small>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
