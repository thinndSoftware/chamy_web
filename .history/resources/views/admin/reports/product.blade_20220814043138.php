@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Report',
        'key' => 'Product',
        'url' => route('report.view'),
    ])

    <div class="container-fluid py-4">
        @if (!empty($DateTimeBeforeFormat) && !empty($DateTimeAfterFormat))
            <form action="{{ route('report.getProduct') }}" method="post">
                @csrf
                <div class=row>
                    <div class="col-2">
                        <div class="input-group input-group-static my-3">
                            <label>Từ</label>
                            <input type="datetime-local" class="form-control @error('date_time_before') is-invalid @enderror"
                                name="date_time_before" value="{{ $DateTimeBeforeFormat ?? old('date_time_before') }}">
                            @error('date_time_before')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group input-group-static my-3">
                            <label>Đến</label>
                            <input type="datetime-local" class="form-control @error('date_time_after') is-invalid @enderror"
                                name="date_time_after" value="{{ $DateTimeAfterFormat ?? old('date_time_after') }}">
                            @error('date_time_after')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2 mt-4 justify-content-center">
                        <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu theo Sản Phẩm">
                    </div>
                    <div class="col-6 mt-4">
                        <a target="_blank"
                            href="{{ route('report.Printproduct',
                             ['DateTimeBefore' => $DateTimeBeforeFormat, 'DateTimeAfter' => $DateTimeAfterFormat]) }}"
                            class="btn btn-success">In báo cáo</a>
                    </div>
                </div>
            </form>
        @else
            <form action="{{ route('report.getProduct') }}" method="post">
                @csrf
                <div class=row>
                    <div class="col-2">
                        <div class="input-group input-group-static my-3">
                            <label>Từ</label>
                            <input type="datetime-local"
                                class="form-control @error('date_time_before') is-invalid @enderror" name="date_time_before"
                                value="{{ old('date_time_before') }}">
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
                    <div class="col-2 mt-4">
                        <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu Theo Sản Phẩm">
                    </div>
                </div>
            </form>
        @endif

        @if (!empty($products))
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Hóa đơn</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Sản Phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Sản Phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá Bán</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thanh toán</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thời gian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalProduct = 0;
                            @endphp
                            @foreach ($products as $key => $product)
                                @php
                                    $totalProduct += floatval(implode(explode(',', $product->product_discount)));
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
                                            {{ $product->order_id }}
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
                                            {{ $product->product_qty*floatval(implode(explode(',', $product->product_discount))) }} vnđ
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $product->created_at }}
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
                    {{-- {{ $products->links() }} --}}
                </div>
            </div>
        @endif

    </div>

@endsection
