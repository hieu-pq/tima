@extends('employee.layouts.app')

@section('title')
    Thống kê
@endsection

@section('styles-import')
    <style>
        #chartShape {
            width: 100%;
            height: 600px;
            margin: 0;
            padding: 0;
        }
    </style>
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
                <h2>Thống kê doanh thu</h2>
            </div>
        </div>

        <form action="{{route('employee.thongke')}}" method="GET" class="row">
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

        @php
        $goc = 0;
        $lai = 0;
            foreach($doanhthu as $item){
                $goc += $item->tien_goc;
                $lai += $item->tien_lai;
            }
        @endphp

        <div class="font-weight-bold d-flex justify-content-around mb-3 mt-2">
            <span>Tổng tiền gốc đã thu: {{number_format($goc)}} VNĐ</span>
            <span>Tổng tiền lãi đã thu: {{number_format($lai)}} VNĐ</span>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#TT</th>
                    <th scope="col">Tiền gốc</th>
                    <th scope="col">Tiền lãi</th>
                    <th>Thời gian</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doanhthu as $item)
                    <tr>
                        <th scope="row">{{$loop->index}}</th>
                        <td>{{number_format($item->tien_goc)}} VNĐ</td>
                        <td>{{number_format($item->tien_lai)}} VNĐ</td>
                        <td>{{$item->created_at->format('d-m-y')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection


@section('scripts-import')

@endsection
