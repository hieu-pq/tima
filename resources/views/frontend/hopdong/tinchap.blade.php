@extends('frontend.layouts.master')

@section('title')

    Tạo hợp đồng tín chấp

@endsection

@section('content')

    <div class="main-page">

        <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container pb-6">
                <div class="row mb-6">
                    <h2 class="text-center col-md-12">
                        Form đăng ký vay tín chấp
                    </h2>
                </div>
                <form action="" class="form">
                    <div class="row">
                        <div class="col-md-7">
                            <h4 class="text-left">
                                Thông tin cá nhân
                            </h4>
                            <div class="form-group">
                                <label for="inputName">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputName" name="inputName"
                                    placeholder="Nguyễn Văn X" required>
                            </div>
                            <div class="form-group">
                                <label for="inputSex">Giới tính <span class="text-danger">*</span></label>
                                <select class="form-control" id="inputSex" name="inputSex" required>
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputDate">Ngày sinh <span class="text-danger">*</span></label>
                                        <input class="form-control" type="date" value="" id="inputDate" name="inputDate"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEducation">Trình độ học vấn</label>
                                        <select class="form-control" id="inputEducation" name="inputEducation"
                                            placeholder="">
                                            <option>Trung học phổ thông</option>
                                            <option>Cao đẳng</option>
                                            <option>Đại học</option>
                                            <option>Không</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Địa chỉ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputAddress" name="inputAddress"
                                    placeholder="..." required>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    placeholder="xxx@gmail.com" required>
                            </div>

                            <h5 class="text-left pt-4">
                                Thông tin CMND/CCCD <span class="text-danger">*</span>
                            </h5>
                            <p class="font-italic">Lưu ý: Hồ sơ của bạn sẽ không được duyệt nếu bạn nhập sai CMND/CCCD!</p>

                            <div class="form-group">
                                <label for="inputIdCard">Số CMND/CCCD<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputIdCard" name="inputIdCard"
                                    placeholder="xxx" required>
                            </div>

                            <div class="form-group">
                                <label for="dateIdCard">Ngày cấp CMND/CCCD<span class="text-danger">*</span></label>
                                <input class="form-control" type="date" value="" id="dateIdCard" name="dateIdCard" required>
                            </div>

                            <div class="form-group">
                                <label for="inputAddressIdCard">Nơi cấp CMND/CCCD<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputAddressIdCart" name="inputAddressIdCart"
                                    placeholder="..." required>
                            </div>

                            <div class="form-group">
                                <label>Mặt trước CMND<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="imgIdCardFront" name="imgIdCardFront">
                            </div>

                            <div class="form-group">
                                <label>Mặt sau CMND<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="imgIdCardBack" name="imgIdCardBack">
                            </div>

                            <div class="form-group">
                                <label>Ảnh chứa khuôn mặt<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="imgFace" name="imgFace">
                            </div>

                            <div class="form-group">

                                <h5 class="text-left pt-4"> Tài khoản ngân hàng </h5>

                                <label for="nameBank">Tên ngân hàng</label>
                                <select class="form-control" id="nameBank" name="nameBank" placeholder="">
                                    <option>Techcombank</option>
                                    <option>Vietcombank</option>
                                    <option>Sacombank</option>
                                    <option>Viettinbank</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nameBank">Số tài khoản ngân hàng<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="numBank" name="numBank" placeholder="xxx"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="inputIdCard">Tên chủ tài khoản ngân hàng<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nameIdBank" name="nameIdBank" placeholder="xxx"
                                    required>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" id="checkArgee">
                                <label class="form-group" for="checkArgee">Tôi cam kết các thông tin trên đều chính xác và
                                    đồng ý với các điều kiện đưa ra</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng kí vay</button>

                        </div>

                        <div class="col-md-5">
                            <h5 class="text-left pt-4">
                                Lựa chọn khoản vay
                            </h5>
                            <select class="form-control" name="khoan_vay" id="khoan_vay">
                                <option></option>
                                @foreach($khoanvay as $item)
                                    <option value="{{$item->id}}" data-giatri="{{$item->gia_tri}}"
                                            data-laisuat="{{$item->lai_suat}}" data-thoihan="{{$item->thoi_han}}">
                                        {{number_format($item->gia_tri)}} VNĐ -
                                        Lãi suất {{$item->lai_suat}}% -
                                        Thời hạn {{$item->thoi_han}} tháng
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
