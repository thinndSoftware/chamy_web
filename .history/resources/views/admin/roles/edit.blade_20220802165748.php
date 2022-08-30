@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Roles',
        'key' => 'Edit',
        'url' => route('sliders.slider'),
    ])
    <div class="container-fluid py-4">

        <div class="row">
            <form class="p-4" action="{{--  --}}" method="post" enctype="multipart/form-data">
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
                @foreach ($permissions as $permission)
                    <div class="card" data-animation="true">
                        <div class="card-body bg-info ">
                            <h5 class="font-weight-normal mt-3">
                                <label class="text-white" for="">
                                    <input type="checkbox" name="" class="checkbox_wrapper">
                                    Module {{ $permission->name }}
                                </label>
                            </h5>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="row">
                            @foreach ($permission->permissionChildrent as $permissionChildrent)
                                <div class="col-md-3">
                                    <div class="card-footer d-flex">
                                        <label for="">
                                            <input type="checkbox" name="permission_id[]" class="checkbox_childrent"
                                                value="{{ $permissionChildrent->id }}"> {{ $permissionChildrent->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
        <script type="text/javascript">
            $('.checkbox_wrapper').on('click',function(){
                $(this).parents('.card').find('.checkbox_childrent').prop('checked',$(this).prop('checked'));
                console.log($(this).parents('.card'))
            })
        </script>
    </div>
@endsection
