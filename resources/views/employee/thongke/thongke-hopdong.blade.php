@extends('employee.layouts.app')

@section('title')
    Thống kê hợp đồng
@endsection

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                @include('employee.template-parts.status')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h2>Thống kê hợp đồng</h2>
            </div>
        </div>

        <form action="{{route('employee.thongkehd')}}" method="GET" class="row">
                    @csrf
                    @method('GET')
                    <div class="col-md-5">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Từ ngày</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="date_from" name="date_from" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Đến ngày</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="date_to" name="date_to" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="w-100 btn btn-primary">Lọc</button>
                    </div>

                </form>

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

            <div id="menutinchap" class="container-fluid tab-pane active">

                <br>

                <div class="container-infor mt-2 row">

                    @php
                        $trangthaiT['pending'] = 0;
                        $trangthaiT['active'] = 0;
                        $trangthaiT['reject'] = 0;
                        $trangthaiT['done'] = 0;
                        $giainganT = 0;
                        $loiT = 0;
                        foreach ($tinchap as $item){
                            $loiT += ($item->khoan_vay*$item->thang_vay*$item->lai_suat)/100;
                            $giainganT += $item->khoan_vay;
                           $trangthaiT[$item->trang_thai]++;
                        }
                    @endphp
                    <div class="col-md-6">
                        <p>Hợp đồng đang vay: {{$trangthaiT['active']}}</p>
                        <p>Hợp đồng đang chờ xử lý: {{$trangthaiT['pending']}}</p>
                        <p>Hợp đồng đã loại bỏ: {{$trangthaiT['reject']}}</p>
                        <p>Hợp đồng đã hoàn thành: {{$trangthaiT['done']}}</p>
                    </div>

                    <div class="col-md-6">
                        <p>Tổng hợp đồng: {{$tinchap->count()}}</p>
                        <p>Đã giải ngân: {{number_format($giainganT)}} VNĐ</p>
                        <p> Lợi nhuận ước tính: {{number_format($loiT)}} VNĐ ~@if($giainganT>0) {{number_format((double)$loiT*100/$giainganT)}} % @endif</p>

                    </div>

                </div>

                <br>

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
                                    <a href="{{route('employee.admin.detail', $item)}}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div id="menuthechap" class="container-fluid tab-pane fade">
                <br>
                <div class="container-infor mt-2 row">

                    @php
                        $trangthaiTh['pending'] = 0;
                        $trangthaiTh['active'] = 0;
                        $trangthaiTh['reject'] = 0;
                        $trangthaiTh['done'] = 0;
                        $giainganTh = 0;
                        $loiTh = 0;
                        foreach ($thechap as $item){
                            $loiTh += ($item->khoan_vay*$item->thang_vay*$item->lai_suat)/100;
                            $giainganTh += $item->khoan_vay;
                           $trangthaiTh[$item->trang_thai]++;
                        }
                    @endphp

                    <div class="col-md-6">

                        <p>Hợp đồng đang vay: {{$trangthaiTh['active']}}</p>
                        <p>Hợp đồng đang chờ xử lý: {{$trangthaiTh['pending']}}</p>
                        <p>Hợp đồng đã loại bỏ: {{$trangthaiTh['reject']}}</p>
                        <p>Hợp đồng đã hoàn thành: {{$trangthaiTh['done']}}</p>
                    </div>

                    <div class="col-md-6">
                        <p>Tổng hợp đồng: {{$thechap->count()}}</p>
                        <p>Giải ngân: {{number_format($giainganTh)}} VNĐ</p>
                        <p>Lợi nhuận ước tính: {{number_format($loiTh)}} VNĐ @if($giainganTh>0) ~ {{number_format((double)$loiTh*100/$giainganTh)}} % @endif</p>
                    </div>

                </div>
                <br>

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
                                <a href="{{route('employee.admin.detail', $item)}}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
