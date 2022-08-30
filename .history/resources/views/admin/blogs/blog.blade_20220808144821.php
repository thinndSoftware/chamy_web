@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Blog',
        'key' => 'List',
        'url' => route('blogs.blog'),
    ])

    <div class="container-fluid py-4">
        <div class=row>
            <div class="col-6"></div>
            {{-- @can('product_add') --}}
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="" class="btn btn-success">
                        ADD</a>
                </div>
            {{-- @endcan --}}
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên bài viết
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ngày viết
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
                                    <p>
                                        Nàng thơ
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img src="https://icdn.dantri.com.vn/thumb_w/640/2020/05/08/nang-tho-ha-thanh-so-huu-nhan-sac-xinh-nhu-bup-bedocx-1588909157942.jpeg" height="100px"
                                            alt="{{ $product->product_avatar }}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        08/08/2022
                                    </p>
                                </td>
                                <td>

                                <td class="align-middle text-center text-sm">

                                        <a href=""
                                            class="btn btn-info">Sửa</a>

                                        <a href=""
                                            data-url=""
                                            class="btn btn-primary action_delete">Xóa</a>

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
