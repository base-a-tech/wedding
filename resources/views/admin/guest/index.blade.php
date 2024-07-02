@extends('admin.layout.index');

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Danh sách khách mời</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mã khách mời</th>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Khách mời của</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày xác nhận tham dự</th>
                                    <th>Link khách mời</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guests as $guest)
                                <tr>
                                    <td>{{ $guest->id }}</td>
                                    <td>{{ $guest->code }}</td>
                                    <td>{{ $guest->name }}</td>
                                    <td>{{ $guest->phone }}</td>
                                    <td>{{ $guest->side_text }}</td>
                                    <td>{{ $guest->email }}</td>
                                    <td>{{ $guest->address }}</td>
                                    <td>{{ $guest->confirm_at }}</td>
                                    <td><span id="linkGuest-{{ $guest->id}}">{{ route('home', ['code' => $guest->code]) }}</span> <i class="copy-btn mdi mdi-content-copy" onclick="copyText({{ $guest->id}})"></i></td>
                                    <td>
                                        <div class="d-flex">
                                        <a href="{{ route('admin.guest.edit', ['id' => $guest->id]) }}" class="btn btn-primary" style="margin-right: 5px">Chi tiết</a>
                                        <button class="btn btn-danger ml-1" onclick="deleteAdmin({{ $guest->id }})">Xoá</button>

                                        <form method="post"  action="{{ route('admin.guest.delete', ['id' => $guest->id]) }}" id="deleteForm-{{$guest->id}}">
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
    function deleteAdmin(guestId) {
        console.log('deleteAdmin', guestId, `deleteForm-${guestId}`);
        $(`#deleteForm-${guestId}`).submit();
    }

    function copyText(id) {
        // Get the text field
        const copyText = document.getElementById(`linkGuest-${id}`).innerHTML;

        const input = document.createElement("input");

        input.value = copyText;

        document.body.appendChild(input);

        input.select();

        document.execCommand("copy");

        document.body.removeChild(input);

        // Alert the copied text
        alert("Đã copy link: " + copyText);
    }
</script>
@endsection
