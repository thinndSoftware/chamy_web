@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Category',
        'key' => 'List',
        'url' => route('category.category'),
    ])

    <div class="container-fluid py-4">
        <div class=row>
            <div class="col-6"></div>
            {{-- @can('add_category') --}}
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="{{ route('category.create') }}" class="btn btn-success">ADD</a>
                </div>
            {{-- @endcan --}}
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên danh mục
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $category->category_id }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p>
                                        <img src="{{ $category->image_path }}" height="100px" alt="{{ $category->image_name }}">
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $category->category_name }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{-- @can('edit_category') --}}
                                        <a href="{{ route('category.edit', ['id' => $category->category_id]) }}"
                                            class="btn btn-info">Sửa</a>
                                    {{-- @endcan --}}
                                    {{-- @can('delete_category') --}}
                                        <a href="{{ route('category.delete', ['id' => $category->category_id]) }}"
                                            class="btn btn-primary">Xóa</a>
                                    {{-- @endcan --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{ $categories->links() }}
            </div>
        </div>

    </div>
@endsection
