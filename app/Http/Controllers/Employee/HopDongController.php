<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\DoanhThu;
use App\Models\Employee;
use App\Models\HopDong;
use App\Models\NganSach;
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

            $ngansach = NganSach::where('nam', date('Y').'')->orderBy('created_at', 'desc')->first();

            if($hopdong->khoan_vay > $ngansach->con_lai){
                session()->flash('error', 'Không đủ ngân sách để giải ngân cho hợp đồng này. Hãy bổ sung thêm ngân sách!');
                return redirect()->back();
            } else {
                $ngansach->update([
                    'con_lai' => $ngansach->con_lai - $hopdong->khoan_vay
                ]);
            }

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

        } elseif($request->trang_thai == 'reject'){
            $hopdong->update([
                'employee_id' => Auth::user()->id,
                'trang_thai' => 'reject',
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

        $tienlai = ceil($tiengoc*(5/100));

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

        $tiengoc = ($hopdong->khoan_vay/$hopdong->thang_vay);
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

    public function thongkedoanhthu(Request $request){

        if ($request->has('date_from') && $request->has('date_to')){
            $timeFrom = ($request->date_from);
            $timeTo = ($request->date_to.' 23:59:59');
            session()->flash('success', 'Doanh thu từ ngày: '.$timeFrom.' đến ngày '.$timeTo);
            $doanhthu = DoanhThu::where('created_at', '>=',$timeFrom)->where('created_at', '<=',$timeTo)->get();
        } else{
            $doanhthu = DoanhThu::all();
        }

        return view('employee.thongke.thongke-doanhthu', [
            'doanhthu' => $doanhthu
        ]);
    }

    public function thongkehopdong(Request $request){

        if ($request->has('date_from') && $request->has('date_to')){
            $timeFrom = ($request->date_from);
            $timeTo = ($request->date_to.' 23:59:59');
            session()->flash('success', 'Từ ngày: '.$timeFrom.' đến ngày '.$timeTo);
            $tinchap = HopDong::where('created_at', '>=',$timeFrom)->where('created_at', '<=',$timeTo)->where('kieu_hd', 'tín chấp')->get();
            $thechap = HopDong::where('created_at', '>=',$timeFrom)->where('created_at', '<=',$timeTo)->where('kieu_hd', '!=', 'tín chấp')->get();

        } else{
            $tinchap = HopDong::where('kieu_hd', 'tín chấp')->get();
            $thechap = HopDong::where('kieu_hd', '!=', 'tín chấp')->get();
        }

        return view('employee.thongke.thongke-hopdong',[
            'tinchap' => $tinchap,
            'thechap' => $thechap,
        ]);
    }


}
