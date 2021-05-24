@extends('frontend.layouts.master')

@section('title')
    Tạo hợp đồng thế chấp
@endsection

@section('content')

    <div class="main-page">

        <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container pb-6">
                <div class="row mb-6">
                    <div class="col-md-12">
                        @include('frontend.template-parts.status')
                        <h2 class="text-center">Hồ sơ đăng ký vay thế chấp</h2>
                        <h4 class="text-center">Điền thông tin cá nhân</h4>
                    </div>
                </div>
                <form action="{{route('the-chap.create')}}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="kieu_hd" value="thế chấp" required>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="inputName">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ho_ten" name="ho_ten"
                                       placeholder="Nguyễn Văn X" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSex">Giới tính <span class="text-danger">*</span></label>
                                        <select class="form-control" id="gioi_tinh" name="gioi_tinh" required>
                                            <option value="Khác">Khác</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Thu nhập hằng tháng</label>
                                        <input type="number" name="thu_nhap" id="thu_nhap" required class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputDate">Ngày sinh <span class="text-danger">*</span></label>
                                        <input class="form-control" type="date" value="" id="ngay_sinh" name="ngay_sinh" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hoc_van">Trình độ học vấn</label>
                                        <select class="form-control" id="hoc_van" name="hoc_van" required>
                                            <option>Trung học phổ thông</option>
                                            <option>Cao đẳng</option>
                                            <option>Đại học</option>
                                            <option>Không</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dia_chi">Địa chỉ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="dia_chi" name="dia_chi"
                                       placeholder="32 Hoang Cau, Dong Da, Ha Noi" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{auth()->user()->email}}" readonly required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="so_dt">Số điện thoại</label>
                                        <input type="text" required value="{{auth()->user()->so_dt}}" name="so_dt" id="so_dt"  class="form-control" readonly>
                                    </div>
                                </div>
                            </div>

                            <h5 class="text-left pt-4">
                                Thông tin CMND/CCCD <span class="text-danger">*</span>
                            </h5>
                            <p class="font-italic"><small>Lưu ý: Hồ sơ của bạn sẽ không được duyệt nếu bạn nhập sai CMND/CCCD,
                                    hoặc số CMND/CCCD không trùng với hình ảnh!</small></p>

                            <div class="form-group">
                                <label for="so_cmnd">Số CMND/CCCD<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="so_cmnd" name="so_cmnd"
                                       placeholder="01051539890" required>
                            </div>

                            <div class="form-group">
                                <label for="ngay_cap">Ngày cấp CMND/CCCD<span class="text-danger">*</span></label>
                                <input class="form-control" type="date" value="" id="ngay_cap" name="ngay_cap" required>
                            </div>

                            <div class="form-group">
                                <label for="noi_cap">Nơi cấp CMND/CCCD<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="noi_cap" name="noi_cap" placeholder="CA TP Ha Noi" required>
                            </div>

                            <div class="form-group">
                                <label>Mặt trước CMND<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="cmnd_truoc" name="cmnd_truoc" required>
                            </div>

                            <div class="form-group">
                                <label>Mặt sau CMND<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="cmnd_sau" name="cmnd_sau" required>
                            </div>

                            <div class="form-group">
                                <label>Ảnh chứa khuôn mặt<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="anh_mat" name="anh_mat" required>
                            </div>

                            <div class="form-group">

                                <h5 class="text-left pt-4"> Tài khoản ngân hàng </h5>

                                <label for="ten_nh">Tên ngân hàng</label>
                                <select class="form-control" id="ten_nh" name="ten_nh" required>
                                    <option value="Techcombank">Techcombank</option>
                                    <option value="Vietcombank">Vietcombank</option>
                                    <option value="Sacombank">Sacombank</option>
                                    <option value="Viettinbank">Viettinbank</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="stk_nh">Số tài khoản ngân hàng<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="stk_nh" name="stk_nh" placeholder="09193331239999" required>
                            </div>

                            <div class="form-group">
                                <label for="chutk_nh">Tên chủ tài khoản ngân hàng<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="chutk_nh" name="chutk_nh" placeholder="Nguyen Van X" required>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" id="checkAgree" name="checkAgree" required>
                                <label class="form-group" for="checkAgree">Tôi cam kết các thông tin trên đều chính xác và
                                    đồng ý với các điều kiện đưa ra</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Đăng kí vay</button>

                        </div>

                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Khoản vay mong muốn<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="khoan_vay" id="khoan_vay" min="1000000" step="500000" required placeholder="1.000.000 VND">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="">Lựa chọn thời hạn muốn vay<span class="text-danger">*</span></label>
                                    <select class="form-control" name="laisuat_id" id="laisuat_id" required>
                                        @foreach($laisuat as $item)
                                            <option id="lai_suat{{$item->id}}" value="{{$item->id}}" data-thang="{{$item->thang}}"
                                                    data-laisuat="{{$item->lai_tin_chap}}">
                                                    {{$item->thang}} tháng
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3" >
                                <div class="col-md-6" style="display: flex; justify-content: left; align-items: center;">
                                    Số tiền vay: 
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="btn btn-success" id="sotien_text" ></span>
                                </div>
                            </div>

                            <div class="row mt-3" >
                                <div class="col-md-6" style="display: flex; justify-content: left; align-items: center;">
                                    Lãi suất: 
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="btn btn-success" id="laisuat_text" ></span>
                                </div>
                            </div>

                            <div class="row mt-3" >
                                <div class="col-md-6" style="display: flex; justify-content: left; align-items: center;">
                                    Số tiền trả hàng tháng:  
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="btn btn-success"  id="tientra_text" ></span>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="tt_tai_san">Thông tin tài sản<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="tt_tai_san" name="tt_tai_san" rows="3" required></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <label for="anh_tai_san">Ảnh tài sản thế chấp<span class="text-danger">*</span></label>
                                <input type="file" multiple class="form-control" name="anh_tai_san[]" id="anh_tai_san" accept="image/*" required>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $("#laisuat_id").change(tinhlai);
        $("#khoan_vay").change(tinhlai);
        function tinhlai() {
            const khoan_vay = !!$("#khoan_vay").val() ? parseInt($("#khoan_vay").val()) : 0
            const lai_suat = parseFloat($(`#lai_suat${$("#laisuat_id").val()}`).attr('data-laisuat'))
            const so_thang = parseInt($(`#lai_suat${$("#laisuat_id").val()}`).attr('data-thang'))
            const tientra = khoan_vay / so_thang * (1 + lai_suat/100)
            $("#sotien_text").text(khoan_vay.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ' VNĐ');
            $("#laisuat_text").text(lai_suat + '% / tháng');
            $("#tientra_text").text(tientra.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ' VNĐ');
        };
    </script>
@endsection
