@extends('frontend.layouts.master')

@section('title')
    Thông tin và hướng dẫn vay online
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
@endsection

@section('content')

    <div class="main-page">

        <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
            <div class="container">
                <div class="row _webPC" id="create-customer">
                    <div class="col-md-7" id="title_vaynhanhlaimong">
                        <div class="col-md-12 mb-2">
                            <img src="{{asset('/frontend')}}/Template1/images/icon-form-vay-nhanh.jpeg" /> <b style="padding-left: 10px;">CHỈ CẦN giấy đăng ký/cà vẹt xe máy</b>
                        </div>
                        <div class="col-md-12 mb-2">
                            <img src="{{asset('/frontend')}}/Template1/images/icon-form-vay-nhanh.jpeg" /> <b style="padding-left: 10px;">Vay 3 triệu - 30 triệu trong 12 tháng</b>
                        </div>
                        <div class="col-md-12 mb-2">
                            <img src="{{asset('/frontend')}}/Template1/images/icon-form-vay-nhanh.jpeg" /> <b style="padding-left: 10px;">Không thẩm định nhà ở - nơi làm</b>
                        </div>
                        <div class="col-md-12 mb-2">
                            <img src="{{asset('/frontend')}}/Template1/images/icon-form-vay-nhanh.jpeg" /> <b style="padding-left: 10px;">Không chứng minh thu nhập</b>
                        </div>
                        <div class="col-md-12 mb-2">
                            <img src="{{asset('/frontend')}}/Template1/images/icon-form-vay-nhanh.jpeg" /> <b style="padding-left: 10px;">Lãi suất 1,5%/tháng (18%/năm)</b>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="col-md-12">
                            <img src="{{asset('/frontend')}}/Template1/images/vanh-nhanh-lai-mong-2h.jpeg" class="w-100"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--5 bước để nhận và thanh toán khoản vay--->

        <div class="tm-card bg-white py-6">
            <div class="container">
                <h2 class="tm-card__heading text-center text-primary mb-6">
                    4 Bước để nhận khoản vay
                </h2>

                <div class="tm-card__body tm-steps2">
                    <div class="row justify-content-center">

                        <div class="tm-steps2__item col col-12 col-sm-6 col-lg-4 col-xl-auto w-xl-20 text-center fs-14 mb-5 mb-xl-0">
                            <div class="tm-steps2__thumb mb-2 mx-auto">
                                <i class="tm-steps2__icon icon-monitor-file"></i>
                            </div>
                            <div class="tm-steps2__title fw-4 text-uppercase fs-14 mb-1">
                                <a class="tm-steps2__btn btn fw-6" href="#">
                                    Đăng ký vay
                                </a>
                            </div>
                            <p class="mb-0 px-xl-3">
                                Hoàn tất điền thông tin trong 30 giây
                            </p>
                        </div>


                        <div class="tm-steps2__item col col-12 col-sm-6 col-lg-4 col-xl-auto w-xl-20 text-center fs-14 mb-5 mb-xl-0">
                            <div class="tm-steps2__thumb mb-2 mx-auto">
                                <i class="tm-steps2__icon icon-user-switch"></i>
                            </div>
                            <div class="tm-steps2__title fw-4 text-uppercase fs-14 mb-1">
                                <a class="tm-steps2__btn btn fw-6" href="#">
                                    Chuẩn bị hồ sơ
                                </a>
                            </div>
                            <p class="mb-0 px-xl-3">
                                Giấy đăng ký xe máy hoặc Giấy đăng ký ô tô
                            </p>
                        </div>


                        <div class="tm-steps2__item col col-12 col-sm-6 col-lg-4 col-xl-auto w-xl-20 text-center fs-14 mb-5 mb-xl-0">
                            <div class="tm-steps2__thumb mb-2 mx-auto">
                                <i class="tm-steps2__icon icon-note-edit"></i>
                            </div>
                            <div class="tm-steps2__title fw-4 text-uppercase fs-14 mb-1">
                                <a class="tm-steps2__btn btn fw-6" href="#">
                                    Xét duyệt
                                </a>
                            </div>
                            <p class="mb-0 px-xl-3">
                                Nhận kết quả nhanh chóng sau khi gửi hồ sơ
                            </p>
                        </div>


                        <div class="tm-steps2__item col col-12 col-sm-6 col-lg-4 col-xl-auto w-xl-20 text-center fs-14 mb-5 mb-xl-0">
                            <div class="tm-steps2__thumb mb-2 mx-auto">
                                <i class="tm-steps2__icon icon-hand-dollar"></i>
                            </div>
                            <div class="tm-steps2__title fw-4 text-uppercase fs-14 mb-1">
                                <a class="tm-steps2__btn btn fw-6" href="#">
                                    Nhận khoản vay
                                </a>
                            </div>
                            <p class="mb-0 px-xl-3">
                                Nhận tiền qua tài khoản ngân hàng
                            </p>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    {{--    Huownsg dan vay online--}}
        <div class="tm-card bg-white py-6 bg-gray-lightest">
            <div class="container">
                <h2 class="tm-card__heading text-center mb-6">
                    <b>Hướng dẫn chi tiết cách vay tiền online nhanh trong ngày tại TIMA</b>
                </h2>
                <label class="form-control-label col-md-12">
                    Tôi có đủ điều kiện <a href="/vay-tien-online" style="color: blue;" target="_blank">vay tiền online</a> không? Thủ tục vay gồm những giấy tờ gì? Làm cách nào để tôi vay được tiền? Đây chắc chắn là những câu hỏi mà bất cứ người đi vay nào cũng thắc mắc. Để giải đáp, hãy cùng TIMA tham khảo ngay các thông tin dưới đây:
                </label>

                <div class="form-control-label col-md-12" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                    <img src="/Template1/images/IndexBorrow/vay-tien-online-tima.jpg" alt="Vay tiền online" id="_imd_hd_vay_tien_online" />
                    <div class="col-md-12">
                        <label style="color: gray; font-size: 13px; font-style: italic;">
                            Hướng dẫn vay tiền online tại Tima
                        </label>
                    </div>
                </div>

                <label class="form-control-label col-md-12">
                    <h3 class="_span-label">
                        1. Bạn có thể vay tiền online bằng hình thức nào?
                    </h3>
                </label>
                <label class="form-control-label col-md-12">
                    Nhằm đáp ứng nhu cầu vay online cấp tốc, vay tiền gấp trong ngày của khách hàng, TIMA hiện đang cung cấp 3 gói sản phẩm vay ưu việt sau:
                </label>

                <label class="form-control-label col-md-12">
                    <b>
                        Vay tiền online theo cavet (đăng ký) xe máy:
                    </b>
                </label>
                <label class="form-control-label col-md-12">
                    . Bạn được <a href="/vay-tien-bang-cavet-xe-may.html" style="color: blue;" target="_blank">vay tiền bằng cavet xe máy</a> online nhanh từ 3 - 30 triệu chỉ cần có giấy đăng ký xe máy.
                </label>
                <label class="form-control-label col-md-12">
                    . Nhận tiền ngay chỉ trong vòng 2 giờ làm việc.
                </label>
                <label class="form-control-label col-md-12">
                    . Thời hạn vay linh hoạt trong 12 tháng.
                </label>
                <label class="form-control-label col-md-12">
                    . Vay vốn không cần chứng minh thu nhập, không cần thẩm định nhà ở hay nơi làm việc.
                </label>
                <label class="form-control-label col-md-12">
                <span class="_span-label">
                    ** Lưu ý:
                </span>
                    Yêu cầu niên hạn sử dụng xe máy không quá 10 năm tính từ lúc cấp ĐKX.
                </label>
                <label class="form-control-label col-md-12">
                    <b>Vay tiền theo cavet (đăng ký) xe ô tô:</b>
                </label>
                <label class="form-control-label col-md-12">
                    . Bạn được <a href="/vay-tien-bang-dang-ky-xe-oto.html" style="color: blue;" target="_blank">vay tiền bằng đăng ký xe ô tô</a> online nhanh từ 20 - 300 triệu chỉ cần có giấy đăng ký xe ô tô
                </label>
                <label class="form-control-label col-md-12">
                    . Nhận tiền ngay chỉ trong vòng 2 giờ làm việc.
                </label>
                <label class="form-control-label col-md-12">
                    . Thời hạn vay 3 tháng - 6 tháng - 9 tháng - 12 tháng.
                </label>
                <label class="form-control-label col-md-12">
                    . Với khoản vay < 100 triệu, khách hàng không cần chứng minh thu nhập.
                </label>
                <label class="form-control-label col-md-12">
                <span class="_span-label">
                    ** Lưu ý:
                </span>
                    TIMA chấp nhận đa dạng các dòng xe: ô tô con, ô tô tải, xe taxi, ô tô khách… Nhưng không hỗ trợ xe Trung Quốc.
                </label>
                <label class="form-control-label col-md-12">
                    Đặc biệt, khách hàng chọn vay qua TIMA có thể hoàn toàn yên tâm về mức lãi suất, tối đa chỉ 1,5%/tháng (18%/năm) cho 2 gói vay bằng đăng ký xe trên. Lãi được tính theo dư nợ thực tế, số tiền bạn phải trả sẽ giảm dần qua các kỳ thanh toán.
                </label>
                <label class="form-control-label col-md-12">
                    <h3 class="_span-label">
                        2. Điều kiện vay tiền trực tuyến (vay online) tại TIMA
                    </h3>
                </label>
                <label class="form-control-label col-md-12">
                    Điều kiện vay tiền online tại TIMA rất đơn giản, đó là lý do 95% người đăng ký trên TIMA được duyệt vay ngay lập tức khi, bạn chỉ cần đáp ứng các yêu cầu cơ bản dưới đây:
                </label>
                <label class="form-control-label col-md-12">
                    . Là công dân Việt Nam trong độ tuổi lao động (18 - 60 tuổi).
                </label>
                <label class="form-control-label col-md-12">
                    . Đang sinh sống và làm việc thường xuyên tại khu vực được TIMA hỗ trợ (Hà Nội và TP.HCM).
                </label>
                <label class="form-control-label col-md-12">
                    . Khách hàng vay theo đăng ký xe yêu cầu sở hữu tài sản xe hợp pháp hoặc được người thân ủy quyền sử dụng tài sản 100%.
                </label>
                <div class="form-control-label col-md-12" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                    <img src="/Template1/images/IndexBorrow/vay-tien-nhanh-online.jpg" alt="Vay tiền online" id="_img_vay_tien_online" />
                    <div class="col-md-12">
                        <label style="color: gray; font-size: 13px; font-style: italic;">
                            Điều kiện, thủ tục vay tiền online tại Tima
                        </label>
                    </div>
                </div>


                <label class="form-control-label col-md-12">
                    <h3 class="_span-label">
                        3. Cách làm hồ sơ vay tiền online trên TIMA
                    </h3>
                </label>
                <label class="form-control-label col-md-12">
                    Hồ sơ vay tiền online qua Tima được tinh giản tối đa, bạn chỉ cần chuẩn bị các loại thông tin, giấy tờ sau:
                </label>
                <ul>
                    <li>
                        Ảnh chụp bản gốc CMND/hộ chiếu/thẻ căn cước.
                    </li>
                    <li>
                        Ảnh chụp bản gốc sổ hộ khẩu/sổ tạm trú KT3.
                    </li>
                    <li>
                        Giấy đăng ký xe máy bản gốc (chấp nhận xe không chính chủ).
                    </li>
                    <li>
                        Hoặc giấy đăng ký xe ô tô/HĐ mua bán, ủy quyền xe và giấy đăng kiểm.
                    </li>
                </ul>
                <label class="form-control-label col-md-12">
                    Để <a href="https://tima.vn/tin-tuc/vay-tien-nhanh-478.html" target="_blank" class="a-text-decoration"> vay tiền nhanh</a>, bạn chỉ cần điền thông tin vào mẫu đăng ký, nhân viên của TIMA sẽ liên hệ tư vấn sau 5 phút, duyệt vay và giải ngân trong vòng 2 giờ làm việc.
                </label>
                <label class="form-control-label col-md-12">
                    <b>Yên tâm, thông tin của bạn sẽ được chúng tôi bảo mật 100%!</b>
                    <br />
                    TIMA - Vay tiền online nhanh, uy tín, trả góp hàng tháng với lãi suất thấp, giải ngân trong ngày!
                </label>
            </div>
        </div>

    </div>

{{--    Goi vay --}}
    <div class="tm-card bg-white pt-6 bg-gray-lightest" id="frm-body-borrrower">
        <div class="container">
            <h2 class="tm-card__heading text-center text-gray-dark mb-6" style="font-size: 2.125rem !important;">
                <b>Chọn gói sản phẩm vay tiền online </b>
            </h2>
            <div class="tm-card__body">
                <div class="cvbox mb-8">
                    <div class="cvbox__heading bg-gray-lightest text-uppercase">
                        Vay cá nhân
                    </div>
                    <div class="cvbox__body p-3 p-md-4">
                        <div class="row no-gutters justify-content-center">
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-tien-bang-cavet-xe-may.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/xemay.png" alt="Vay theo đăng ký xe máy">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay bằng đăng ký xe máy
                                    </div>
                                </a>
                            </div>

                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-tien-bang-dang-ky-xe-oto.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/dangkyoto.png" alt="Vay đăng ký xe ô tô">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay bằng đăng ký ô tô
                                    </div>
                                </a>
                            </div>

                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-tin-chap-theo-luong.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/luong.png" alt="Vay tín chấp theo lương">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay tín chấp
                                    </div>
                                </a>
                            </div>

                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-tien-bang-so-ho-khau.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/sohokhau.png" alt="Vay theo  sổ hộ khẩu" />
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay bằng sổ hộ khẩu
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
                <div style="display:none" class="cvbox mb-8">
                    <div class="cvbox__heading bg-gray-lightest text-uppercase">
                        Vay ngân hàng
                    </div>
                    <div class="cvbox__body p-3 p-md-4">
                        <div class="row no-gutters justify-content-center">
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-mua-nha-tra-gop.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/muanha.png" alt="Vay mua nhà">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay mua nhà
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-mua-o-to-tra-gop.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/muaoto.png" alt="Vay mua oto">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay mua ô tô
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-theo-bao-hiem-nhan-tho.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/baohiemnhantho.png" alt="Vay theo Bảo hiểm nhân thọ">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay theo <br> Bảo hiểm nhân thọ
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-the-chap-so-do-nha-dat.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/thechapsodo.png" alt="Thế chấp sổ đỏ">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay theo <br> Thế chấp sổ đỏ
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-ngan-hang/vay-tieu-dung-32.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/thechapoto.png" alt="Vay theo Thế chấp oto">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay theo <br> Thế chấp ô tô
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-ngan-hang/vay-tieu-dung-6.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/tieudungtinchap.png" alt="Vay Tiêu dùng tín chấp">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay <br> Tiêu dùng
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex col-6 col-sm-4 col-md-3 col-lg-auto w-lg-1-7">
                                <a class="cvbox__item p-3" href="/vay-ngan-hang/vay-tieu-dung-31.html" target="_blank">
                                    <img class="img-fluid w-100 mx-auto mb-3" src="/Template1/images/canvay/v2-1/icons/sotietkiem.png" alt="Vay theo Sổ tiết kiệm">
                                    <div class="fw-4 fs-14 text-center fw-3 mb-0">
                                        Vay theo <br> Sổ tiết kiệm
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
