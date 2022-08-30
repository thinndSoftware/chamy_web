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
            <form class="p-4" action="{{ route('contact.rep') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="hidden" name="id" value="{{ $contact->id }}" >
                    <textarea name="message" class="@error('message') is-invalid @enderror">
                        {{ old('message') }}
                    </textarea>
                    @error('message')
                        <div class="alert alert-primary text-white">{{ $message }}</div>
                    @enderror

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
