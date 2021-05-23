@extends('employee.layouts.app')

@section('title')
    Danh sách khoản vay
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 text-center">
                @include('employee.template-parts.status')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Danh sách khoản vay</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#TT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Lương</th>
                        <th scope="col">Năm kinh nghiệm</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($employee as $item)

                        <tr>
                            <th scope="row">{{$loop->index +1}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td> @if($item->luong) {{number_format($item->luong)}} VNĐ @else NULL @endif</td>
                            <td>{{$item->kinh_nghiem??'NULL'}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{route('employee.tai-khoan.edit', $item)}}"><i class="fas fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#e-{{$item->id}}"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>

                        <!-- Modal delete -->
                        <div class="modal fade" id="e-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{route('employee.tai-khoan.destroy', $item)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn muốn xóa tài khoản của nhân viên <b>{{$item->name}}</b>?</p>
                                            <ul>Lưu ý rằng:
                                                <li>Thao tác này không thể khôi phục</li>
                                                <li>Nhân viên muốn xóa không tạo/xử lý bất kỳ hợp đồng nào</li>
                                            </ul>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
