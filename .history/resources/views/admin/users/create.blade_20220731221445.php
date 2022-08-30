@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'User',
        'key' => 'Add',
        'url' => route('users.slider'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{ route('users.strore') }}" method="post" enctype="multipart/form-data">
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
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="Nhập tên sản phẩm" value="{{ old('email') }}">
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
