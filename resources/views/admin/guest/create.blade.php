@extends('admin.layout.index');

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tạo mới khách mới</h4>

                    <form class="forms-sample" action="{{ route('admin.guest.store') }}" method="post">
                        @csrf()
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Họ tên</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="exampleInputUsername2"
                                    placeholder="Họ tên" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" class="form-control" id="exampleInputUsername2"
                                    placeholder="Số điện thoại" value="{{ old('phone') }}">
                                @if($errors->has('phone'))
                                <span class="error">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="exampleInputUsername2"
                                    placeholder="Email" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" id="exampleInputPassword2"
                                    placeholder="Địa chỉ" value="{{ old('address') }}">
                                @if($errors->has('address'))
                                <span class="error">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleSelectSide">Khách mời của:</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="exampleSelectSide" name="side">
                                    @foreach (\App\Models\Guest::SIDES as $index => $value)
                                    <option value="{{ $index }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('side'))
                                <span class="error">{{ $errors->first('side') }}</span>
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
