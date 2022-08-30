@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Contact',
        'key' => 'View',
        'url' => route('contact.view'),
    ])
    <div class="container-fluid py-4">
        <div class="card">
            <div class="row pt-4 ps-4">
                <div class="col6">
                    <p class="font-weight-bold">Tên người gửi: <span class="font-weight-normal">{{ $contact->name }}</span></p>
                </div>
                <div class="col6">
                    <p class="font-weight-bold">Email người gửi: <span class="font-weight-normal">{{ $contact->email }}</span></p>
                </div>
            </div>
            <div class="row ps-4">
                <p class="font-weight-bold">Nội dung hòm thư: </p>
                <span class="ps-4" >
                    {{ $contact->message }}
                </span>
            </div>
            <form class="p-4" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="hidden" name="email" value="{{ $contact->email }}">
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
                <button type="submit" class="btn btn-primary mt-4">Gửi</button>
            </form>
        </div>

    </div>
@endsection
