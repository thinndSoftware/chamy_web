@extends('admin.layout.index')
@section('title', 'Setting')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Setting',
        'key' => 'List',
        'url' => route('settings.setting'),
    ])

    <div class="container-fluid py-4">
        <div class=row>
            <div class="dropdown">
                <button class="btn bg-gradient-success dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Success
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Config Key
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Config
                                Value</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($menus as $menu) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        1
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        config key
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        config value
                                    </p>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a href="" class="btn btn-info">Sửa</a>
                                <a href="" class="btn btn-primary">Xóa</a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{-- {{ $menus->links()}} --}}
            </div>
        </div>

    </div>
@endsection
