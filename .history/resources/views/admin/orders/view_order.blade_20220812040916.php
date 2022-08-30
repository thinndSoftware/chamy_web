@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Order',
        'key' => 'List Detail Order',
        'url' => route('orders.order'),
    ])

    <div class="container-fluid py-4">
        <div class=row>
            <div class="col-6"></div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <h5 class="font-weight-normal mt-3 text-white bg-secondary" style="text-align: center">
                   Thông tin khách hàng
                </h5>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên khách hàng
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Địa chỉ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($all_order as $order) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>

                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                 <h5 class="font-weight-normal mt-3 text-white bg-secondary" style="text-align: center">
                   Thông tin vận chuyển
                </h5>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên người nhận
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Đại chỉ giao hàng
                                tiền
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số điện thoại
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($all_order as $order) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                <h5 class="font-weight-normal mt-3 text-white bg-secondary" style="text-align: center">
                   Chi tiết đơn hàng
                </h5>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tổng Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($all_order as $order) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{-- {{ $order->id }} --}}
                                    </p>
                                </div>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            {{-- <div class="col-12 d-flex justify-content-center"> --}}
            {{-- {{ $all_order->links() }} --}}
            {{-- </div> --}}
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(() => {
            $(".action_delete").on('click', action_delete)
        })

        function action_delete(e) {
            e.preventDefault();
            let urlRequest = $(e.target).data("url");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: urlRequest,
                        type: 'GET',
                        success: function(data) {
                            if (data.code == 200) {
                                $(e.target).parent().parent().remove()
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                        }
                    })

                }
            })
        }
    </script>
@endsection
