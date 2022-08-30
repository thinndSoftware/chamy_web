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
                    <label for="">Config value:</label>
                    <input type="text" name="config_value" class="form-control border border-dark p-2" id=""
                        placeholder="Nhập Config value ">
                    <textarea id="summernote" name="description" class="@error('description') is-invalid @enderror">
                        {{-- {{ old('description') }} --}}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
