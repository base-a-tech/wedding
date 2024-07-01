@extends('admin.layout.index');

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Danh sách quản trị viên</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>
                                        <div class="d-flex">
                                        <a href="{{ route('admin.manager.edit', ['id' => $admin->id]) }}" class="btn btn-primary" style="margin-right: 5px">Chi tiết</a>
                                        <button class="btn btn-danger ml-1" onclick="deleteAdmin({{ $admin->id }})">Xoá</button>

                                        <form method="post"  action="{{ route('admin.manager.delete', ['id' => $admin->id]) }}" id="deleteForm-{{$admin->id}}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function deleteAdmin(adminId) {
        console.log('deleteAdmin', adminId, `deleteForm-${adminId}`);
        $(`#deleteForm-${adminId}`).submit();
    }
</script>
@endsection
