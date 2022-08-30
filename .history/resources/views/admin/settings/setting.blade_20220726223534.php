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
                    Add Setting
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('settings.create').'?type=text' }}">Text</a></li>
                    <li><a class="dropdown-item" href="{{ route('settings.create').'?type=textarea' }}">TextArea</a></li>
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
                        @foreach ($settings as $setting)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $setting->id }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $setting->config_key }}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <p>
                                        {{ $setting->config_value }}
                                    </p>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a href="{{ route('settings.edit',['id']=>$setting->id ) }}" class="btn btn-info">Sửa</a>
                                <a href="" class="btn btn-primary">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{ $settings->links()}}
            </div>
        </div>

    </div>
@endsection
