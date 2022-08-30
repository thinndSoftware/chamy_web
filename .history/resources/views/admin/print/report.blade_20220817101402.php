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
            width: 80%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
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
                    <h1 style="font-weight: 900;">Doanh Thu</h1>
                    <p>Thời gian: Từ <strong> {{ $DateTimeBefore }} </strong> đến
                        <strong>{{ $DateTimeAfter }}</strong>
                    </p>
                    <p>Liên 1: Lưu</p>
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
                        <th scope="col" colspan="2">Mã Hóa Đơn</th>
                        <th scope="col">Số tiền thanh toán</th>
                        <th scope="col">Thơi gian lập hóa đơn</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalReport = 0;
                    @endphp
                    @foreach ($reports as $key => $report)
                        @php
                            $totalReport += floatval(implode(explode(',', $report->order_total)));
                        @endphp
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td scope="row" colspan="2">{{ $report->order_id }}</td>
                            <td scope="row" class="text-right">{{ $report->order_total }} vnđ</td>
                            <td scope="row" class="text-right">{{ $report->created_at }}</td>
                        <tr>
                    @endforeach
                    <tr>
                        <td>Tổng số hóa đơn</td>
                        <td>{{ $key+1 }}</td>
                        <td>Tổng Doanh thu</td>
                        <td>{{ number_format($totalReport) }} vnđ</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer" style="margin-top:50px; width: 800px">
            <table style="border: none">
                <tr style="border: none">
                    <td style="border: none; width: 300px;">

                    </td>
                    <td style="border: none">

                    </td>
                    <td style="border: none">
                        <div class="col-md-4 text-center">
                            <p>Ngày..... tháng..... năm 20....</p>
                            <strong>Người Lập Báo Cáo</strong>
                            <p>(Ký, ghi rõ họ tên)</p>
                        </div>
                    </td>
                </tr>
            </table>

        </div>

    </div>
</body>

</html>
