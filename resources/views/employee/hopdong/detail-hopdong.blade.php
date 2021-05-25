@extends('employee.layouts.app')

@section('title')
    Chi tiết hợp đồng
@endsection

@section('content')

    <div class="container-fluid mb-5">
        <div class="main-page mb-5 pb-5">
            <div class="tm-card bg-white pt-3 bg-gray-lightest" id="frm-body-borrrower">
                <div class="container pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            @include('employee.template-parts.status')
                        </div>
                    </div>
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

                                <p>Tên ngân hàng: {{$hopdong->ten_nh}} VNĐ</p>
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

                                @if($hopdong->employee_id && $employee !=null)
                                    <p>Duyệt bởi: {{$employee->name}}</p>
                                @endif
                                <p>
                                    Trạng thái:
                                    @if($hopdong->trang_thai == 'active')
                                        đang hoạt động / khách hàng chưa hoàn thành khoản vay.<br/>

                                        <p>Giải ngân ngày: {{$hopdong->ngay_giai_ngan}}</p>

                                        <h5 class="mt-4 mb-4">Kỳ hạn đóng tiền</h5>

                                        <form action="{{route('employee.admin.hopdong.kyhan', $hopdong)}}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                        @foreach(json_decode($hopdong->ky_han) as $item)
                                            <div class="form-check">
                                                <input type="checkbox" name="ky_han[]" value="{{$loop->index}}"
                                                       class="form-check-input" id="checkbox-{{$loop->index}}" @if($item->trang_thai == 1) checked @endif>
                                                <label class="form-check-label" for="checkbox-{{$loop->index}}">Kỳ hạn: {{$item->ky_han}} - {{$item->trang_thai==0? 'chưa hoàn thành':'hoàn thành'}}</label>
                                            </div>
                                        @endforeach


                                            @if(!Auth::user()->isAdmin() && $hopdong->trang_thai!= 'done')
                                                <button type="submit" class="btn btn-sm btn-primary mt-3">Cập nhật kỳ hạn</button>
                                            @endif

                                        </form>
                                    @endif

                                    @if($hopdong->trang_thai == 'pending')
                                        Đang chờ duyệt
                                    @endif

                                    @if($hopdong->trang_thai == 'reject')
                                        Đã bị từ chối
                                    @endif

                                    @if($hopdong->trang_thai == 'done')
                                        Đã hoàn thành
                                        @php
                                          $tiengoc = 0; $tienlai = 0;

                                            foreach ($hopdong->doanhthu as $item){
                                                $tiengoc += $item->tien_goc;
                                                $tienlai += $item->tien_lai;
                                             }
                                        @endphp
                                        <p>Tổng tiền gốc thu về: {{number_format($tiengoc)}} VND</p>
                                        <p>Tổng tiền lãi thu về: {{number_format($tienlai)}} VND</p>
                                    @endif

                                </p>

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

                            @if(!Auth::user()->isAdmin() && $hopdong->trang_thai!= 'done')

                                @if($hopdong->trang_thai == 'pending')

                                    <form action="{{route('employee.admin.hopdong.duyet', $hopdong)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="trang_thai" value="active">
                                        <button type="submit" class="btn btn-success">Duyệt ngay</button>
                                    </form>

                                    <form action="{{route('employee.admin.hopdong.tuchoi')}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="trang_thai" value="reject">
                                        <button type="submit" class="btn btn-danger">Từ chối</button>
                                    </form>

                                @endif

{{--                                @if($hopdong->trang_thai != 'pending' && $hopdong->trang_thai != 'done')--}}
{{--                                    <form action="" method="POST" class="d-inline">--}}
                                @if($hopdong->trang_thai != 'pending')
                                    <form action="{{route('employee.admin.hopdong.thanhly', $hopdong)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="trang_thai" value="reject">
                                        <button type="submit" class="btn btn-warning">Thanh lý ngay</button>
                                    </form>
                                @endif
                            @endif

                            <a href="{{route('employee.admin.hopdong')}}" class="btn btn-primary mr-2">Trở về</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
