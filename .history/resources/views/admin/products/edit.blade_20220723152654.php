@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Product',
        'key' => 'Edit',
        'url' => route('products.product'),
    ])
    <div class="container-fluid py-4">
        <div class="card">
            <form class="p-4" action="{{ route('products.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên sản phẩm:</label>
                    <input type="text" name="menus_name" class="form-control border border-dark  p-2" id=""
                        placeholder="Nhập tên ản phẩm"
                        value="{{ $products->name }}"
                        >
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh đại diện</label>
                    <input type="file" name="image_link" class="p-2" id="">
                </div>
                <img src="{{ asset($products->product_vartar_path) }}" alt="" height="50px">
                <div class="form-group">
                    <label for="">Hình ảnh chi tiết</label>
                    <input type="file" name="image_list[]" class="p-2" id="" multiple
                       >
                </div>
                <div class="form-group">
                    <label for="">Chọn danh mục</label>
                    <select name='parent_id' class="form-control border border-dark p-2" id="">
                        <option value="0">Chọn danh mục</option>
                        {!! $htmloptions !!}
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Giá Tiền</label>
                    <input type="text" name="price" class="form-control border border-dark p-2" id=""
                        placeholder="Nhập giá tiền"
                        value="{{ $products->price }}"
                        >
                </div>
                <div class="form-group">
                    <label for="">Giảm giá</label>
                    <input type="text" name="discount" class="form-control border border-dark p-2" id=""
                        placeholder="Nhập giá khuyến mãi"
                        value="{{ $products->discount }}"
                        >
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea id="summernote" name="description">
                        {{ $products->content }}
                    </textarea>
                    <script type="text/javascript">
                        $('#summernote').summernote({
                            placeholder: 'Mô tả sản phẩm',
                            tabsize: 2,
                            height: 250,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                            ],
                            lang: 'utf8'
                        });
                    </script>
                    <style>
                        .form-group .btn.btn-sm i {
                            font-size: 1rem;
                        }
                    </style>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
