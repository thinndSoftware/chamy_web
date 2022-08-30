@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Insurance',
        'key' => 'Add',
        'url' => route('products.product'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{ route('insurance.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên sản phẩm:</label>
                    <input type="text" name="name"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh đại diện</label>
                    <input type="file" name="image_link" class="p-2" id="">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh chi tiết</label>
                    <input type="file" name="image_list[]" class="p-2" id="" multiple>
                </div>
                <div class="form-group">
                    <label for="">Chọn danh mục</label>
                    <select name='category_id'
                        class="form-control border border-dark p-2 @error('category_id') is-invalid @enderror"
                        id="">
                        <option value="">Chọn danh mục</option>
                        {!! $htmloptions !!}
                    </select>
                    @error('category_id')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Giá Tiền</label>
                    <input type="text" name="price"
                        class="form-control border border-dark p-2 @error('price') is-invalid @enderror" id=""
                        placeholder="Nhập giá tiền sản phẩm"
                        value="{{ old('price') }}"
                        >
                    @error('price')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Giảm giá</label>
                    <input type="text" name="discount"
                        class="form-control border border-dark p-2 @error('discount') is-invalid @enderror" id=""
                        placeholder="Nhập giá tiền khuyến mại"
                        value="{{ old('discount') }}"
                        >
                    @error('discount')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea id="summernote" name="description" class="@error('description') is-invalid @enderror">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
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
