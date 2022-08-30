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
                    <label for="">Tên người gửi bảo hành:</label>
                    <input type="text" name="name"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại:</label>
                    <input type="text" name="phone"
                        class="form-control border border-dark p-2 @error('phone') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ:</label>
                    <input type="text" name="address"
                        class="form-control border border-dark p-2 @error('address') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('address') }}">
                    @error('address')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Mã Hóa Đơn:</label>
                    <input type="text" name="order_id"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mã sản phẩm:</label>
                    <input type="text" name="product_id"
                        class="form-control border border-dark p-2 @error('product_id') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('product_id') }}">
                    @error('product_id')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mã Sản phẩm:</label>
                    <input type="text" name="name"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                    @error('name')
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
                    <div class="form-group">
                    <label >Ghi chú:</label>
                    <textarea name="note"  cols="30" rows="10">{{ old('note') }}</textarea>
                    @error('note')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
