<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - {{config('app.name').' Dashboard'}}</title>

    <style>
        .table th,
        .table td {
            vertical-align: middle !important;
        }

        .error{
            font-size: 16px !important;
        }

        .sp-remove-btn{
            top: -6px;
            right: 6px;
            font-size: 28px;
            color: red;
            font-weight: bold;
        }
    </style>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    @yield('styles-import')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

        @include('employee.layouts.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        @include('employee.layouts.topbar') <!-- Topbar -->

        @yield('content') <!-- Content -->

        @include('employee.layouts.footer') <!-- FOOTER -->

        </div> <!-- END Main Content -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Bạn muốn đăng xuất?</div>
            <div class="modal-footer">
                <form action="{{route('employee.logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy bỏ</button>
                    <button class="btn btn-danger" type="submit">Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{--    <!-- Bootstrap core JavaScript-->--}}
<script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{--    <!-- Core plugin JavaScript-->--}}
<script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

{{--    <!-- Custom scripts for all pages-->--}}
<script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>

    {{--    <!-- Page level plugins -->--}}
    <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>

{{--    <!-- Page level custom scripts -->--}}
<script src="{{ asset('admin_assets/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('admin_assets/js/demo/chart-area-demo.js') }}"></script>


</body>

@yield('scripts-import')

</html>
