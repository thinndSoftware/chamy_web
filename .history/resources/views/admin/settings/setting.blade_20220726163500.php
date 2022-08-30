@extends('admin.layout.index')
@section('title','Setting')
@section('content')
@include('admin.layout.nav_content',['name'=>'Setting', 'key'=>'List','url'=>route('settings.setting')])

<div class="container-fluid py-4">
    <div class=row>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href=""
             class="btn btn-success">
             ADD</a>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên menu</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($menus as $menu ) --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <p>
                                    {{-- {{$menu->id}} --}}
                                </p>
                            </div>
                        </td>
                        <td>
                            <p>
                                {{-- {{$menu->name}} --}}
                            </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a href="" class="btn btn-info">Sửa</a>
                            <a href="" class="btn btn-primary">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 d-flex justify-content-center">
            {{ $menus->links()}}
        </div>
    </div>

</div>
@endsection
