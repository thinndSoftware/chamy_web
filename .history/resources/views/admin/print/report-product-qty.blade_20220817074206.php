<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hóa Đơn</title>

    <link rel="icon" href="{{ asset('./print/img/logoDN.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('./print/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('./print/css/style.css') }}">
    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: bold;
            src: url({{ asset('./print/fonts/Roboto-Regular.ttf') }}) format('truetype');
            src: url({{ asset('./print/fonts/Roboto-Italic.ttf') }}) format('truetype');
            src: url({{ asset('./print/fonts/Roboto-Bold.ttf') }}) format('truetype');
        }

        table {
            width: 70%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0px 10px;
        }
        .title{
            font-weight: 900;
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
                <div>
                    <h1 style="font-weight: 900;" >Doanh Thu</h1>
                    <p>Thời gian: Từ <strong> {{ $DateTimeBefore }} </strong> đến
                        <strong>{{ $DateTimeAfter }}</strong>
                    </p>
                    <p>Liên 1: Lưu</p>
                </div>
                <div class="col-md-4">
                    <p>Số: </p>
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
            <table class="table table-bordered" style="border">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã Sản Phẩm</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá Bán</th>
                        <th scope="col">Thanh Toán</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalProduct = 0;
                    @endphp
                    @foreach ($products as $key => $product)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $product->product_id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $product->product_discount }}</td>
                            <td class="text-right">
                                {{ $product->product_qty * floatval($product->product_discount) }}
                                vnđ</td>
                            @php
                                $totalProduct += $product->qty * floatval($product->product_discount);
                            @endphp
                        <tr>
                    @endforeach
                    <td colspan="5">Tổng Doanh thu</td>
                    <td colspan="2">{{ number_format($totalProduct) }} vnđ</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-4 text-center">
                    <strong></strong>
                    <p></p>
                </div>
                <div class="col-md-4 text-center">
                    <strong></strong>
                    <p></p>
                </div>
                <div class="col-md-4 text-center">
                    <p>Ngày..... tháng..... năm 20....</p>
                    <strong>Người Lập Báo Cáo</strong>
                    <p>(Ký, ghi rõ họ tên)</p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
