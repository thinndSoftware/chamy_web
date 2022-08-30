<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('client/img/logoDN.png')}}" type="image/x-icon">
    <title>DN - Phone</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}" type="text/css">

</head>
<body>
      <div class="container-fluid py-4">
        <div class="card">
            <div class="table-responsive">
                <h5 class="font-weight-normal mt-3 text-white bg-secondary" style="text-align: center">
                    Thông tin khách hàng
                </h5>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên khách
                                hàng
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->id }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->name }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->email }}
                                    </p>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <h5 class="font-weight-normal mt-3 text-white bg-secondary" style="text-align: center">
                    Thông tin vận chuyển
                </h5>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên người
                                nhận
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Địa chỉ
                                giao hàng
                                tiền
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số điện
                                thoại
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->shipping_name }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->shipping_address }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->shipping_phone }}
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h5 class="font-weight-normal mt-3 text-white bg-secondary" style="text-align: center">
                    Chi tiết đơn hàng
                </h5>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản
                                phẩm
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tổng
                                Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_order as $product_orderDetail)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $product_orderDetail->product_id }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $product_orderDetail->product_name }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $product_orderDetail->product_qty }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $product_orderDetail->product_discount }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $product_orderDetail->product_qty * $product_orderDetail->product_discount }}
                                            VND
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">
                                Tổng tiền:
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $order_by_id->order_total }} VND
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
