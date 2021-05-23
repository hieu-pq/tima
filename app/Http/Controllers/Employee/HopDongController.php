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

    public function thanhly(Request $request,HopDong $hopdong){

        $tiengoc = $hopdong->khoan_vay;

        foreach ($hopdong->doanhthu as $item){
            $tiengoc -= $item->tien_goc;
        }

        $tienlai = $tiengoc*(5/100);

        $hopdong->doanhthu()->create([
            'tien_goc' => $tiengoc,
            'tien_lai' => $tienlai
        ]);

        $hopdong->update([
            'trang_thai' => 'done',
        ]);

        session()->flash('success', 'Đã cập nhật trạng thái hợp đồng');

        return redirect()->back();

    }
    public function kyhan(Request $request, HopDong $hopdong){

        $data = json_decode($hopdong->ky_han);

        $tiengoc = $hopdong->khoan_vay/$hopdong->thang_vay;
        $tienlai = ($hopdong->khoan_vay*$hopdong->lai_suat)/100;

        if ($request->ky_han){
            foreach ($request->ky_han as $item){
                if ($data[$item]->trang_thai == 0 ){
                    $hopdong->doanhthu()->create([
                        'tien_goc' => $tiengoc,
                        'tien_lai' => $tienlai
                    ]);
                }
                $data[$item]->trang_thai = 1;
            }
            $hopdong->update(['ky_han' =>json_encode($data)]);
        }

        session()->flash('success', 'Đã cập nhật trạng thái kỳ hạn');

        return redirect()->back();
    }

    public function thongke(){
        return view('employee.thongke.index');
    }

}
