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
        return view('frontend.hopdong.thechap',[
            'khoanvay' => KhoanVay::orderBy('gia_tri')->get(),
            'laisuat' => LaiSuatThang::orderBy('thang')->get()
        ]);
    }

    public function vayTinChapCreate(Request $request){

        $data = $request->only(['ho_ten', 'gioi_tinh', 'thu_nhap', 'ngay_sinh', 'hoc_van', 'dia_chi', 'email', 'so_dt'
            ,'so_cmnd', 'ngay_cap', 'noi_cap', 'ten_nh', 'stk_nh', 'chutk_nh', 'khoan_vay', 'kieu_hd'
        ]);

        $laisuat = LaiSuatThang::find($request->laisuat_id);
        $data['thang_vay'] = $laisuat->thang;
        $data['kieu_hd'] = Str::lower($data['kieu_hd']);
        $data['lai_suat'] = $laisuat->lai_tin_chap;


        $date = new DateTime();
        $data['ma_hd'] = 'HDTC'.$date->getTimestamp().'U'.auth()->user()->id.'';

        $hopdong = auth()->user()->hopDongUser()->create($data);

//        CMND_TRUOC
        if ($request->hasFile('cmnd_truoc')){
            $original_name = $request->cmnd_truoc->getClientOriginalName();
            $name_without_mime = substr($original_name, 0, strrpos($original_name,'.'));
            $slug_name = Str::slug( $name_without_mime );
            $mime_name = substr($original_name,  strrpos($original_name,'.') );
            $item_path_truoc = $request->cmnd_truoc->storeAs('uploads/anh-xac-minh/tin-chap', // path to save
                $slug_name.$mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-truoc',
                'path' => $item_path_truoc,
            ]);
        }

//        CMND_SAU
        if ($request->hasFile('cmnd_sau')) {
            $original_name = $request->cmnd_sau->getClientOriginalName();
            $name_without_mime = substr($original_name, 0, strrpos($original_name,'.'));
            $slug_name = Str::slug( $name_without_mime );
            $mime_name = substr($original_name,  strrpos($original_name,'.') );
            $item_path_sau = $request->cmnd_sau->storeAs('uploads/anh-xac-minh/tin-chap', // path to save
                 $slug_name. $mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-sau',
                'path' => $item_path_sau,
            ]);
        }

        //        Anh mat
        if ($request->hasFile('anh_mat')) {
            $original_name = $request->anh_mat->getClientOriginalName();
            $name_without_mime = substr($original_name, 0, strrpos($original_name,'.'));
            $slug_name = Str::slug( $name_without_mime );
            $mime_name = substr($original_name,  strrpos($original_name,'.') );
            $item_path_mat = $request->anh_mat->storeAs('uploads/anh-xac-minh/tin-chap', // path to save
                $slug_name.$mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-mat',
                'path' => $item_path_mat,
            ]);
        }

        session()->flash('success', 'Đã tạo hợp đồng, bạn vui lòng chờ nhân viên xác thực và xác nhận.');

        return redirect()->back();

    }



    public function vayTheChapCreate(Request $request){

//        dd($request->anh_tai_san);

        $data = $request->only(['ho_ten', 'gioi_tinh', 'thu_nhap', 'ngay_sinh', 'hoc_van', 'dia_chi', 'email', 'so_dt'
            ,'so_cmnd', 'ngay_cap', 'noi_cap', 'ten_nh', 'stk_nh', 'chutk_nh', 'khoan_vay', 'kieu_hd'
        ]);

        $laisuat = LaiSuatThang::find($request->laisuat_id);
        $data['thang_vay'] = $laisuat->thang;
        $data['kieu_hd'] = Str::lower($data['kieu_hd']);
        $data['lai_suat'] = $laisuat->lai_the_chap;

        $date = new DateTime();
        $data['ma_hd'] = 'HDTHC'.$date->getTimestamp().'U'.auth()->user()->id.'';

        $hopdong = auth()->user()->hopDongUser()->create($data);

//        CMND_TRUOC
        if ($request->hasFile('cmnd_truoc')){
            $original_name = $request->cmnd_truoc->getClientOriginalName();
            $name_without_mime = substr($original_name, 0, strrpos($original_name,'.'));
            $slug_name = Str::slug( $name_without_mime );
            $mime_name = substr($original_name,  strrpos($original_name,'.') );
            $item_path_truoc = $request->cmnd_truoc->storeAs('uploads/anh-xac-minh/the-chap', // path to save
                $slug_name.$mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-truoc',
                'path' => $item_path_truoc,
            ]);
        }

//        CMND_SAU
        if ($request->hasFile('cmnd_sau')) {
            $original_name = $request->cmnd_sau->getClientOriginalName();
            $name_without_mime = substr($original_name, 0, strrpos($original_name,'.'));
            $slug_name = Str::slug( $name_without_mime );
            $mime_name = substr($original_name,  strrpos($original_name,'.') );

            $item_path_sau = $request->cmnd_sau->storeAs('uploads/anh-xac-minh/the-chap', // path to save
                $slug_name.$mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-sau',
                'path' => $item_path_sau,
            ]);
        }

        //        Anh mat
        if ($request->hasFile('anh_mat')) {
            $original_name = $request->anh_mat->getClientOriginalName();
            $name_without_mime = substr($original_name, 0, strrpos($original_name,'.'));
            $slug_name = Str::slug( $name_without_mime );
            $mime_name = substr($original_name,  strrpos($original_name,'.') );

            $item_path_mat = $request->anh_mat->storeAs('uploads/anh-xac-minh/the-chap', // path to save
                $slug_name. $mime_name); //name
            $hopdong->anhXacMinh()->create([
                'name' => 'anh-cmnd-mat',
                'path' => $item_path_mat,
            ]);
        }

        if ($request->hasFile('anh_tai_san')) {

            foreach ($request->anh_tai_san as $item) {

                $original_name = $item->getClientOriginalName();
                $name_without_mime = substr($original_name, 0, strrpos($original_name, '.'));
                $slug_name = Str::slug($name_without_mime);
                $mime_name = substr($original_name, strrpos($original_name, '.'));

                $item_path = $item->storeAs('uploads/anh-xac-minh/the-chap/tai-san/', $slug_name . $mime_name);

                $hopdong->anhXacMinh()->create([
                    'path' => $item_path,
                    'name' => Str::lower($name_without_mime) . '-anh-tai-san',
                ]);
            }
        }

        session()->flash('success', 'Đã tạo hợp đồng thế chấp, bạn vui lòng chờ nhân viên liên hệ để xác thực khoản vay và tài sản thế chấp.');

        return redirect()->back();
    }

}
