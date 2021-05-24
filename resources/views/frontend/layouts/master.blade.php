<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="/Template1/images/favicon.ico">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="Tima là sàn kết nối tài chính Lớn Nhất, Uy Tín Nhất Việt Nam, kết nối hàng nghìn người vay và người cho vay mỗi ngày. ✅ Thủ tục vay đơn giản, Vay Online, lãi suất hấp dẫn, giải ngân trong ngày." />
    <meta name="keywords" content="Vay tima, vay tiền nóng, vay tiền nhanh trong ngày, vay tiền online, vay tín chấp, vay theo đăng ký xe máy, vay theo đăng ký xe ô tô, vay theo cà vẹt xe, vay tín chấp theo lương, vay theo sổ hộ khẩu" />
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="{{asset('/frontend')}}/Template1/css/style.css?t=1" type="text/css" />
    <link rel="stylesheet" href="{{asset('/frontend')}}/Template1/css/Custom.css?t=1" type="text/css" />
    <link rel="stylesheet" href="{{asset('/frontend')}}/Template1/css/theme-1.css" type="text/css" />
    <link href="{{asset('/frontend')}}/Template1/css/fontawesome.css" rel="stylesheet" />
    <meta property="og:title" content="TIMA - SÀN KẾT NỐI TÀI CHÍNH LỚN NHẤT VIỆT NAM" />
    <script>
        var isMobile=0;
        var tmIp ='113.23.50.78';
    </script>
    <script src="{{asset('/frontend')}}/Template1/js/fontawesome.js"></script>

    @yield('css')

</head>

<body>
<div class="page-wrapper page-home">

    <header id="header" class="header">
        <div class="container d-flex flex-row flex-lg-column">
            <div class="topbar header__topbar hidden-md-down">
                <ul class="topbar-list mb-0">
                    @auth()
                        <li class="topbar-list__item disabled">
                            <span><strong>{{auth()->user()->name}}</strong></span>
                        </li>
                        <li class="topbar-list__item">
                            <a rel="nofollow" class="topbar-list__link" href="/profile">
                                Thông tin người dùng
                            </a>
                        </li>

                        <li class="topbar-list__item">
                            <a rel="nofollow" class="topbar-list__link" href="/lich-su">
                                Lịch sử hợp đồng
                            </a>
                        </li>

                        <li class="topbar-list__item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                    <button class="topbar-list__link border-0 bg-white" style="cursor: pointer" type="submit">Đăng xuất</button>
                                </form>
                        </li>
                    @else
                        <li class="topbar-list__item">
                            <a rel="nofollow" href="{{route('register')}}" class="topbar-list__link">Đăng ký</a>
                        </li>
                        <li class="topbar-list__item">
                            <a class="topbar-list__link" href="{{route('login')}}">
                                Đăng nhập
                            </a>
                        </li>
                    @endauth

                    <li class="topbar-list__item">
                        <a rel="nofollow" class="topbar-list__link text-primary fs-16 d-flex align-items-center" href="tel:1900633688">
                            <i class="icon-phone-gray mr-1"></i>
                            <strong>035.943.4104</strong>
                        </a>
                    </li>
                </ul>
            </div>

            <nav class="navbar navbar-toggleable-md w-100 p-0">
                <button id="main-nav-toggle" class="hamburger hamburger--slider main-nav-toggle collapsed hidden-lg-up"
                        data-toggle="collapse" data-target="#main-nav-collapse" aria-controls="main-nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box d-block">
                    <span class="hamburger-inner"></span>
                </span>
                    <span class="fs-11" style="">Menu</span>
                </button>

                <a title="Tima vay trong ngày" class="navbar-brand header__logo py-0" href="/">
                    <img class="header__logo-img img-fluid" src="{{asset('/frontend')}}/Template1/images/logo1.png" alt="Tima vay trong ngày">
                </a>
                <a class="header__call header__call--small media hidden-lg-up ml-3" href="tel:1900633688">
                    <i class="header__call-icon align-self-center icon-phone-lg d-flex mr-2"></i>
                    <div class="media-body align-self-center">
                        <div class="header__call-number" style="font-size: 20px;">
                            1900 633 688
                        </div>
                        <div class="header__call-time">
                            07:30 - 18:30, Thứ Hai - CN
                        </div>
                    </div>
                </a>
                <div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="main-nav navbar-nav ml-auto mb-4">
                        <li class="nav-item active ">
                            <a class="nav-link" href="/">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link" href="/vay-tin-chap">Đăng ký vay tín chấp</a>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link" href="/vay-the-chap">Đăng ký vay thế chấp</a>
                        </li>

                        <li class="nav-item shomb  ">
                            <a class="nav-link" href="{{route('chinhsach')}}">Chính sách</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

    </header>

    @yield('content')

    <style>
        .tm-brands__link img {
            opacity: .5;
            filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
            filter: gray;
            -webkit-filter: grayscale(100%);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .tm-brands__link img:hover {
            opacity: .9;
            filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0'/></filter></svg>#grayscale");
            filter: gray;
            -webkit-filter: grayscale(0%);
        }

        .main-slider__bg:before {
            background-color: #282332 !important;
            opacity: 0.2 !important;
        }

        .main-slider__item:after {
            background: none;
        }

        @media (max-width: 414px) {
            #popupvideo {
                position: relative;
                padding-bottom: 100%;
                padding-top: 0px;
                height: 0;
                display: block;
                overflow: hidden;
            }
        }
    </style>
    <footer id="footer" class="footer bg-white">
        <div class="container">
            <nav class="footer__nav footer-nav">
                <ul class="list-unstyled d-flex mb-0" style="display: contents!important;">
                    <li class="footer-nav__item">
                        <a class="footer-nav__link" href="/">Trang chủ</a>
                    </li>
                    <li class="footer-nav__item">
                        <a class="footer-nav__link" href="/Borrower/">Cần vay</a>
                    </li>
                    <li class="footer-nav__item">
                        <a class="footer-nav__link" href="/Lender/">Cho vay</a>
                    </li>
                    <li class="footer-nav__item">
                        <a class="footer-nav__link" href="/Home/About/">Về Tima</a>
                    </li>
                    <li class="footer-nav__item">
                        <a class="footer-nav__link" href="/tin-tuc/nguoi-vay">Kiến thức vay</a>
                    </li>
                    <li class="footer-nav__item hidden-sm-down">
                        <a class="footer-nav__link" href="/huong-dan-giao-dich-tren-san-tima.html">Hỗ trợ</a>
                    </li>
                </ul>
            </nav>
            <hr class="mt-0 mb-4">

            <div class="col-12 row" id="_footer_pc">
                <div class="col-7 mb-3 fs-16" style="margin-left: -17px;">
                    <label style="font-weight: 600">Thông tin liên hệ</label>
                </div>
                <div class="col-2 mb-3 fs-16" style="text-align: end; margin-left: -10px;">
                    <label style="font-weight: 600">Tải App</label>
                </div>
                <div class="col-12 row">
                    <div class="col-4">
                        <div class="pr-xl-4">
                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#hanoi" style="cursor: pointer;">
                                    Danh sách PGD Hà Nội
                                    <i id="_i_ha_noi" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div class="collapse" id="hanoi">
                                    <div class="row gutter-2">
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">960 ĐƯỜNG LÁNG - P. LÁNG THƯỢNG - Q. ĐỐNG ĐA</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(024) 7302 8822">(024) 7302 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">199 HỒ TÙNG MẬU - P. CẦU DIỄN - Q. NAM TỪ LIÊM</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(024) 7303 8822">(024) 7303 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">958 TRƯƠNG ĐỊNH - P. ĐỊNH CÔNG - Q. HOÀNG MAI</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(024) 7305 8822">(024) 7305 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">120 KHÂM THIÊN - P. TRUNG PHỤNG - Q. ĐỐNG ĐA</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(024) 7306 8822">(024) 7306 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">423 NGUYỄN VĂN CỪ - P. NGỌC LÂM - Q.LONG BIÊN</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(024) 7307 8822">(024) 7307 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#hochiminh" style="cursor: pointer;">
                                    Danh sách PGD Hồ Chí Minh
                                    <i id="_i_ho_chi_minh" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div id="hochiminh" class="collapse">
                                    <div class="row gutter-2">
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">499 LÊ QUANG ĐỊNH - PHƯỜNG 1 - Q. GÒ VẤP</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">519A TÂN KỲ TÂN QUÝ - Q. TÂN PHÚ</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7303 8822">(028) 7303 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">273 PHAN HUY ÍCH - PHƯỜNG 2 - Q. GÒ VẤP</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7304 8822">(028) 7304 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">180 LŨY BÁN BÍCH - P. HÒA THANH - Q. TÂN PHÚ</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7305 8822">(028) 7305 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">256 LÊ VĂN KHƯƠNG, TÂN THỚI AN, Q.12, QUẬN 12</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7309 6622">(028) 7309 6622</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">445 ÂU CƠ, P. PHÚ TRUNG, Q.TÂN PHÚ</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(0287) 307 6622">(0287) 307 6622</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#bacninh" style="cursor: pointer;">
                                    Danh sách PGD Bắc Ninh
                                    <i id="_i_bac_ninh" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div class="collapse" id="bacninh">
                                    <div class="row gutter-2">
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">38B PHÚC ĐỨC, PHƯỜNG VÕ CƯỜNG, TP BẮC NINH</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#haiduong" style="cursor: pointer;">
                                    Danh sách PGD Hải Dương
                                    <i id="_i_hai_duong" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div class="collapse" id="haiduong">
                                    <div class="row gutter-2">
                                        <div class="col-6 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                    <span class="text-uppercase">Số 5 Hồng Quang, P. Nguyễn Trãi, TP. Hải Dương</span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-xl-4">
                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#hoiso" style="cursor: pointer;">
                                    Hội sở
                                    <i id="_i_hoi_so" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div class="collapse" id="hoiso">
                                    <div class="row gutter-2">
                                        <div class="col-12 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                        <span class="text-uppercase">
                                                            Số 275, Nguyễn Trãi, Thanh Xuân, Hà Nội <br>
                                                        </span> <br>
                                                    <div class="storelist-phonenumber">
                                                        Giấy CN ĐKDN số 0107333139 được cấp bởi Sở Kế hoạch và Đầu tư TP. Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#VPmiennam" style="cursor: pointer;">
                                    VP đại diện miền Nam
                                    <i id="_i_vp_mien_nam" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div class="collapse" id="VPmiennam">
                                    <div class="row gutter-2">
                                        <div class="col-12 mb-3">
                                            <div class="media">
                                                <i class="icon-map-marker"></i>
                                                <div class="media-body">
                                                        <span class="text-uppercase">
                                                            Tầng M, Tòa nhà IPC TOWER, 1489 Nguyễn Văn Linh, Phường Tân Phong, Quận 7, TP HCM <br>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="storelist">
                                <div class="storelist-title" data-toggle="collapse" data-target="#supportcustomer" style="cursor: pointer;">
                                    Hỗ trợ khách hàng
                                    <i id="_i_support_customer" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                                </div>
                                <div class="collapse" id="supportcustomer">
                                    <div class="col-12">
                                        <a class="d-flex align-items-center" href="tel:1900633688">
                                            <label>Hotline: 1900.633688</label>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="d-flex align-items-center" href="/huong-dan-giao-dich-tren-san-tima.html">
                                            <label>FAQ: Câu hỏi thường gặp</label>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="d-flex align-items-center" href="mailto:support@tima.vn">
                                            <label>Support: support@tima.vn</label>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="d-flex align-items-center" href="https://www.facebook.com/tima.vn">
                                            <label>Facebook: tima.vn</label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="col-12 row">
                            <div class="col-6">
                                <label style="color: gray;">My Tima</label><br />
                                <a href="http://onelink.to/tima" target="_blank">
                                    <img src="/Template1/images/QRAppTima/onelink_mytima.png" />
                                </a>
                            </div>
                            <div class="col-6">
                                <label style="color: gray;">Tima Lender</label><br />
                                <a href="http://onelink.to/timalender" target="_blank">
                                    <img src="/Template1/images/QRAppTima/onelink_lender.png" />
                                </a>
                            </div>
                        </div>
                        <div class="col-12" style="padding-top: 30px;">
                            <div class="mb-2 fs-16">
                                <label style="color: gray;">Bảo mật bởi VSEC</label>
                            </div>
                            <img src="/template1/images/vsec.png" width="108" alt="Vsec" title="Vsec">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" id="_footer_mobile">
                <div class="= mb-3 fs-16" style="margin-left: -17px;">
                    <label style="font-weight: 600">Thông tin liên hệ</label>
                </div>
                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#hanoimobile" style="cursor: pointer;">
                        Danh sách PGD Hà Nội
                        <i id="_i_ha_noi_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="hanoimobile">
                        <div class="row gutter-2">
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">960 ĐƯỜNG LÁNG - P. LÁNG THƯỢNG - Q. ĐỐNG ĐA</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(024) 7302 8822">(024) 7302 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">199 HỒ TÙNG MẬU - P. CẦU DIỄN - Q. NAM TỪ LIÊM</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(024) 7303 8822">(024) 7303 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">958 TRƯƠNG ĐỊNH - P. ĐỊNH CÔNG - Q. HOÀNG MAI</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(024) 7305 8822">(024) 7305 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">120 KHÂM THIÊN - P. TRUNG PHỤNG - Q. ĐỐNG ĐA</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(024) 7306 8822">(024) 7306 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">423 NGUYỄN VĂN CỪ - P. NGỌC LÂM - Q.LONG BIÊN</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(024) 7307 8822">(024) 7307 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#hochiminhmobile" style="cursor: pointer;">
                        Danh sách PGD Hồ Chí Minh
                        <i id="_i_ho_chi_minh_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div id="hochiminhmobile" class="collapse">
                        <div class="row gutter-2">
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">499 LÊ QUANG ĐỊNH - PHƯỜNG 1 - Q. GÒ VẤP</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">519A TÂN KỲ TÂN QUÝ - Q. TÂN PHÚ</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7303 8822">(028) 7303 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">273 PHAN HUY ÍCH - PHƯỜNG 2 - Q. GÒ VẤP</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7304 8822">(028) 7304 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">180 LŨY BÁN BÍCH - P. HÒA THANH - Q. TÂN PHÚ</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7305 8822">(028) 7305 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">256 LÊ VĂN KHƯƠNG, TÂN THỚI AN, Q.12, QUẬN 12</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7309 6622">(028) 7309 6622</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">445 ÂU CƠ, P. PHÚ TRUNG, Q.TÂN PHÚ</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(0287) 307 6622">(0287) 307 6622</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#bacninhmobile" style="cursor: pointer;">
                        Danh sách PGD Bắc Ninh
                        <i id="_i_bac_ninh_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="bacninhmobile">
                        <div class="row gutter-2">
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">38B PHÚC ĐỨC, PHƯỜNG VÕ CƯỜNG, TP BẮC NINH</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#haiduongmobile" style="cursor: pointer;">
                        Danh sách PGD Hải Dương
                        <i id="_i_hai_duong_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="haiduongmobile">
                        <div class="row gutter-2">
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                        <span class="text-uppercase">Số 5 Hồng Quang, P. Nguyễn Trãi, TP. Hải Dương</span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#vinhphucmobile" style="cursor: pointer;">
                        Danh sách PGD Vĩnh Phúc
                        <i id="_i_vinh_phuc_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="vinhphucmobile">
                        <div class="row gutter-2">
                            <div class="col-6 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                            <span class="text-uppercase">
                                                Số 6B, đường Phạm Văn Đồng, P.Tích Sơn, Tp Vĩnh Yên, Vĩnh Phúc
                                            </span> <br>
                                        <div class="storelist-phonenumber">
                                            Hotline: <a href="tel:(028) 7302 8822">(028) 7302 8822</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#hoisomobile" style="cursor: pointer;">
                        Hội sở
                        <i id="_i_hoi_so_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="hoisomobile">
                        <div class="row gutter-2">
                            <div class="col-12 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                            <span class="text-uppercase">
                                                Số 275, Nguyễn Trãi, Thanh Xuân, Hà Nội <br>
                                            </span> <br>
                                        <div class="storelist-phonenumber">
                                            Giấy CN ĐKDN số 0107333139 được cấp bởi Sở Kế hoạch và Đầu tư TP. Hà Nội
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#VPmiennammobile" style="cursor: pointer;">
                        VP đại diện miền Nam
                        <i id="_i_vp_mien_nam_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="VPmiennammobile">
                        <div class="row gutter-2">
                            <div class="col-12 mb-3">
                                <div class="media">
                                    <i class="icon-map-marker"></i>
                                    <div class="media-body">
                                            <span class="text-uppercase">
                                                Tầng M, Tòa nhà IPC TOWER, 1489 Nguyễn Văn Linh, Phường Tân Phong, Quận 7, TP HCM <br>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="storelist">
                    <div class="storelist-title" data-toggle="collapse" data-target="#supportcustomermobile" style="cursor: pointer;">
                        Hỗ trợ khách hàng
                        <i id="_i_support_customer_mobile" style="float: right; font-size: 15px; color: #ed522e;" class="fas fa-caret-right"></i>
                    </div>
                    <div class="collapse" id="supportcustomermobile">
                        <div class="col-12">
                            <a class="d-flex align-items-center" href="tel:1900633688">
                                <label>Hotline: 1900.633688</label>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-flex align-items-center" href="/huong-dan-giao-dich-tren-san-tima.html">
                                <label>FAQ: Câu hỏi thường gặp</label>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-flex align-items-center" href="mailto:support@tima.vn">
                                <label>Support: support@tima.vn</label>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-flex align-items-center" href="https://www.facebook.com/tima.vn">
                                <label>Facebook: tima.vn</label>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-2 fs-16" style="margin-left: -30px;">
                    <label style="font-weight: 600">Giải thưởng</label>
                </div>
                <div class="d-flex align-items-end row">
                    <div class="col-4">
                        <img class="mr-4" src="/template1/images/vinasa.png" width="51" alt="vinasa" title="Vinasa">
                    </div>
                    <div class="col-4">
                        <img src="/template1/images/saokhue.png" width="26" alt="Sao khuê" title="Sao khuê">
                    </div>
                </div>

                <div class="col-12 mb-2 fs-16" style="margin-left: -30px; padding-top: 20px;">
                <label style="font-weight: 600">Bảo mật bởi VSEC</label>
            </div>
            <div class="col-12">
                <img src="/template1/images/vsec.png" width="108" alt="Vsec" title="Vsec">
            </div>

            <div class="col-12 mb-3 fs-16" style="margin-left: -30px; padding-top: 20px;">
                <label style="font-weight: 600">Tải App</label>
            </div>
            <div class="col-12 row">
                <div class="col-6">
                    <label style="color: gray;">My Tima</label><br />
                    <a href="http://onelink.to/tima" target="_blank">
                        <img src="/Template1/images/QRAppTima/onelink_mytima.png" />
                    </a>
                </div>
                <div class="col-6">
                    <label style="color: gray;">Tima Lender</label><br />
                    <a href="http://onelink.to/timalender" target="_blank">
                        <img src="/Template1/images/QRAppTima/onelink_lender.png" />
                    </a>
                </div>
            </div>
        </div>
            <p class="mb-0 text-gray-light text-center pb-2 pt-5">
                © 2021 Bản quyền thuộc về Tima
            </p>
        </div>
    </footer>

</div>

<script src="{{asset('/frontend')}}/Template1/js/jquery.min.js?t=4"></script>
<script src="{{asset('/frontend/')}}/Template1/js/tether.min.js?t=4"></script>
<script src="{{asset('/frontend/')}}/Template1/js/bootstrap.min.js?t=4"></script>
<script src="{{asset('/frontend')}}/Template1/js/swiper.jquery.min.js?t=4"></script>
<script src="{{asset('/frontend')}}/Template1/js/bootstrap-slider.min.js?t=4"></script>
<script src="{{asset('/frontend')}}/Template1/js/bootstrap-datepicker.min.js?t=4"></script>
<script src="{{asset('/frontend')}}/Template1/js/jquery.incremental-counter.min.js?t=4"></script>
<script src="{{asset('/frontend')}}/Template1/js/custom.js?t=6"></script>
<script src="{{asset('/frontend')}}/Template1/js/common.js?t=6"></script>

<!-- Noty-->
<script type="text/javascript" src="{{asset('/frontend')}}/Template1/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="{{asset('/frontend')}}/Template1/js/noty/layouts/top.js"></script>
<script type="text/javascript" src="{{asset('/frontend')}}/Template1/js/noty/themes/default.js"></script>
<script src="{{asset('/frontend')}}/Template/js/default.js?t=132658210940170439"></script>

<script src="{{asset('/frontend')}}/Scripts/lazysizes.min.js"></script>


<script>
    if (getCookie('nghile') == '') {
        setCookie('nghile', "nghile", 1);
        $("#nghile").modal('show');
    }

    $(document).ready(function () {
        var tm_brands_swiper_1 = new Swiper('#tm-brands-swiper-1', {
            nextButton: '#tm-brands__next',
            prevButton: '#tm-brands__prev',
            loop: true,
            slidesPerView: 5,
            spaceBetween: 80,
            autoplay: 5000,
            breakpoints: {
                991: {
                    slidesPerView: 4
                },
                575: {
                    slidesPerView: 3,
                    spaceBetween: 60
                }
            }
        });

    });
</script>

<script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var homeSwiper = new Swiper('#main-slider-swiper', {
            effect: 'fade',
            autoplay: 3000,
            autoplayDisableOnInteraction: false,
            slidesPerView: 1
        });
        $('#_footer_mobile').show();
        $('#_footer_pc').hide();
        $(document).ready(function () {
            $('#hanoimobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-right');
                $('#_i_ha_noi_mobile').addClass('fa-caret-down');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#hanoimobile').on('hide.bs.collapse', function () {
                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');
            });

            $('#hochiminhmobile').on('shown.bs.collapse', function () {
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-right');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-down');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#hochiminhmobile').on('hide.bs.collapse', function () {
                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');
            });

            $('#bacninhmobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-right');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-down');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#bacninhmobile').on('hide.bs.collapse', function () {
                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');
            });

            $('#haiduongmobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-right');
                $('#_i_hai_duong_mobile').addClass('fa-caret-down');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#haiduongmobile').on('hide.bs.collapse', function () {
                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');
            });

            $('#vinhphucmobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-right');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-down');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#vinhphucmobile').on('hide.bs.collapse', function () {
                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');
            });

            $('#hoisomobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-right');
                $('#_i_hoi_so_mobile').addClass('fa-caret-down');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#hoisomobile').on('hide.bs.collapse', function () {
                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');
            });

            $('#VPmiennammobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#supportcustomermobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-right');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-down');

                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
            $('#VPmiennammobile').on('hide.bs.collapse', function () {
                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');
            });

            $('#supportcustomermobile').on('shown.bs.collapse', function () {
                $('#hochiminhmobile').attr('class', 'collapse hide');
                $('#bacninhmobile').attr('class', 'collapse hide');
                $('#haiduongmobile').attr('class', 'collapse hide');
                $('#hanoimobile').attr('class', 'collapse hide');
                $('#vinhphucmobile').attr('class', 'collapse hide');
                $('#hoisomobile').attr('class', 'collapse hide');
                $('#VPmiennammobile').attr('class', 'collapse hide');

                $('#_i_ha_noi_mobile').removeClass('fa-caret-down');
                $('#_i_ha_noi_mobile').addClass('fa-caret-right');

                $('#_i_ho_chi_minh_mobile').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh_mobile').addClass('fa-caret-right');

                $('#_i_bac_ninh_mobile').removeClass('fa-caret-down');
                $('#_i_bac_ninh_mobile').addClass('fa-caret-right');

                $('#_i_hai_duong_mobile').removeClass('fa-caret-down');
                $('#_i_hai_duong_mobile').addClass('fa-caret-right');

                $('#_i_vinh_phuc_mobile').removeClass('fa-caret-down');
                $('#_i_vinh_phuc_mobile').addClass('fa-caret-right');

                $('#_i_hoi_so_mobile').removeClass('fa-caret-down');
                $('#_i_hoi_so_mobile').addClass('fa-caret-right');

                $('#_i_vp_mien_nam_mobile').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam_mobile').addClass('fa-caret-right');

                $('#_i_support_customer_mobile').removeClass('fa-caret-right');
                $('#_i_support_customer_mobile').addClass('fa-caret-down');
            });
            $('#supportcustomermobile').on('hide.bs.collapse', function () {
                $('#_i_support_customer_mobile').removeClass('fa-caret-down');
                $('#_i_support_customer_mobile').addClass('fa-caret-right');
            });
        });
    }
    else {
        var homeSwiper = new Swiper('#main-slider-swiper', {
            effect: 'fade',
            autoplay: 3000,
            autoplayDisableOnInteraction: false,
            slidesPerView: 1
        });
        $('#_footer_pc').show();
        $('#_footer_mobile').hide();
        $(document).ready(function () {
            $('#hanoi').on('shown.bs.collapse', function () {
                $('#hochiminh').attr('class', 'collapse hide');
                $('#bacninh').attr('class', 'collapse hide');
                $('#haiduong').attr('class', 'collapse hide');
                $('#vinhphuc').attr('class', 'collapse hide');

                $('#_i_ha_noi').removeClass('fa-caret-right');
                $('#_i_ha_noi').addClass('fa-caret-down');

                $('#_i_ho_chi_minh').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh').addClass('fa-caret-right');

                $('#_i_bac_ninh').removeClass('fa-caret-down');
                $('#_i_bac_ninh').addClass('fa-caret-right');

                $('#_i_hai_duong').removeClass('fa-caret-down');
                $('#_i_hai_duong').addClass('fa-caret-right');

                $('#_i_vinh_phuc').removeClass('fa-caret-down');
                $('#_i_vinh_phuc').addClass('fa-caret-right');
            });
            $('#hanoi').on('hide.bs.collapse', function () {
                $('#_i_ha_noi').removeClass('fa-caret-down');
                $('#_i_ha_noi').addClass('fa-caret-right');
            });

            $('#hochiminh').on('shown.bs.collapse', function () {
                $('#hanoi').attr('class', 'collapse hide');
                $('#bacninh').attr('class', 'collapse hide');
                $('#haiduong').attr('class', 'collapse hide');
                $('#vinhphuc').attr('class', 'collapse hide');

                $('#_i_ha_noi').removeClass('fa-caret-down');
                $('#_i_ha_noi').addClass('fa-caret-right');

                $('#_i_ho_chi_minh').removeClass('fa-caret-right');
                $('#_i_ho_chi_minh').addClass('fa-caret-down');

                $('#_i_bac_ninh').removeClass('fa-caret-down');
                $('#_i_bac_ninh').addClass('fa-caret-right');

                $('#_i_hai_duong').removeClass('fa-caret-down');
                $('#_i_hai_duong').addClass('fa-caret-right');

                $('#_i_vinh_phuc').removeClass('fa-caret-down');
                $('#_i_vinh_phuc').addClass('fa-caret-right');

            });
            $('#hochiminh').on('hide.bs.collapse', function () {
                $('#_i_ho_chi_minh').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh').addClass('fa-caret-right');
            });

            $('#bacninh').on('shown.bs.collapse', function () {
                $('#hochiminh').attr('class', 'collapse hide');
                $('#hanoi').attr('class', 'collapse hide');
                $('#haiduong').attr('class', 'collapse hide');
                $('#vinhphuc').attr('class', 'collapse hide');

                $('#_i_ha_noi').removeClass('fa-caret-down');
                $('#_i_ha_noi').addClass('fa-caret-right');

                $('#_i_ho_chi_minh').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh').addClass('fa-caret-right');

                $('#_i_bac_ninh').removeClass('fa-caret-right');
                $('#_i_bac_ninh').addClass('fa-caret-down');

                $('#_i_hai_duong').removeClass('fa-caret-down');
                $('#_i_hai_duong').addClass('fa-caret-right');

                $('#_i_vinh_phuc').removeClass('fa-caret-down');
                $('#_i_vinh_phuc').addClass('fa-caret-right');
            });
            $('#bacninh').on('hide.bs.collapse', function () {
                $('#_i_bac_ninh').removeClass('fa-caret-down');
                $('#_i_bac_ninh').addClass('fa-caret-right');
            });

            $('#haiduong').on('shown.bs.collapse', function () {
                $('#hochiminh').attr('class', 'collapse hide');
                $('#bacninh').attr('class', 'collapse hide');
                $('#hanoi').attr('class', 'collapse hide');
                $('#vinhphuc').attr('class', 'collapse hide');

                $('#_i_ha_noi').removeClass('fa-caret-down');
                $('#_i_ha_noi').addClass('fa-caret-right');

                $('#_i_ho_chi_minh').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh').addClass('fa-caret-right');

                $('#_i_bac_ninh').removeClass('fa-caret-down');
                $('#_i_bac_ninh').addClass('fa-caret-right');

                $('#_i_hai_duong').removeClass('fa-caret-right');
                $('#_i_hai_duong').addClass('fa-caret-down');

                $('#_i_vinh_phuc').removeClass('fa-caret-down');
                $('#_i_vinh_phuc').addClass('fa-caret-right');
            });
            $('#haiduong').on('hide.bs.collapse', function () {
                $('#_i_hai_duong').removeClass('fa-caret-down');
                $('#_i_hai_duong').addClass('fa-caret-right');
            });

            $('#vinhphuc').on('shown.bs.collapse', function () {
                $('#hochiminh').attr('class', 'collapse hide');
                $('#bacninh').attr('class', 'collapse hide');
                $('#haiduong').attr('class', 'collapse hide');
                $('#hanoi').attr('class', 'collapse hide');

                $('#_i_ha_noi').removeClass('fa-caret-down');
                $('#_i_ha_noi').addClass('fa-caret-right');

                $('#_i_ho_chi_minh').removeClass('fa-caret-down');
                $('#_i_ho_chi_minh').addClass('fa-caret-right');

                $('#_i_bac_ninh').removeClass('fa-caret-down');
                $('#_i_bac_ninh').addClass('fa-caret-right');

                $('#_i_hai_duong').removeClass('fa-caret-down');
                $('#_i_hai_duong').addClass('fa-caret-right');

                $('#_i_vinh_phuc').removeClass('fa-caret-right');
                $('#_i_vinh_phuc').addClass('fa-caret-down');
            });
            $('#vinhphuc').on('hide.bs.collapse', function () {
                $('#_i_vinh_phuc').removeClass('fa-caret-down');
                $('#_i_vinh_phuc').addClass('fa-caret-right');
            });

            $('#hoiso').on('shown.bs.collapse', function () {
                $('#VPmiennam').attr('class', 'collapse hide');
                $('#supportcustomer').attr('class', 'collapse hide');

                $('#_i_hoi_so').removeClass('fa-caret-right');
                $('#_i_hoi_so').addClass('fa-caret-down');

                $('#_i_vp_mien_nam').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam').addClass('fa-caret-right');

                $('#_i_support_customer').removeClass('fa-caret-down');
                $('#_i_support_customer').addClass('fa-caret-right');
            });
            $('#hoiso').on('hide.bs.collapse', function () {
                $('#_i_hoi_so').removeClass('fa-caret-down');
                $('#_i_hoi_so').addClass('fa-caret-right');
            });

            $('#VPmiennam').on('shown.bs.collapse', function () {
                $('#hoiso').attr('class', 'collapse hide');
                $('#supportcustomer').attr('class', 'collapse hide');

                $('#_i_vp_mien_nam').removeClass('fa-caret-right');
                $('#_i_vp_mien_nam').addClass('fa-caret-down');

                $('#_i_hoi_so').removeClass('fa-caret-down');
                $('#_i_hoi_so').addClass('fa-caret-right');

                $('#_i_support_customer').removeClass('fa-caret-down');
                $('#_i_support_customer').addClass('fa-caret-right');
            });
            $('#VPmiennam').on('hide.bs.collapse', function () {
                $('#_i_vp_mien_nam').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam').addClass('fa-caret-right');
            });

            $('#supportcustomer').on('shown.bs.collapse', function () {
                $('#hoiso').attr('class', 'collapse hide');
                $('#VPmiennam').attr('class', 'collapse hide');

                $('#_i_support_customer').removeClass('fa-caret-right');
                $('#_i_support_customer').addClass('fa-caret-down');

                $('#_i_hoi_so').removeClass('fa-caret-down');
                $('#_i_hoi_so').addClass('fa-caret-right');

                $('#_i_vp_mien_nam').removeClass('fa-caret-down');
                $('#_i_vp_mien_nam').addClass('fa-caret-right');
            });
            $('#supportcustomer').on('hide.bs.collapse', function () {
                $('#_i_support_customer').removeClass('fa-caret-down');
                $('#_i_support_customer').addClass('fa-caret-right');
            });
        });
    }
</script>

<script>
    ShowListNewsInHomePage();
</script>

@yield('scripts')

</body>
</html>
