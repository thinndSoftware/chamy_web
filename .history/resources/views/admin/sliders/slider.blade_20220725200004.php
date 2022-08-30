@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Silder',
        'key' => 'List',
        'url' => route('sliders.slider'),
    ])
    {{ dd($sliders) }}
    <div class="container-fluid py-4">
        <div class=row>
            <div class="col-6"></div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('sliders.create') }}" class="btn btn-success">
                    ADD</a>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($products as $product) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        1
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        Tên sản phẩm
                                    </p>
                                </div>
                            </td>
                            <td>
                                <p>
                                    Mô tả
                                </p>
                            </td>
                            <td>
                                <p>
                                    <img src="http://web_dienthoai.test/client/img/hero/banner.jpg" height="100px" alt="">
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a href="" class="btn btn-info">Sửa</a>
                                <a href="" class="btn btn-primary action_delete">Xóa</a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{-- {{ $products->links() }} --}}
            </div>
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
                                console.log($(e.target).parent());
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
