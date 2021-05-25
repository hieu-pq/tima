@extends('frontend.layouts.master')

@section('title')
    Chi tiết hợp đồng {{$hopdong->ma_hd}}
@endsection

@section('content')


    <div class="main-page mb-4">
        <div class="tm-card bg-white pt-3 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container pb-4">
                <div class="row mb-6">
                    <div class="col-md-12 text-center">
                        <h2>Chi tiết hợp đồng {{$hopdong->kieu_hd}}</h2>
                        <p><i>Mã hợp đồng: {{$hopdong->ma_hd}}</i></p>
                        <p><i>Ngày tạo: {{$hopdong->created_at->format('d-m-Y')}}</i></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="infor">

                            <h5 class="mb-4">Thông tin người vay</h5>

                            <p>Chủ hợp đồng: {{$hopdong->ho_ten}}</p>
                            <p>Giới tính: {{$hopdong->gioi_tinh}}</p>
                            <p>Ngày sinh: {{$hopdong->ngay_sinh}}</p>
                            <p>Số điện thoại: {{$hopdong->so_dt}}</p>
                            <p>Địa chỉ: {{$hopdong->dia_chi}}</p>
                            <p>Email: {{$hopdong->email}}</p>
                            <p>Thu nhập: {{number_format($hopdong->thu_nhap)}} VNĐ</p>
                            <p>Trình độ học vấn: {{$hopdong->hoc_van}}</p>

                            <h5 class="mt-4 mb-4">Thông tin tài khoản ngân hàng</h5>

                            <p>Tên ngân hàng: {{$hopdong->ten_nh}}</p>
                            <p>Tên chủ tài khoản: {{$hopdong->chutk_nh}}</p>
                            <p>Số tài khoản: {{$hopdong->stk_nh}}</p>

                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="infor">

                            <h5 class="mb-4">Thông tin khoản vay</h5>

                            <p>Giá trị khoản vay: {{number_format($hopdong->khoan_vay)}} VNĐ</p>
                            <p>Thời hạn vay: {{$hopdong->thang_vay}} tháng</p>
                            <p>Lãi suất: {{$hopdong->lai_suat}}% / tháng</p>

                            <h5 class="mt-4 mb-4">Trạng thái hợp đồng</h5>
                            <p>Phương thức vay: {{$hopdong->kieu_hd}}</p>
                            <p> <strong>Trạng thái: </strong>

                                @if($hopdong->trang_thai == 'active')
                                    Hợp đồng còn hiệu lực / trong trạng thái hoạt động
                                @endif

                                @if($hopdong->trang_thai == 'pending')
                                    Đang chờ duyệt
                                @endif

                                @if($hopdong->trang_thai == 'reject')
                                    Đã bị từ chối
                                @endif

                                @if($hopdong->trang_thai == 'done')
                                    Hợp đồng đã hoàn thành
                                @endif

                            </p>

                            @if($hopdong->employee_id && $employee!=null && $hopdong->trang_thai != 'reject')
                                <p>Duyệt bởi: {{$employee->name }}</p>
                                <p>Giải ngân ngày: {{$hopdong->ngay_giai_ngan}}</p>
                                <hr>
                                @foreach(json_decode($hopdong->ky_han) as $item)
                                    <p>Kỳ hạn: {{$item->ky_han}} - {{$item->trang_thai==0? 'chưa hoàn thành':'hoàn thành'}}</p>
                                @endforeach

                            @endif

                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="infor-xacminh">
                            <h5 class="mb-4">Ảnh xác minh CMND</h5>
                            <div class="container-image">
                                @if( strcmp($hopdong->kieu_hd, 'tín chấp') === 0)
                                    @foreach($hopdong->anhXacMinh as $item)
                                        <img style="width: 100%; max-width: 200px; height: auto" class="mr-3" src="{{asset('/'.$item->path)}}" alt="IMG">
                                    @endforeach

                                @else
                                    @foreach($hopdong->anhXacMinh as $item)
                                        @if( strpos($item->name, 'anh-cmnd-') === 0 )
                                            <img style="width: 100%; max-width: 200px; height: auto" class="mr-3" src="{{asset('/'.$item->path)}}" alt="IMG">
                                        @endif
                                    @endforeach
                                @endif
                            </div>

                            @if( strcmp($hopdong->kieu_hd, 'tín chấp') !== 0)
                                <h5 class="mt-4">Thông tin về tài sản thế chấp</h5>
                                <p>{{$hopdong->tt_tai_san}}</p>

                                <div class="container-image mt-4">
                                    @foreach($hopdong->anhXacMinh as $item)
                                        @if( !(strpos($item->name, 'anh-cmnd-') === 0) )
                                            <img style="width: 100%; max-width: 200px; height: auto" class="mr-3" src="{{asset('/'.$item->path)}}" alt="IMG">
                                        @endif
                                    @endforeach
                                </div>

                            @endif

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3 mt-4 text-center">
                        <a href="{{route('user.lichsu')}}" class="btn btn-success mr-2">Trở về</a>
                        <a href="{{asset('/')}}" class="btn btn-primary">Trang chủ</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
