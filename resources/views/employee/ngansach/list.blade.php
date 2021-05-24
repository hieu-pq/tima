@extends('employee.layouts.app')

@section('title')
    Ngân sách
@endsection

@section('content')
    <div class="container-fluid">
        <h3 class="text-center mb-3">Danh sách ngân sách</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#TT</th>
                <th scope="col">Năm</th>
                <th scope="col">Lần</th>
                <th scope="col">Tổng ngân sách</th>
                <th>Bổ sung thêm</th>
                <th>Ngân sách còn lại</th>
                <th>Lúc</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
                @foreach($ngansach as $item)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$item->nam}}</td>
                        <td>{{$item->lan}}</td>
                        <td>{{number_format($item->tong)}} VND</td>
                        <td>
                            @if($item->bo_sung>0)
                                {{number_format($item->bo_sung)}} VND
                            @endif
                        </td>
                        <td>{{number_format($item->con_lai)}} VND</td>
                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                        <td>@if($item->id == $NGANSACH->id) <strong>đang sử dụng</strong> @endif</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

