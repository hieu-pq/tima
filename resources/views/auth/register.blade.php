{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}




<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->

<head lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="/Template1/images/favicon.ico" />
    <title>ĐĂNG KÝ TÀI KHOẢN - TIMA</title>
    <link rel="stylesheet" href="{{asset('/frontend')}}/Template1/css/style.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('/frontend')}}/Template1/css/custom.css" type="text/css" />

</head>

<body>

<div class="page-wrapper page-reg">

    <header id="header" class="header header--2">
        <div class="container d-flex justify-content-between">
            <a class="header__logo header__logo_login py-0" href="/">
                <img class="header__logo-img img-fluid" src="{{asset('/frontend')}}/Template1/images/logo1.png" alt="Tima">
            </a>

            <a class="header__call media" href="tel:1900633688">
                <i class="header__call-icon align-self-center icon-phone-lg d-flex mr-2"></i>
                <div class="media-body align-self-center">
                    <div class="header__call-number">
                        1900.633.688
                    </div>
                    <div class="header__call-time">
                        08:30 - 21:00, Thứ Hai - CN
                    </div>
                </div>
            </a>
        </div>
    </header>

    <style>
        label#chkDieuKhoan-error {
            position: absolute;
            margin-top: 22px;
        }
    </style>
    <div class="main-page">

        <div class="container py-5">

            <div class="tm-reg">
                <div class="row gutter-10px flex-column-reverse flex-md-row">
                    <div class="col-main col-md-6 d-flex">
                        <div class="tm-reg__banner w-100" style="background-image:url('{{asset('/frontend')}}/Template1/images/bg-login.jpeg');"></div>
                    </div>
                    <div class="col-aside col-md-6 d-flex mb-5 mb-md-0">
                        <div class="tm-regform d-flex flex-column justify-content-between w-100 border border-gray bg-white">
                            <div class="fs-13" id="divFormRegister">

                                <h3 class="mt-3 mb-4 text-center">Đăng ký tài khoản</h3>

                                <form method="POST" action="{{ route('register') }}" class="form mt-3">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Số điện thoại</label>

                                        <div class="col-md-6">
                                            <input id="so_dt" type="text" class="form-control" name="so_dt" value="{{ old('so_dt') }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary"> Đăng ký </button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div>
                                <hr class="border-gray my-0">

                                <div class="text-center fs-13 p-3">
                                    Bạn đã có tài khoản?

                                    <div class="d-inline-block">
                                        Hãy
                                        <a class="text-primary" href="/User/Login">
                                            <ins>click vào đây để đăng nhập</ins>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <footer id="footer" class="footer bg-white">
        <div class="container">
            <nav class="footer__nav footer-nav">
                <ul class="list-unstyled d-flex mb-0">
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
                        <a class="footer-nav__link" href="/news/tu-van">Tư vấn</a>
                    </li>

                    <li class="footer-nav__item hidden-sm-down">
                        <a class="footer-nav__link" href="/Home/Notification/">Thông báo</a>
                    </li>

                    <li class="footer-nav__item hidden-sm-down">
                        <a class="footer-nav__link" href="/huong-dan-giao-dich-tren-san-tima.html">Hỗ trợ</a>
                    </li>
                </ul>
            </nav>
            <hr class="mt-0 mb-4">

            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <h3 class="mb-3 mb-md-4 fs-16">
                        Hệ thống cửa hàng kết nối tài chính
                    </h3>

                    <ul class="list-v list-v--bullet-dot list-v--noline mb-0">
                        <li class="list-v__item">
                            <span class="text-uppercase">960 ĐƯỜNG LÁNG, HÀ NỘI</span> <br>
                            Hotline: <a href="tel:(024) 7302 8822">(024) 7302 8822</a>
                        </li>
                        <li class="list-v__item">
                            <span class="text-uppercase">199 HỒ TÙNG MẬU, HÀ NỘI</span> <br>
                            Hotline: <a href="tel:(024) 7303 8822">(024) 7303 8822</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xl-2 col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="mb-5">
                        <h3 class="mb-3 mb-md-4 fs-16">
                            Hỗ trợ khách hàng
                        </h3>

                        <div class="f-contact row">
                            <div class="col-12 mb-3">
                                <a class="d-flex align-items-center text-primary" href="tel:18006919">
                                    <div class="f-contact__icon mr-10px">
                                        <i class="icon-phone-sm d-flex"></i>
                                    </div>
                                    <strong class="fs-20 text-primary">1800 6919</strong>
                                </a>
                            </div>

                            <div class="col-12 mb-3">
                                <a class="d-flex align-items-center" href="mailto:support@tima.vn">
                                    <div class="f-contact__icon mr-10px">
                                        <i class="icon-email-1 d-flex"></i>
                                    </div>
                                    support@tima.vn
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="footer__copyright text-lg-right d-flex flex-column-reverse flex-sm-column">
                        <div class="mb-sm-5 mt-5 mt-sm-0">
                            <h3 class="mb-3 mb-md-4 fs-16">
                                Công ty cổ phần tập đoàn Tima
                            </h3>

                            <div class="mb-3">
                                <h6 class="fs-13 mb-1">Trụ sở chính:</h6>
                                <p class="mb-0">
                                    Số 275, Nguyễn Trãi, Thanh Xuân, Hà Nội <br>
                                    Giấy CN ĐKDN số 0107333139 được cấp bởi Sở Kế hoạch và Đầu tư TP. Hà Nội
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <p class="mb-0 text-gray-light text-center pb-2 pt-5">
                © 2017 Bản quyền thuộc về Tima
            </p>
        </div>
    </footer>


</div>
</body>
</html>
