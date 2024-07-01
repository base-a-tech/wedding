@extends('admin.layout.index');

@section('content')
<div class="content-wrapper">
   <div class="row">
   <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tạo mới Admin</h4>

                    <form class="forms-sample" action="{{ route('admin.manager.store') }}" method="post">
                        @csrf()
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Họ tên</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="exampleInputUsername2"
                                    placeholder="Họ tên">
                            </div>
                            @if($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="exampleInputUsername2"
                                    placeholder="Email">
                            </div>
                            @if($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Mật khẩu</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword2"
                                    placeholder="Mật khẩu">
                            @if($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Đăng kí</button>
                    </form>
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
