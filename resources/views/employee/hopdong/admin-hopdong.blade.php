@extends('employee.layouts.app')

@section('title')
    Xem hợp đồng
@endsection

@section('content')

    <div class="container-fluid">
        <h2>Xem hợp đồng</h2>
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#menutinchap">Tín chấp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menuthechap">Thế chấp</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="menutinchap" class="container-fluid tab-pane active"><br>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#TT</th>
                            <th scope="col">Mã Hợp đồng</th>
                            <th scope="col">Giá trị khoản vay</th>
                            <th scope="col">Thời hạn</th>
                            <th scope="col">Lãi suất</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tinchap as $item)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$item->ma_hd}}</td>
                                <td>{{number_format($item->khoan_vay)}} VND</td>
                                <td>{{$item->thang_vay}} tháng</td>
                                <td>{{$item->lai_suat}}%</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td>{{$item->trang_thai}}</td>
                                <td>
                                    <button class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div id="menuthechap" class="container-fluid tab-pane fade"><br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#TT</th>
                        <th scope="col">Mã Hợp đồng</th>
                        <th scope="col">Giá trị khoản vay</th>
                        <th scope="col">Thời hạn</th>
                        <th scope="col">Lãi suất</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($thechap as $item)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$item->ma_hd}}</td>
                            <td>{{number_format($item->khoan_vay)}} VND</td>
                            <td>{{$item->thang_vay}} tháng</td>
                            <td>{{$item->lai_suat}}%</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td>{{$item->trang_thai}}</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
