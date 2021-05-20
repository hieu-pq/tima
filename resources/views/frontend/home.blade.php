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
                    <div class="main-slider__bg" style="background-image:url('Template1/images/main-slider/banner-mytima.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content text-center w-100 w-md-100 mx-auto">
                        </div>
                    </div>
                </a>
                <a href="https://hoptac.tima.vn/" target="_blank" class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('Template1/images/main-slider/banner-hop-tac.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content text-center w-100 w-md-100 mx-auto">
                        </div>
                    </div>
                </a>
                <div class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('Template1/images/main-slider/Banner-05.png');"></div>
                    <div class="container" style="margin-top:30px;">
                        <div class="main-slider__content w-100 mx-auto">
                        </div>
                    </div>
                </div>
                <div class="main-slider__item swiper-slide">
                    <div class="main-slider__bg" style="background-image:url('Template1/images/main-slider/Banner-08.png');"></div>
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
                                        <img data-src="/Template1/images/product/newicon/vay-tin-chap-theo-luong.png" class="lazyload img-fluid " style="width:88px" alt="Vay t&#237;n chấp  theo lương" />
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
                                        <img data-src="/Template1/images/product/newicon/Cam-so-ho-khau.png" class="lazyload img-fluid " style="width:88px" alt="Vay theo sổ hộ khẩu" />
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
                                        <img data-src="/Template1/images/product/newicon/vay-theo-dang-ky-xe-may.png" class="lazyload img-fluid " style="width:88px" alt="Vay theo đăng k&#253; xe m&#225;y" />
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
                                        <img data-src="/Template1/images/product/newicon/vay-tra-gop-theo-ngay.png" class="lazyload img-fluid " style="width:88px" alt="Vay trả g&#243;p" />
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
                                        <img data-src="/Template1/images/product/newicon/cam-oto-dang-ky-xe-oto.png" class="lazyload img-fluid " style="width:88px" alt="Vay theo đăng k&#253; xe &#244; t&#244;" />
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
                                        <img data-src="/Template1/images/product/newicon/cam-oto.png" class="lazyload img-fluid " style="width:88px" alt="Cầm &#244; t&#244;" />
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
                                                                Anh Minh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                079*****741
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        T&#226;n B&#236;nh
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
                                                            22:30 18/05/2021
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
                                                                Anh Duy
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                088*****890
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Ph&#250; Nhuận
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">30,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            10 th&#225;ng
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
                                                                Anh Nhu
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                086*****690
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Hải Dương
                                                        <hr class="my-0">
                                                        Hải Dương
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
                                                            22:24 18/05/2021
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
                                                                Anh Nguyen
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                091*****982
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Long Bi&#234;n
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
                                            <div class="tm-table__row swiper-slide">
                                                <div class="tm-table__col tm-table__col--1">
                                                    <div class="tm-table__item-td media">
                                                        <div class="icon-male-circle wf-38 d-flex align-self-center mr-3"></div>
                                                        <div class="media-body align-self-center text-ellipsis">
                                                            <div class="tm-table__para fw-6 text-primary">
                                                                Anh Hậu
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                083*****258
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        1
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">3,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            22:00 18/05/2021
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
                                                                Anh Tiến
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                052*****944
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        4
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">6,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            21:56 18/05/2021
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
                                                                Anh Cương
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                036*****288
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Cầu Giấy
                                                        <hr class="my-0">
                                                        H&#224; Nội
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">3,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            21:54 18/05/2021
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
                                                                Anh Định
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                036*****236
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
                                                        <span class="text-primary">12,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            21:51 18/05/2021
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
                                                                Anh Th&#236;n
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                097*****742
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Gia L&#226;m
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
                                                            21:47 18/05/2021
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
                                                                Anh Th&#224;nh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                037*****460
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
                                                            21:46 18/05/2021
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
                                                                Anh Hải
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                091*****799
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Ho&#224;i Đức
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
                                                            21:46 18/05/2021
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
                                                                Anh Hằng
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                039*****738
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Thủ Đức
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
                                                            21:45 18/05/2021
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
                                                                Anh Hương
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                091*****391
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        5
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
                                                            21:45 18/05/2021
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
                                                                Anh Thư
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                035*****818
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        1
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">9,000,000 VNĐ</span>
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
                                                            21:37 18/05/2021
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
                                                                Anh Le
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                094*****973
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        7
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
                                                            21:34 18/05/2021
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
                                                                Anh Du&#226;̉n
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                098*****872
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
                                                            21:30 18/05/2021
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
                                                                Anh Sơn
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                096*****222
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Nam Từ Li&#234;m
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
                                                            21:29 18/05/2021
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
                                                                Anh T&#226;n
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                093*****601
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        8
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
                                                            21:19 18/05/2021
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
                                                                Anh Ho&#224;i
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                097*****554
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Bắc Ninh
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
                                                            21:17 18/05/2021
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
                                                                Anh Thư
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                070*****658
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        7
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
                                                            21:14 18/05/2021
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
                                                                Anh Long
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                039*****321
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        B&#236;nh T&#226;n
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
                                                            21:14 18/05/2021
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
                                                                Anh Cương
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                086*****851
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Tam Dương
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
                                                            21:14 18/05/2021
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
                                                                Anh T&#226;n
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                039*****388
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
                                                        <span class="text-primary">3,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            21:11 18/05/2021
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
                                                                Anh Minh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                070*****864
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        2
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
                                                            21:09 18/05/2021
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
                                                                Anh Đinh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                096*****821
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        1
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
                                                            21:03 18/05/2021
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
                                                                Anh Diệu Anh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                093*****999
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Bắc Từ Li&#234;m
                                                        <hr class="my-0">
                                                        H&#224; Nội
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">30,000,000 VNĐ</span>
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
                                                            21:00 18/05/2021
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
                                                                Anh Cương
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                097*****796
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Tam Dương
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
                                                            20:57 18/05/2021
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
                                                                Anh Vu
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                090*****345
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Thủ Đức
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
                                                            20:56 18/05/2021
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
                                                                Anh Lam
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                098*****334
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Thủ Đức
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
                                                            20:56 18/05/2021
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
                                                                Anh T&#250;
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                070*****229
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        T&#226;n Ph&#250;
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
                                                            20:54 18/05/2021
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
                                                                Anh Mạnh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                033*****089
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
                                                            20:50 18/05/2021
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
                                                                Anh Minh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                091*****755
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        1
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
                                                            20:49 18/05/2021
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
                                                                Anh Đức
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                091*****755
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Thanh Xu&#226;n
                                                        <hr class="my-0">
                                                        H&#224; Nội
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">10,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo &#244; t&#244;
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
                                                            20:44 18/05/2021
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
                                                                Anh Trường
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                086*****133
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        1
                                                        <hr class="my-0">
                                                        Hồ Ch&#237; Minh
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--5">
                                                    <div class="tm-table__item-td">
                                                        <span class="text-primary">3,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            20:37 18/05/2021
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
                                                                Anh T&#236;nh Anh
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                032*****466
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
                                                            20:34 18/05/2021
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
                                                                Anh Tam
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                096*****956
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        Gia L&#226;m
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
                                                            20:31 18/05/2021
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
                                                                Anh Đảng
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                086*****228
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
                                                        <span class="text-primary">3,000,000 VNĐ</span>
                                                        <hr class="my-0">
                                                        Vay theo xe m&#225;y
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--4">
                                                    <div class="tm-table__item-td">
                                                        <div class="tm-table__para fw-6 text-gray-light">
                                                            9 th&#225;ng
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tm-table__col tm-table__col--6">
                                                    <div class="d-inline-block text-left">
                                                        <div class="tm-table__para fw-6">
                                                            20:31 18/05/2021
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
                                                                Anh Hải
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                090*****181
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        1
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
                                                            20:27 18/05/2021
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
                                                                Anh Kiệt
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                090*****314
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        7
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
                                                            20:26 18/05/2021
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
                                                                Anh My
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                096*****376
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        B&#236;nh Thạnh
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
                                                            20:23 18/05/2021
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
                                                                035*****093
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
                                                            20:16 18/05/2021
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
                                                                Anh Tr&#250;c
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                035*****920
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tm-table__col tm-table__col--3">
                                                    <div class="tm-table__item-td">
                                                        H&#243;c M&#244;n
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
                                                            20:13 18/05/2021
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
                                                                Anh Ha
                                                            </div>
                                                            <div class="tm-table__para text-gray-light">
                                                                036*****108
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
                                                            20:13 18/05/2021
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
                                <img data-src="/Template1/images/steps/1.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Đăng ký vay" />

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
                                <img data-src="/Template1/images/steps/2.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Kết nối" />


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
                                <img data-src="/Template1/images/steps/3.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Xét duyệt" />

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
                                <img data-src="/Template1/images/steps/4.png" class="lazyload tm-steps__img img-responsive mx-auto" alt="Nhận tiền" />

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
                        <img class="align-self-end mx-4" src="/Template1/images/callcenter-g.png" alt="Tổng đài tư vấn miễn phí">
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

        <!--Báo chí nói về Tima--->

        <div class="tm-card bg-white py-5 mb-5">
            <div class="container">
                <div class="tm-card__heading text-center mb-6 mb-md-7">
                    Báo chí nói về Tima
                </div>
                <div class="tm-card__body tm-brands">
                    <div id="tm-brands-swiper" class="swiper-container">
                        <div class="swiper-wrapper d-flex">
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="https://kinhdoanh.vnexpress.net/tin-tuc/doanh-nghiep/tima-duoc-dinh-gia-gan-500-ty-dong-o-vong-dau-tu-thu-hai-3815931.html" target="_bank">
                                    <img data-src="/Template1/images/brands/vne.jpg" class="lazyload tm-brands__img img-responsive mx-auto" alt="vne" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="http://cafef.vn/tima-duoc-dinh-gia-gan-500-ty-dong-o-vong-dau-tu-series-b-20180930084325888.chn" target="_bank">
                                    <img data-src="/Template1/images/brands/cafe.jpg" class="lazyload tm-brands__img img-responsive mx-auto" alt="cafe" />

                                </a>
                            </div>

                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="https://dantri.com.vn/kinh-doanh/quy-ngoai-dau-tu-them-3-trieu-usd-vao-fintech-tima-cua-viet-nam-20181001114017931.htm" target="_bank">
                                    <img data-src="/Template1/images/brands/dantri.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="dantri" />

                                </a>
                            </div>




                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="https://e27.co/tima-raises-us3m-series-b-funding-round-20181001/" target="_bank">
                                    <img data-src="/Template1/images/e27.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="vietnamnet" />

                                </a>
                            </div>



                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="https://www.dealstreetasia.com/stories/belt-road-capital-invests-3m-in-vietnamese-p2p-lending-startup-tima-107733/" target="_bank">
                                    <img data-src="/Template1/images/brands/dealstreetasia.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="dealstreetasia" />

                                </a>
                            </div>



                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="https://www.techinasia.com/tima-seriesb">
                                    <img data-src="/Template1/images/brands/techinasia.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="techinasia" />

                                </a>
                            </div>

                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="http://vneconomictimes.com:8081/article/business/more-than-500mn-in-loans-provided-via-tima-financial" target="_bank">
                                    <img data-src="/Template1/images/brands/vneconomictimes.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="vneconomictimes" />

                                </a>
                            </div>

                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="http://vietnamnet.vn/vn/kinh-doanh/ra-mat-san-ket-noi-tai-chinh-tima-419421.html" target="_bank">
                                    <img data-src="/Template1/images/brands/vietnamnet.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="vietnamnet" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a class="tm-brands__link mx-auto" href="https://thanhnien.vn/kinh-doanh/hon-nua-ti-do-la-my-da-duoc-ket-noi-thanh-cong-qua-san-tai-chinh-tima-911499.html" target="_bank">
                                    <img data-src="/Template1/images/brands/thanhnien.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="thanhnien" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="http://cafebiz.vn/viet-nam-chinh-thuc-co-san-giao-dich-tai-chinh-dung-facebook-danh-gia-tin-nhiem-khach-vay-20171220155903654.chn" target="_bank">
                                    <img data-src="/Template1/images/brands/cafebiz.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="cafebiz" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="tm-brands__link mx-auto" href="http://baodautu.vn/hon-nua-ty-do-da-duoc-ket-noi-thanh-cong-qua-san-tai-chinh-tima-d74502.html" target="_bank">
                                    <img data-src="/Template1/images/brands/dautuonline.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="dautuonline" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a class="tm-brands__link mx-auto" href="http://nhipcaudautu.vn/doanh-nghiep/hon-nua-ty-usd-ket-noi-thanh-cong-qua-san-tai-chinh-tima-3321759/" target="_bank">
                                    <img data-src="/Template1/images/brands/ncdt.png" class="lazyload tm-brands__img img-responsive mx-auto" alt="ncdt" />

                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tm-card bg-white py-5 mb-5">
            <div class="container">
                <div class="tm-card__heading text-center mb-6 mb-md-7">
                    Quỹ đầu tư và đối tác
                </div>
                <div class="tm-card__body tm-brands">
                    <div id="tm-brands-swiper-1" class="swiper-container">
                        <div class="swiper-wrapper d-flex">
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="#" target="_bank">
                                    <img data-src="/Template1/images/partner/Gcapital.jpg" class="lazyload img-responsive mx-auto" alt="Gcapital" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="#" target="_bank">
                                    <img data-src="/Template1/images/logo-momo.png" class="lazyload img-responsive mx-auto" alt="momo" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="#" target="_bank">
                                    <img data-src="/Template1/images/partner/Donearn.jpg" class="lazyload img-responsive mx-auto" alt="Donearn" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="#" target="_bank">
                                    <img data-src="/Template1/images/partner/beltroadcap.svg" class="lazyload img-responsive mx-auto" alt="beltroad" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="https://vbi.vietinbank.vn/" target="_bank">
                                    <img data-src="/Template1/images/partner/viettinbank.jpg" class="lazyload img-responsive mx-auto" alt="viettinbank" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="#" target="_bank">
                                    <img data-src="/Template1/images/partner/namabank.png" class="lazyload img-responsive mx-auto" alt="namabank" />

                                </a>
                            </div>
                            <div class="tm-brands__item swiper-slide text-center d-flex align-items-center h-auto">
                                <a rel="nofollow" class="" href="#" target="_bank" style="width:100px;">
                                    <img data-src="/Template1/images/partner/baominhlogo.png" class="lazyload img-responsive mx-auto" alt="namabank" />

                                </a>
                            </div>
                        </div>
                    </div>
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
