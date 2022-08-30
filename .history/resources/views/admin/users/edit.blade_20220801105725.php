@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'User',
        'key' => 'Edit',
        'url' => route('users.user'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{-- {{ route('users.update',['id'=>$users->id]) }} --}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên người dùng:</label>
                    <input type="text" name="name"
                        class="form-control border border-dark p-2 @error('name') is-invalid @enderror" id=""
                        placeholder="" value="{{ $user->name }}" >
                    @error('name')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="text" name="email" class="p-2" id="">
                    @error('image_link')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
