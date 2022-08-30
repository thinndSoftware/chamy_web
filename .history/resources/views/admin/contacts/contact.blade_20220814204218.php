@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Contact',
        'key' => 'List',
        'url' => route('products.product'),
    ])

    <div class="container-fluid py-4">
        <div class=row>
            <div class="col-6"></div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Người gửi
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $product->id }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p>
                                        {{ $product->name }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <img src="{{ asset($product->product_vartar_path) }}" height="100px"
                                            alt="{{ $product->product_avatar }}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{-- {{ $product->category->category_name ?? null}} --}}
                                        {{ optional($product->category)->category_name }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ number_format($product->price) }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{-- @can('product_edit') --}}
                                        <a href="{{ route('products.edit', ['id' => $product->id]) }}"
                                            class="btn btn-info">Sửa</a>
                                    {{-- @endcan --}}
                                    {{-- @can('product_delete') --}}
                                        <a href="{{ route('products.delete', ['id' => $product->id]) }}"
                                            data-url="{{ route('products.delete', ['id' => $product->id]) }}"
                                            class="btn btn-primary action_delete">Xóa</a>
                                    {{-- @endcan --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{ $products->links() }}
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
