@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'User',
        'key' => 'Add',
        'url' => route('users.user'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{-- {{ route('users.strore') }} --}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên :</label>
                    <input type="text" name="name"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="text" name="email"
                        class="form-control border border-dark p-2 @error('email') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password: </label>
                    <input type="password" name="password"
                        class="form-control border border-dark p-2 @error('password') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('') }}">
                    @error('password')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Chọn vai trò: </label>
                    <select name="" id="" class="form-control border border-dark p-2 select_init" multiple>
                        <option value="">admin1</option>
                        <option value="1">admin2</option>
                        <option value="2">admin3</option>
                    </select>
                    @error('password')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(() => {
                $('.js-example-basic-single').select2({
                    placeholder: 'Select an option'
                });
            })
        </script>
    </div>
@endsection
