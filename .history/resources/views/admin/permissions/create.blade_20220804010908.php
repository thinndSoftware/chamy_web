@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Permisstion','key'=>'Add','url'=>route('permissions.create')])
<div class="container-fluid py-4">

    <div class="card">
        <form class="p-4" action="{{route('menus.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Chọn tên module</label>
                <select  name='parent_id' class="form-control border border-dark p-2" id="">
                    <option value="">Chọn tên module:</option>
                   @foreach (config('permissions.table_module') as $moduleItem )
                    <option value="{{ $moduleItem }}">{{ $moduleItem }}</option>
                   @endforeach
                </select>
            </div>
            <div class="form-group mt-2">
                <div class="row">
                    @foreach (config('permissions.module_childrent') as )

                    @endforeach
                    <div class="col-md-3">
                        <label for="">
                            <input type="checkbox" name="" id="" value="list">
                            Danh sách
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
