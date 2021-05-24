@extends('frontend.layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="main-page">
        <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container pb-4">
                <div class="row mb-6">
                    <h2 class="text-center col-md-12">Lịch sử hợp đồng</h2>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#TT</th>
                                    <th scope="col">Mã hợp đồng</th>
                                    <th scope="col">Loại</th>
                                    <th scope="col">Khoản vay</th>
                                    <th scope="col">Thời hạn</th>
                                    <th scope="col">Lãi suất</th>
                                    <th scope="col">Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Auth::user()->hopDongUser as $item)

                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$item->ma_hd}}</td>
                                        <td>{{$item->kieu_hd}}</td>
                                        <td>{{number_format($item->khoan_vay)}} VND</td>
                                        <td>{{$item->thang_vay}} tháng</td>
                                        <td>{{$item->lai_suat}}%/tháng</td>
                                        <td>{{$item->trang_thai}}</td>
                                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                                        <td class="text-center">
                                            <a href="{{route('user.lichsu.detail', $item)}}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
