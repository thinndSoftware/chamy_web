@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Report',
        'key' => 'Order',
        'url' => route('report.view'),
    ])

    <div class="container-fluid py-4">
        @if (!empty($DateTimeBeforeFormat) && !empty($DateTimeAfterFormat))
            <form action="{{ route('report.getReport') }}" method="post">
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
                        <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu">
                    </div>
                    <div class="col-3 mt-4">
                        <a target="_blank"
                            href="{{ route('report.print',
                             ['DateTimeBefore' => $DateTimeBeforeFormat, 'DateTimeAfter' => $DateTimeAfterFormat]) }}"
                            class="btn btn-success">In báo cáo</a>
                    </div>
                    <div class="col-3 mt-4">
                        <a
                            href="{{ route('report.product') }}"
                            class="btn btn-success">In báo cáo</a>
                    </div>
                </div>
            </form>
        @else
            <form action="{{ route('report.getReport') }}" method="post">
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
                        <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu">
                    </div>
                </div>
            </form>
        @endif

        @if (!empty($reports))
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
                    {{-- {{ $products->links() }} --}}
                </div>
            </div>
        @endif

    </div>

@endsection
