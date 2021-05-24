@extends('frontend.layouts.master')

@section('title')
    TIMA - SÀN KẾT NỐI TÀI CHÍNH LỚN NHẤT VIỆT NAM
@endsection

@section('content')

    <div class="main-page">
        <!--Main slider--->

        <div id="main-slider-swiper" class="main-slider">
            <div class="swiper-wrapper">
                <a href="http://onelink.to/tima" target="_blank" class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('frontend/Template1/images/main-slider/banner-mytima.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content text-center w-100 w-md-100 mx-auto">
                        </div>
                    </div>
                </a>
                <a href="https://hoptac.tima.vn/" target="_blank" class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('frontend/Template1/images/main-slider/banner-hop-tac.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content text-center w-100 w-md-100 mx-auto">
                        </div>
                    </div>
                </a>
                <div class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('frontend/Template1/images/main-slider/Banner-05.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content w-100 mx-auto">
                        </div>
                    </div>
                </div>
                <div class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('frontend/Template1/images/main-slider/Banner-08.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content text-center w-100 w-md-100 mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tổng tiên giải ngân--->

        <div class="tm-strong">
            <div class="container">

                <div class="tm-strong__inner d-flex flex-column flex-md-row">
                    <p class="mb-0 mr-3 mb-3 mb-md-0">
                        Tổng số tiền đã được giải ngân :
                    </p>

                    <div class="d-flex align-items-center">
                        <div class="incremental-counter d-flex mr-10px mr-lg-3" data-value="94077210"></div>
                        <span class="text-uppercase font-secondary">Triệu</span>
                    </div>
                </div>

            </div>
        </div>
        <style>
            .incremental-counter .num:nth-child(5){margin-right:48px}
            @media (max-width: 991px){.incremental-counter .num:nth-child(5){margin-right:38px}}
            .incremental-counter .num:nth-child(5):after{content:'TỈ';position:absolute;top:50%;transform:translate3d(0, -50%, 0);left:100%;margin-left:15px;font-size:1.25rem;color:#000}
            @media (max-width: 991px){.incremental-counter .num:nth-child(5):after{margin-left:10px;font-size:1rem}}
        </style>
        <style>
            .incremental-counter .num:nth-child(3) {
                margin-right: 2px
            }

            @media (max-width: 991px) {
                .incremental-counter .num:nth-child(3) {
                    margin-right: 2px
                }
            }

            .incremental-counter .num:nth-child(3):after {
                display: none
            }

            @media (max-width: 991px) {
                .incremental-counter .num:nth-child(3):after {
                    display: none
                }
            }
        </style>

        <!--Gói sản phẩm--->

        <div class="tm-card bg-white py-5 mb-5">
            <div class="container">
                <h1 class="tm-card__heading text-center mb-6" style="font-size: 2.125rem !important;">
                    C&#225;c g&#243;i sản phẩm vay
                </h1>
                <div class="tm-card__body tm-feature">
                    <div id="tm-feature-swiper" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="tm-feature__item swiper-slide text-center">
                                <a onclick="gtag('event', 'Vay theo cầm cố tài sản', {'event_category': 'product_slide','event_label': 'Icon Click'})" href="/vay-tin-chap-theo-luong.html">
                                    <div class="tm-feature__thumb mb-2 mx-auto">
                                        <img data-src="frontend/Template1/images/product/newicon/vay-tin-chap-theo-luong.png" class="lazyload img-fluid " style="width:88px" alt="Vay t&#237;n chấp  theo lương" />
                                    </div>
                                </a>
                                <h3 class="tm-feature__title">
                                    <a onclick="gtag('event', 'Vay t&#237;n chấp  theo lương', { 'event_category': 'product_slide', 'event_label': 'Title Click' });" href="/vay-tin-chap-theo-luong.html">
                                        Vay tín chấp <br/> theo lương
                                    </a>
                                </h3>
                            </div>
                            <div class="tm-feature__item swiper-slide text-center">
                                <a onclick="gtag('event', 'Vay theo cầm cố tài sản', {'event_category': 'product_slide','event_label': 'Icon Click'})" href="/vay-tien-bang-so-ho-khau.html">
                                    <div class="tm-feature__thumb mb-2 mx-auto">
                                        <img data-src="frontend/Template1/images/product/newicon/Cam-so-ho-khau.png" class="lazyload img-fluid " style="width:88px" alt="Vay theo sổ hộ khẩu" />
                                    </div>
                                </a>
                                <h3 class="tm-feature__title">
                                    <a onclick="gtag('event', 'Vay theo sổ hộ khẩu', { 'event_category': 'product_slide', 'event_label': 'Title Click' });" href="/vay-tien-bang-so-ho-khau.html">
                                        Vay theo <br/>sổ hộ khẩu
                                    </a>
                                </h3>
                            </div>
                            <div class="tm-feature__item swiper-slide text-center">
                                <a onclick="gtag('event', 'Vay theo cầm cố tài sản', {'event_category': 'product_slide','event_label': 'Icon Click'})" href="/vay-tien-bang-cavet-xe-may.html">
                                    <div class="tm-feature__thumb mb-2 mx-auto">
                                        <img data-src="frontend/Template1/images/product/newicon/vay-theo-dang-ky-xe-may.png" class="lazyload img-fluid " style="width:88px" alt="Vay theo đăng k&#253; xe m&#225;y" />
                                    </div>
                                </a>
                                <h3 class="tm-feature__title">
                                    <a onclick="gtag('event', 'Vay theo đăng k&#253; xe m&#225;y', { 'event_category': 'product_slide', 'event_label': 'Title Click' });" href="/vay-tien-bang-cavet-xe-may.html">
                                        Vay theo <br/>đăng ký xe máy
                                    </a>
                                </h3>
                            </div>
                            <div class="tm-feature__item swiper-slide text-center">
                                <a onclick="gtag('event', 'Vay theo cầm cố tài sản', {'event_category': 'product_slide','event_label': 'Icon Click'})" href="/vay-tra-gop.html">
                                    <div class="tm-feature__thumb mb-2 mx-auto">
                                        <img data-src="frontend/Template1/images/product/newicon/vay-tra-gop-theo-ngay.png" class="lazyload img-fluid " style="width:88px" alt="Vay trả g&#243;p" />
                                    </div>
                                </a>
                                <h3 class="tm-feature__title">
                                    <a onclick="gtag('event', 'Vay trả g&#243;p', { 'event_category': 'product_slide', 'event_label': 'Title Click' });" href="/vay-tra-gop.html">
                                        Vay trả góp
                                    </a>
                                </h3>
                            </div>
                            <div class="tm-feature__item swiper-slide text-center">
                                <a onclick="gtag('event', 'Vay theo cầm cố tài sản', {'event_category': 'product_slide','event_label': 'Icon Click'})" href="/vay-tien-bang-dang-ky-xe-oto.html">
                                    <div class="tm-feature__thumb mb-2 mx-auto">
                                        <img data-src="frontend/Template1/images/product/newicon/cam-oto-dang-ky-xe-oto.png" class="lazyload img-fluid " style="width:88px" alt="Vay theo đăng k&#253; xe &#244; t&#244;" />
                                    </div>
                                </a>
                                <h3 class="tm-feature__title">
                                    <a onclick="gtag('event', 'Vay theo đăng k&#253; xe &#244; t&#244;', { 'event_category': 'product_slide', 'event_label': 'Title Click' });" href="/vay-tien-bang-dang-ky-xe-oto.html">
                                        Vay theo <br/>đăng ký xe ô tô
                                    </a>
                                </h3>
                            </div>
                            <div class="tm-feature__item swiper-slide text-center">
                                <a onclick="gtag('event', 'Vay theo cầm cố tài sản', {'event_category': 'product_slide','event_label': 'Icon Click'})" href="/vay-cam-do/the-chap-oto-10.html">
                                    <div class="tm-feature__thumb mb-2 mx-auto">
                                        <img data-src="frontend/Template1/images/product/newicon/cam-oto.png" class="lazyload img-fluid " style="width:88px" alt="Cầm &#244; t&#244;" />
                                    </div>
                                </a>
                                <h3 class="tm-feature__title">
                                    <a onclick="gtag('event', 'Cầm &#244; t&#244;', { 'event_category': 'product_slide', 'event_label': 'Title Click' });" href="/vay-cam-do/the-chap-oto-10.html">
                                        Cầm ô tô
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="tm-feature__nav container stick-center">
                        <div id="tm-feature__next" class="swiper-button-prev tm-feature__next"></div>
                        <div id="tm-feature__prev" class="swiper-button-next tm-feature__prev"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Danh sách đơn vay mới nhất & thống kê--->
        <div class="tm-list-dxv mb-5">
            <div class="container">
                <div class="rounded bg-white p-3 pt-4">
                    <div class="row">

                        <div class="col-main col-xl-9 border-right mb-6 mb-xl-0">
                            <div class="tm-card">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="tm-card__heading--2 text-uppercase mb-0">
                                        DANH SÁCH ĐƠN XIN VAY MỚI  Nhất
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="tm-table-wrap table-responsive">
                                    <div class="tm-table tm-table-swiper swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Hung
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                096*****585
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Đống Đa
                                                        <hr class="my-0">
                                                        H&#224; Nội
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:29 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Tr&#237;
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                033*****874
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        G&#242; Vấp
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:16 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Chương
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                098*****304
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        B&#236;nh Ch&#225;nh
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:16 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Sang
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                034*****464
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        12
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:12 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Hien
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                098*****841
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Ti&#234;n Du
                                                        <hr class="my-0">
                                                        Bắc Ninh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:06 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Phương
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                096*****201
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Quế V&#245;
                                                        <hr class="my-0">
                                                        Bắc Ninh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:01 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Hien
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                098*****842
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Y&#234;n Lạc
                                                        <hr class="my-0">
                                                        Vĩnh Ph&#250;c
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            12 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:01 18/05/2021
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-0 mb-3">

                                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                    <div class="text-center text-md-left mb-3 mb-md-0">
                                        Chúng tôi có hàng nghìn đơn xin vay mỗi ngày!
                                    </div>
                                    <a class="btn btn-lg btn-success px-5 text-white fs-16" href="/Borrower/">
                                        ĐĂNG KÝ VAY NGAY
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-aside col-xl-3" id="Statistical">
                            <div class="tm-card">
                                <h2 class="tm-card__heading--2 text-uppercase mb-3">
                                    Thống kê
                                </h2>
                                <hr class="mt-0 mb-5">
                                <div class="tm-card__body tm-stats" id="divStaticsForLoanNew">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-3 col-6">
                                            <div class="tm-stats__item media flex-column flex-lg-row mb-5">
                                                <div class="tm-stats__thumb d-flex justify-content-center mr-lg-3 mb-3 mb-lg-0">
                                                    <i class="icon-survey "></i>
                                                </div>
                                                <div class="media-body text-center text-lg-left">
                                                    <p class="tm-stats__heading mb-0">
                                                        Đơn vay mới trong ngày
                                                    </p>
                                                    <p class="tm-stats__num mb-0">
                                                        2,471
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-3 col-6">
                                            <div class="tm-stats__item media flex-column flex-lg-row mb-5">
                                                <div class="tm-stats__thumb d-flex justify-content-center mr-lg-3 mb-3 mb-lg-0">
                                                    <i class="icon-survey "></i>
                                                </div>
                                                <div class="media-body text-center text-lg-left">
                                                    <p class="tm-stats__heading mb-0">
                                                        Đơn vay mới trong tháng
                                                    </p>
                                                    <p class="tm-stats__num mb-0">
                                                        51,848
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-3 col-6">
                                            <div class="tm-stats__item media flex-column flex-lg-row mb-5">
                                                <div class="tm-stats__thumb d-flex justify-content-center mr-lg-3 mb-3 mb-lg-0">
                                                    <i class="icon-monitor "></i>
                                                </div>
                                                <div class="media-body text-center text-lg-left">
                                                    <p class="tm-stats__heading mb-0">
                                                        Tổng đơn vay trên hệ thống
                                                    </p>
                                                    <p class="tm-stats__num mb-0">
                                                        9,729,320
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-12 col-md-3 col-6">
                                            <div class="tm-stats__item media flex-column flex-lg-row mb-5">
                                                <div class="tm-stats__thumb d-flex justify-content-center mr-lg-3 mb-3 mb-lg-0">
                                                    <i class="icon-call-center "></i>
                                                </div>
                                                <div class="media-body text-center text-lg-left">
                                                    <p class="tm-stats__heading mb-0">
                                                        Tổng đơn đã được tư vấn
                                                    </p>
                                                    <p class="tm-stats__num mb-0">
                                                        7,365,744
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-3 col-6">
                                            <div class="tm-stats__item media flex-column flex-lg-row mb-5">
                                                <div class="tm-stats__thumb d-flex justify-content-center mr-lg-3 mb-3 mb-lg-0">
                                                    <i class="icon-coin "></i>
                                                </div>
                                                <div class="media-body text-center text-lg-left">
                                                    <p class="tm-stats__heading mb-0">
                                                        Tổng tiền giải ngân
                                                    </p>

                                                    <p class="tm-stats__num mb-0">
                                                        94,077,210,167,787
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-3 col-6">
                                            <div class="tm-stats__item media flex-column flex-lg-row mb-5">
                                                <div class="tm-stats__thumb d-flex justify-content-center mr-lg-3 mb-3 mb-lg-0">
                                                    <i class="icon-call-center "></i>
                                                </div>
                                                <div class="media-body text-center text-lg-left">
                                                    <p class="tm-stats__heading mb-0">
                                                        Số người đăng ký vay
                                                    </p>
                                                    <p class="tm-stats__num mb-0">
                                                        5,817,624
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Mô hình hoạt động--->

        <div class="tm-card bg-white py-5 mb-md-2">
            <div class="container of-hidden">
                <div class="tm-card__heading text-center mb-6">
                    Mô hình hoạt động sàn <span class="hidden-sm-down">Tima</span>
                </div>
                <div class="tm-card__body tm-steps">
                    <div class="row">
                        <div class="tm-steps__item col-md-3">
                            <div class="tm-steps__thumb mb-4 hidden-sm-down">
                                <img data-src="frontend/Template1/images/steps/1.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Đăng ký vay" />

                            </div>
                            <div class="tm-steps__body media">
                                <div class="tm-steps__num mr-10px">
                                    1
                                </div>
                                <div class="media-body">
                                    <div class="tm-steps__heading text-primary mb-1">
                                        Đăng ký vay
                                    </div>
                                    <div class="tm-steps__lead">
                                        Hoàn tất điền thông tin trong 1 phút
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tm-steps__item col-md-3">
                            <div class="tm-steps__thumb mb-4 hidden-sm-down">
                                <img data-src="frontend/Template1/images/steps/2.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Kết nối" />


                            </div>

                            <div class="tm-steps__body media">
                                <div class="tm-steps__num mr-10px">
                                    2
                                </div>
                                <div class="media-body">
                                    <div class="tm-steps__heading text-primary mb-1">
                                        Kết nối
                                    </div>
                                    <div class="tm-steps__lead">
                                        Ngay lập tức người cho vay sẽ nhận được đơn xin vay của bạn
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tm-steps__item col-md-3">
                            <div class="tm-steps__thumb mb-4 hidden-sm-down">
                                <img data-src="frontend/Template1/images/steps/3.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Xét duyệt" />

                            </div>

                            <div class="tm-steps__body media">
                                <div class="tm-steps__num mr-10px">
                                    3
                                </div>
                                <div class="media-body">
                                    <div class="tm-steps__heading text-primary mb-1">
                                        Xét duyệt
                                    </div>
                                    <div class="tm-steps__lead">
                                        Nhận kết quả nhanh chóng sau khi gửi hồ sơ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tm-steps__item col-md-3">
                            <div class="tm-steps__thumb mb-4 hidden-sm-down">
                                <img data-src="{{asset('/')}}frontend/Template1/images/steps/4.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Nhận tiền" />

                            </div>

                            <div class="tm-steps__body media" style="margin-bottom:0px;">
                                <div class="tm-steps__num mr-10px">
                                    4
                                </div>
                                <div class="media-body">
                                    <div class="tm-steps__heading text-primary mb-1">
                                        Nhận tiền
                                    </div>
                                    <div class="tm-steps__lead">
                                        Tiền sẽ được chuyển vào tài khoản của bạn hoặc nhận tiền mặt
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--Tổng đài--->

        <div class="tm-card py-4 py-md-0">
            <div class="container">
                <div class="tm-card__body tm-support d-flex justify-content-between align-items-center">

                    <div class="tm-support__heading d-flex align-items-center mb-0 hidden-sm-down">
                        <img class="align-self-end mx-4" src="frontend/Template1/images/callcenter-g.png" alt="Tổng đài tư vấn miễn phí">
                        <span class="hidden-sm-down">Tổng đài tư vấn</span>
                    </div>

                    <a class="tm-support__number d-flex align-items-center" href="tel:1900633688">
                        <i class="icon-phone mr-1 mr-md-3"></i>
                        1900 633 688
                    </a>

                    <a class="d-flex align-items-center" href="/Home/Support/">
                        <i class="icon-faq mr-md-3"></i>
                        <span class="hidden-md-down">Câu hỏi thường gặp</span>
                    </a>

                    <a class="d-flex align-items-center" href="/User/Register/">
                        <i class="icon-accounts mr-md-3"></i>
                        <span class="hidden-md-down">Đăng ký</span>
                    </a>

                </div>
            </div>
        </div>

        <!--Tin tức--->
        <div class="tm-card mb-5">
            <div class="container" id="topnewsinhomepage">
            </div>
        </div>

    </div>

@endsection
