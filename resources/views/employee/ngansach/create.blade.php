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
                <h2 class="text-center">Tạo mới ngân sách</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 m-auto">

                <form action="{{route('employee.ngan-sach.store')}}" method="POST">

                    @csrf
                    @method('POST')

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Mức ngân sách</label>
                                    <input type="text" class="form-control" name="tong" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Năm</label>
                                    <input type="text" class="form-control" name="nam" required>
                                    <small>
                                        <i><b>Lưu ý rằng</b>, bạn không thể tạo mới ngân sách của các năm đã có.
                                            Nếu bạn tạo ngân sách cho các năm trong tương lai, ngân sách sẽ được tự động sử dụng khi thời gian chuyển giao sang năm đó.
                                            Các hành động sau khi tạo mới ngân sách là không thể khôi phục.
                                        </i>
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Tạo mới</button>
                            </div>

                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection
