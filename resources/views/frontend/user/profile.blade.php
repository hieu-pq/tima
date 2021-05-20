@extends('frontend.layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="main-page">
        <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container pb-4">
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
                                        Tên đăng nhập
                                    </p>
                                    <p class="text-left">
                                        Họ và tên
                                    </p>
                                    <p class="text-left">
                                        Số điện thoại
                                    </p>
                                    <p class="text-left">
                                        Email
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-left">
                                        hieuml-ngungoc
                                    </p>
                                    <p class="text-left">
                                        Hiếu Checker Việt
                                    </p>
                                    <p class="text-left">
                                        0312345664
                                    </p>
                                    <p class="text-left">
                                        hieucheckerviet@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <button type="button" data-toggle="modal" data-target="#editProfile"
                                        class="btn btn-danger">Cập nhật thông
                                        tin</button>
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
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputName">Họ và tên<span class="text-danger">*</span></label>
                                <input type="text" class="form-control col-md-8" id="inputName" name="inputName" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputPhone">Số điện thoại</label>
                                <input type="text" class="form-control col-md-8" id="inputPhone" name="inputPhone"
                                    placeholder="xxx">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputEmail">Email</label>
                                <input type="email" class="form-control col-md-8" id="inputEmail" name="inputEmail"
                                    placeholder="xxx@gmail.com">
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
                                <label class="col-md-4" for="inputPassword">Mật khẩu cũ<span class="text-danger">*</span></label>
                                <input type="password" value='' class="form-control col-md-8" id="inputOldPassword"
                                    name="inputOldPassword" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4" for="inputPassword">Mật khẩu mới<span class="text-danger">*</span></label>
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
