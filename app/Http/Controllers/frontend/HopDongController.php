<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\HopDong;
use App\Models\KhoanVay;
use App\Models\LaiSuatThang;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HopDongController extends Controller
{
    //
    public function vayTinChap(){
        return view('frontend.hopdong.tinchap', [
            'khoanvay' => KhoanVay::orderBy('gia_tri')->get(),
            'laisuat' => LaiSuatThang::orderBy('thang')->get()
        ]);
    }

    public function vayTheChap(){
        return view('frontend.hopdong.thechap');
    }

    public function vayTinChapCreate(Request $request){

//        dd($request->all());

        $data = $request->only(['ho_ten', 'gioi_tinh', 'thu_nhap', 'ngay_sinh', 'hoc_van', 'dia_chi', 'email', 'so_dt'
            ,'so_cmnd', 'ngay_cap', 'noi_cap', 'ten_nh', 'stk_nh', 'chutk_nh', 'khoan_vay', 'kieu_hd'
        ]);

        $laisuat = LaiSuatThang::find($request->laisuat_id);
        $data['thang_vay'] = $laisuat->thang;
        $data['lai_suat_thang'] = $laisuat->lai_suat_thang;

        $date = new DateTime();
        $data['ma_hopdong'] = 'HDTC'.$date->getTimestamp().'U'.auth()->user()->id.'';

        $dongTien = '';
        $arr = [];
        for ($i=1; $i<= $data['thang_vay']; $i++){
            $tmp = [];

            $dateCreate = date_create(date("Y-m-d"));
            date_add($dateCreate,date_interval_create_from_date_string("30 days"));
            $tmp['date'] = date_format($dateCreate,"Y-m-d");

            $tmp['status'] = 0;
            array_push($arr, $tmp);
        }
//        echo '<pre>';
//        var_dump($arr);
//        echo '</pre>';
        $data['dong_tien'] = json_encode($arr);

//        dd($data['dong_tien']);

        $hopdong = auth()->user()->hopDongUser()->create($data);

//        CMND_TRUOC
        if ($request->hasFile('cmnd_truoc')){
            $original_name_truoc = $request->cmnd_truoc->getClientOriginalName();
            $mime_name = substr($original_name_truoc,  strrpos($original_name_truoc,'.') );
            $item_path_truoc = $request->cmnd_truoc->storeAs('uploads/anh-xac-minh/tin-chap', // path to save
                'anh-cmnd-truoc'.$mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-truoc',
                'path' => $item_path_truoc,
            ]);
        }

//        CMND_SAU
        if ($request->hasFile('cmnd_sau')) {
            $original_name_sau = $request->cmnd_sau->getClientOriginalName();
            $mime_name_sau = substr($original_name_sau, strrpos($original_name_sau, '.'));
            $item_path_sau = $request->cmnd_sau->storeAs('uploads/anh-xac-minh/tin-chap', // path to save
                'anh-cmnd-sau' . $mime_name_sau); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-sau',
                'path' => $item_path_sau,
            ]);
        }


        //        Anh mat
        if ($request->hasFile('anh_mat')) {
            $original_name_mat = $request->anh_mat->getClientOriginalName();
            $mime_name_mat = substr($original_name_mat, strrpos($original_name_mat, '.'));
            $item_path_mat = $request->anh_mat->storeAs('uploads/anh-xac-minh/tin-chap', // path to save
                'anh-mat' . $mime_name_mat); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-mat',
                'path' => $item_path_mat,
            ]);
        }

        session()->flash('success', 'Đã tạo hợp đồng, bạn vui lòng chờ nhân viên xác thực và xác nhận.');

        return redirect()->back();

    }
}
