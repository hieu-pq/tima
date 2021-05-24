<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TIMA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('employee.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>


    @if(Auth::user()->isAdmin())

    <!-- Khoan vay -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKhoanVay"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Khoản vay</span>
        </a>
        <div id="collapseKhoanVay" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('employee.khoan-vay.index')}}">Danh sách khoản vay</a>
                <a class="collapse-item" href="{{route('employee.khoan-vay.create')}}">Tạo mới</a>
            </div>
        </div>
    </li>

{{--    Lai suat - admin--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaiSuat"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Lãi suất tháng</span>
        </a>
        <div id="collapseLaiSuat" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('employee.lai-suat.index')}}">Danh sách lãi suất</a>
                <a class="collapse-item" href="{{route('employee.lai-suat.create')}}">Tạo mới</a>
            </div>
        </div>
    </li>

{{-- ADMIN - TK Nhan vien--}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTK"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Tài khoản nhân viên</span>
            </a>
            <div id="collapseTK" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('employee.tai-khoan.index')}}">Danh sách tài khoản</a>
                    <a class="collapse-item" href="{{route('employee.tai-khoan.create')}}">Tạo mới</a>
                </div>
            </div>
        </li>

{{--    Thong ke - admin --}}

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethongke"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Thống kê</span>
            </a>
            <div id="collapsethongke" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('employee.thongkehd')}}">Xem thống kê hợp đồng</a>
                    <a class="collapse-item" href="{{route('employee.thongke')}}">Xem thống doanh thu</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNS"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Ngân sách</span>
            </a>
            <div id="collapseNS" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('employee.ngan-sach.index')}}">Xem ngân sách</a>
                    <a class="collapse-item" href="{{route('employee.ngan-sach.bosung')}}">Bổ sung ngân sách</a>
                    <a class="collapse-item" href="{{route('employee.ngan-sach.create')}}">Thêm ngân sách</a>
                </div>
            </div>
        </li>

    @endif


    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('employee.admin.hopdong')}}">
            <i class="fab fa-product-hunt"></i>
            <span>Danh sách hợp đồng</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

