@extends('frontend.layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="main-page">
        <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container pb-4">
                <div class="row">
                    <div class="text-center col-md-12">
                        @include('frontend.template-parts.status')
                    </div>
                </div>
                <div class="row mb-6">
                    <h2 class="text-center col-md-12">
                        Thông tin người dùng
                    </h2>
                </div>
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                                    class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 50%">
                                <p class="font-weight-light pt-2">Ảnh đại diện</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-left">
                                        Họ và tên
                                    </p>
                                    <p class="text-left">
                                        Địa chỉ
                                    </p>
                                    <p class="text-left">
                                        Số điện thoại
                                    </p>
                                    <p class="text-left">
                                        Email (Tên đăng nhập)
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-left">
                                        {{Auth::user()->name}}
                                    </p>
                                    <p class="text-left">
                                        {{Auth::user()->dia_chi ??'NULL'}}
                                    </p>
                                    <p class="text-left">
                                        {{Auth::user()->so_dt}}
                                    </p>
                                    <p class="text-left">
                                        {{Auth::user()->email}}
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <button type="button" data-toggle="modal" data-target="#editProfile"
                                        class="btn btn-danger">Thay đổi thông tin</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" data-toggle="modal" data-target="#editPassword"
                                        class="btn btn-danger">Đổi mật khẩu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('user.update', Auth::user())}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="name">Họ và tên<span class="text-danger">*</span></label>
                                <input type="text" class="form-control col-md-8" id="name" name="name" value="{{Auth::user()->name}}" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="dia_chi">Địa chỉ</label>
                                <input type="text" class="form-control col-md-8" id="dia_chi" name="dia_chi" value="{{Auth::user()->dia_chi}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputPhone">Số điện thoại</label>
                                <input type="text" class="form-control col-md-8" value="{{Auth::user()->so_dt}}" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputEmail">Email</label>
                                <input type="email" class="form-control col-md-8" readonly value="{{Auth::user()->email}}">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-danger">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputPassword">Mật khẩu cũ<span
                                        class="text-danger">*</span></label>
                                <input type="password" value='' class="form-control col-md-8" id="inputOldPassword"
                                    name="inputOldPassword" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputPassword">Mật khẩu mới<span
                                        class="text-danger">*</span></label>
                                <input type="password" value='' class="form-control col-md-8" id="inputNewPassword"
                                    name="inputNewPassword" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
