@extends('employee.layouts.app')

@section('title')
    Sửa lãi suất tháng
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
                <h2 class="text-center">Sửa lãi suất tháng</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                    <form action="{{route('employee.lai-suat.store')}}" method="POST">

                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="lai_suat_thang">Lãi suất tính theo tháng ( % / tháng )</label>
                            <input type="number" step="0.01" min="0.01" max="100"
                                   class="form-control" id="lai_suat_thang" name="lai_suat_thang" value="{{$laiSuatThang->lai_suat_thang}}" required>
                        </div>

                        <div class="form-group">
                            <label for="thang">Số tháng vay</label>
                            <input type="number" step="1" min="1" max="36" class="form-control"
                                   id="thang" name="thang" value="{{$laiSuatThang->thang}}" required>
                        </div>

                        {{$laiSuatThang}}

                        <button type="submit" class="btn btn-primary">Cập nhật</button>

                    </form>
            </div>
        </div>
    </div>
@endsection
