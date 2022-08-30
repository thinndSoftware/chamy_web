@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Slider',
        'key' => 'Add',
        'url' => route('sliders.slider'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{ route('sliders.strore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên slider:</label>
                    <input type="text" name="name"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ $sliders->name }}" >
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh Slider</label>
                    <input type="file" name="image_link" class="p-2" id="">

                     @error('image_link')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <img
                    src="{{ $sliders->image_path }}" alt="{{ $sliders->image_name }}" height="100px">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea id="summernote" name="description" class="@error('description') is-invalid @enderror">
                        {{ $sliders->description??old('description') }}
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
