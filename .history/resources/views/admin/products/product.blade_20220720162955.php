@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Products', 'key'=>'List','url'=>route('products.product')])

<div class="container-fluid py-4">
    <div class=row>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="{{ route('products.create') }}"
             class="btn btn-success">
             ADD</a>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Danh mục cha</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá bán</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($products as $product ) --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <p>
                                    {{-- {{$product->id}} --}}
                                    1
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>
                                {{-- {{$product->name}} --}}
                                ip6
                            </p>
                        </td>
                        <td>
                            <p>
                                <img src="https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-gold-hh-600x600-600x600-600x600.jpg" width="100px" alt="">
                                {{-- {{$product->image_link}} --}}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{-- {{ $product->category_id }} --}}
                                apple
                            </p>
                        </td>
                        <td>
                            <p>
                                {{-- {{ $product->price }} --}}
                                50.000.000
                            </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a href="" class="btn btn-info">Sửa</a>
                            <a href="" class="btn btn-primary">Xóa</a>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
        <div class="col-12 d-flex justify-content-center">
            {{-- {{ $products->links()}} --}}
        </div>
    </div>

</div>
@endsection
