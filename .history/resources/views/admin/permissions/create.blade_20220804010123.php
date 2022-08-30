@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Permisstion','key'=>'Add','url'=>route('permissions.create')])
<div class="container-fluid py-4">

    <div class="card">
        <form class="p-4" action="{{route('menus.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Chọn Menu cha</label>
                <select  name='parent_id' class="form-control border border-dark p-2" id="">
                    <option value="0">Chọn Menu cha</option>
                   @foreach (config('permissions.table_module') as $moduleItem )

                   @endforeach
                </select>
            </div>
            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">
                            <input type="checkbox" name="" id="" value="list">
                            Danh sách
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <input type="checkbox" name="" id="" value="add">
                            Thêm
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <input type="checkbox" name="" id="" value="edit">
                            Sửa
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <input type="checkbox" name="" id="" value="delete">
                            Xóa
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
