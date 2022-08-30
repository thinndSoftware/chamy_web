@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Roles',
        'key' => 'Add',
        'url' => route('sliders.slider'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{ route('sliders.strore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên Vai Trò:</label>
                    <input type="text" name="name" class="form-control border border-dark p-2 " id=""
                        placeholder="Nhập tên vai trò" value="">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea id="summernote" name="display_name" class="">
                        {{ old('display_name') }}
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
                <div class="card" data-animation="true">
                    <div class="card-body text-center">
                        <h5 class="font-weight-normal mt-3">
                            <label for="">
                                <input type="checkbox" name="" id="">
                            </label>
                        </h5>
                        <p class="mb-0">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio"
                            where you can enjoy the main night life in Barcelona.
                        </p>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer d-flex">
                        <p class="font-weight-normal my-auto">$899/night</p>
                        <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                        <p class="text-sm my-auto"> Barcelona, Spain</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
