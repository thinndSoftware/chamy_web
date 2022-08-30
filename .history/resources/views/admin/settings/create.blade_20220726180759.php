@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Settings',
        'key' => 'Add',
        'url' => route('settings.setting'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Config key:</label>
                    <input type="text" name="config_key" class="form-control border border-dark p-2" id=""
                        placeholder="Nhập Config key ">
                </div>
                <div class="form-group">
                    {{ dd(request()->type) }}
                    <label for="">Config value:</label>
                    @if (request()->type === 'text')
                        <input type="text" name="config_value" class="form-control border border-dark p-2" id=""
                        placeholder="Nhập Config value ">
                        @else
                        <textarea id="summernote" name="description" class="@error('description') is-invalid @enderror">

                    @endif


                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
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

    </div>
@endsection
