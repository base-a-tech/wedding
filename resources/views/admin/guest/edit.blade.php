@extends('admin.layout.index');

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cập nhật khách mới</h4>

                    <form class="forms-sample" action="{{ route('admin.guest.update', ['id' => $guest->id]) }}" method="post">
                        @method('put')
                        @csrf()
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mã khách mời</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control" id="exampleInputUsername2"
                                    placeholder="Mã khách mời" value="{{ $guest->code }}" disabled>
                                @if($errors->has('code'))
                                <span class="error">{{ $errors->first('code') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Họ tên</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="exampleInputUsername2"
                                    placeholder="Họ tên" value="{{ $guest->name }}">
                                @if($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" class="form-control" id="exampleInputUsername2"
                                    placeholder="Số điện thoại" value="{{ $guest->phone }}">
                                @if($errors->has('phone'))
                                <span class="error">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="exampleInputUsername2"
                                    placeholder="Email" value="{{ $guest->email }}">
                                @if($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Địa chỉ</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" id="exampleInputPassword2"
                                    placeholder="Địa chỉ" value="{{ $guest->address }}">
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
                                    <option value="{{ $index }}" @if($guest->side == $index) selected @endif>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('side'))
                                    <span class="error">{{ $errors->first('side') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="exampleSelectSide">Link khách mời</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" id="exampleInputPassword2"
                                placeholder="Địa chỉ" value="{{ route('home', ['code' => $guest->code]) }}" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Cập nhật</button>
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
