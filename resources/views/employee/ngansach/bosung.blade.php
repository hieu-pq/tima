@extends('employee.layouts.app')

@section('title')
    Tạo mới khoản vay
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
                <h2 class="text-center">Bổ sung ngân sách</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tổng ngân sách hiện tại</label>
                            <input type="text" class="form-control" value="{{number_format($ngansach->tong)}} VND" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tổng ngân sách còn lại</label>
                            <input type="text" class="form-control" value="{{number_format($ngansach->con_lai)}} VND" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Năm</label>
                            <input type="text" class="form-control" value="{{$ngansach->nam}}" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Lần bổ sung</label>
                            <input type="text" class="form-control" value="{{$ngansach->lan}}" disabled>
                        </div>
                    </div>

                </div>

                <hr>

                    <form action="{{route('employee.ngan-sach.store_bs')}}" method="POST">

                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="thang">Bổ sung thêm</label>
                            <input type="number" step="1000000" min="1000000" class="form-control" id="bo_sung" name="bo_sung" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Tạo mới</button>

                    </form>
            </div>
        </div>
    </div>
@endsection
