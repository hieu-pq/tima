<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\HopDong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HopDongController extends Controller
{
    public function adminView(){
        return view('employee.hopdong.admin-hopdong',[
            'tinchap' => HopDong::where('kieu_hd', 'tín chấp')->get(),
            'thechap' => HopDong::where('kieu_hd', '!=', 'tín chấp')->get(),
        ]);
    }

    public function detail(HopDong $hopdong){
        $employee = null;
        if($hopdong->employee_id){
            $employee = Employee::find($hopdong->employee_id);
        }
        return view('employee.hopdong.detail-hopdong', [
            'hopdong' => $hopdong,
            'employee' => $employee
        ]);
    }

    public function duyet(Request $request,HopDong $hopdong){

        $status = $request->trang_thai;

        if ($status == 'active'){

            $arr = [];

            $dateCreate = date("d-m-Y");
            $giai_ngan = $dateCreate;

            for ($i=1; $i<= $hopdong->thang_vay; $i++){
                $tmp = [];
                $dateCreate = date('d-m-Y', strtotime("+1 months", strtotime( $dateCreate )));
                $tmp['ky_han'] = $dateCreate;
                $tmp['trang_thai'] = 0;
                array_push($arr, $tmp);
            }

            $hopdong->update([
                'employee_id' => Auth::user()->id,
                'trang_thai' => $status,
                'ngay_giai_ngan' => $giai_ngan,
                'ky_han' => json_encode($arr)
            ]);

        }

        session()->flash('success', 'Đã cập nhật trạng thái hợp đồng');

        return redirect()->back();

    }
}
