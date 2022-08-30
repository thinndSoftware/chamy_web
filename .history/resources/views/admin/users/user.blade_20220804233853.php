@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'User',
        'key' => 'List',
        'url' => route('users.user'),
    ])
    <div class="container-fluid py-4">
        <div class=row>
            <div class="col-6"></div>
            @can('user_add')
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="{{ route('users.create') }}" class="btn btn-success">
                        ADD</a>
                </div>
            @endcan
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $user->id }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p>
                                        {{ $user->email }}
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @can('user_edit')
                                        <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-info">Sửa</a>
                                    @endcan
                                    @can('user_delete')
                                        <a href="{{ route('users.delete', ['id' => $user->id]) }}"
                                            data-url="{{ route('users.delete', ['id' => $user->id]) }}"
                                            class="btn btn-primary action_delete">Xóa</a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(() => {
            $(".action_delete").on('click', action_delete)
        })

        function action_delete(e) {
            e.preventDefault();
            let urlRequest = $(e.target).data("url");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: urlRequest,
                        type: 'GET',
                        success: function(data) {
                            if (data.code == 200) {
                                $(e.target).parent().parent().remove()
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                        }
                    })

                }
            })
        }
    </script>
@endsection
