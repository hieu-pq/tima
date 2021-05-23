@extends('employee.layouts.app')

@section('title')
    Tạo tài khoản nhân viên
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 text-center">
                @include('employee.template-parts.status')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Cập nhật tài khoản nhân viên</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                    <form action="{{route('employee.tai-khoan.update', $tai_khoan)}}" method="POST">

                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$tai_khoan->name}}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$tai_khoan->email}}" readonly required>
                        </div>

                        <div class="form-group">
                            <label for="kinh_nghiem">Năm kinh nghiệm</label>
                            <input type="number" class="form-control" id="kinh_nghiem" name="kinh_nghiem" value="{{$tai_khoan->kinh_nghiem}}">
                        </div>

                        <div class="form-group">
                            <label for="luong">Lương</label>
                            <input type="number" class="form-control" id="luong" value="{{$tai_khoan->luong}}" name="luong">
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Tạo mới</button>

                    </form>
            </div>
        </div>
    </div>
@endsection
