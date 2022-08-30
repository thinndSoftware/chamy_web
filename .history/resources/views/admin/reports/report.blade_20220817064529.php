@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Report',
        'key' => 'Order',
        'url' => route('report.view'),
    ])

    <div class="container-fluid py-4">

        {{-- Start form Xem Thống kê theo hóa đơn --}}
        <form action="{{ route('report.getReport') }}" method="post" class="border-top border-info">
            @csrf
            <div class=row>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Từ</label>
                        <input type="datetime-local" class="form-control @error('date_time_before') is-invalid @enderror"
                            name="date_time_before" value="{{ old('date_time_before') }}">
                        @error('date_time_before')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Đến</label>
                        <input type="datetime-local" class="form-control @error('date_time_after') is-invalid @enderror"
                            name="date_time_after" value="{{ old('date_time_before') }}">
                        @error('date_time_after')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4 mt-5 ps-5 text-left">
                    <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu">
                </div>

            </div>
        </form>
        {{-- End form Xem Thống kê theo hóa đơn --}}

        {{-- Start from Xem thống kê theo sản phẩm --}}
        <form action="{{ route('report.getProduct') }}" method="post" class="border-top border-info">
            @csrf
            <div class=row>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Từ</label>
                        <input type="datetime-local" class="form-control @error('date_time_before') is-invalid @enderror"
                            name="date_time_before" value="{{ old('date_time_before') }}">
                        @error('date_time_before')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Đến</label>
                        <input type="datetime-local" class="form-control @error('date_time_after') is-invalid @enderror"
                            name="date_time_after" value="{{ old('date_time_before') }}">
                        @error('date_time_after')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4 mt-5 ps-5 text-left">
                    <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu Theo Sản Phẩm">
                </div>
            </div>
        </form>
        {{-- End from Xem thống kê theo sản phẩm --}}

        {{-- Start from Xem thống kê sản phẩm bán chạy nhất --}}
        <form action="{{ route('report.getProduct.qty') }}" method="post" class='border-top border-info'>
            @csrf
            <div class=row>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Từ</label>
                        <input type="datetime-local" class="form-control @error('date_time_before') is-invalid @enderror"
                            name="date_time_before" value="{{ old('date_time_before') }}">
                        @error('date_time_before')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Đến</label>
                        <input type="datetime-local" class="form-control @error('date_time_after') is-invalid @enderror"
                            name="date_time_after" value="{{ old('date_time_before') }}">
                        @error('date_time_after')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4 mt-5 ps-5 text-left">
                    <input type="submit" name="submit" class="btn btn-info" value="Thống kê Sản phẩm bán chạy">
                </div>

            </div>
        </form>
        {{-- End from Xem thống kê theo sản phẩm bán chạy nhất --}}

        {{-- Start hiển thị Thống kê Doanh Thu --}}
        @if (!empty($reports))
            <a href="{{ route('report.print', ['DateTimeBefore' => $DateTimeBeforeFormat, 'DateTimeAfter' => $DateTimeAfterFormat]) }}"
                target="_blank">
                <div class="btn btn-secondary">
                    In Doanh Thu
                </div>
            </a>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Hóa
                                    đơn
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số tiền
                                    thanh toán
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thời
                                    gian
                                    Lập Hóa Đơn</th>
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
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <p>
                                                {{ $key + 1 }}
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $report->order_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $report->order_total }} vnđ
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $report->created_at }}
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="bg-secondary">
                                <td class="text-danger" colspan="2">Tổng Doanh thu</td>
                                <td class="text-danger">{{ number_format($totalReport) }} vnđ</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center">
                </div>
            </div>
        @endif
        {{-- End hiển thị Thống kê Doanh Thu --}}

        {{-- Start hiển thị thống kê theo doanh thu sản phẩm --}}
        @if (!empty($products))
            <a href="{{ route('report.Printproduct', ['DateTimeBefore' => $DateTimeBeforeFormat, 'DateTimeAfter' => $DateTimeAfterFormat]) }}"
                target="_blank">
                <div class="btn btn-secondary">
                    In Doanh Thu
                </div>
            </a>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Hóa
                                    đơn</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Sản
                                    Phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Sản
                                    Phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số
                                    lượng</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá Bán
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thanh
                                    toán</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thời
                                    gian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalProduct = 0;
                            @endphp
                            @foreach ($products as $key => $product)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <p>
                                                {{ $key + 1 }}
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->order_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_name }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_qty }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_discount }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_qty * floatval(implode(explode(',', $product->product_discount))) }}
                                            vnđ
                                        </p>
                                    </td>
                                    @php
                                        $totalProduct += $product->product_qty * floatval(implode(explode(',', $product->product_discount)));
                                    @endphp
                                    <td>
                                        <p>
                                            {{ $product->created_at }}
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="bg-secondary">
                                <td class="text-danger" colspan="6">Tổng Doanh thu</td>
                                <td class="text-danger" colspan="2">{{ number_format($totalProduct) }} vnđ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center">
                </div>
            </div>
        @endif
        {{-- End hiển thị thống kê theo doanh thu sản phẩm --}}

        {{-- Start hiển thị thống kê theo doanh thu sản phẩm --}}
        @if (!empty($productsQty))
            <a href="{{ route('report.Printproduct.qty', ['DateTimeBefore' => $DateTimeBeforeFormat, 'DateTimeAfter' => $DateTimeAfterFormat]) }}"
                target="_blank">
                <div class="btn btn-secondary">
                    In Doanh Thu
                </div>
            </a>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Sản
                                    Phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Sản
                                    Phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số
                                    lượng</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá Bán
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thanh
                                    toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalProduct = 0;
                            @endphp
                            @foreach ($productsQty as $key => $product)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <p>
                                                {{ $key + 1 }}
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_name }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_qty }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_discount }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->product_qty * floatval($product_discount) }}
                                            vnđ
                                        </p>
                                    </td>
                                    @php
                                        $totalProduct += $product->product_qty * $productsQty->product_discount;
                                    @endphp
                                </tr>
                            @endforeach
                            <tr class="bg-secondary">
                                <td class="text-danger" colspan="6">Tổng Doanh thu</td>
                                <td class="text-danger" colspan="2">{{ number_format($totalProduct) }} vnđ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center">
                </div>
            </div>
        @endif
        {{-- End hiển thị thống kê theo doanh thu sản phẩm --}}

    </div>

@endsection
