<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\KhoanVay;
use App\Models\LaiSuatThang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function vay_online(){
        return view('frontend.vay-online');
    }

    public function vayTinChap(){
        return view('frontend.hopdong.tinchap', [
            'khoanvay' => KhoanVay::all(),
            'laisuat' => LaiSuatThang::all()
        ]);
    }

    public function vayTheChap(){
        return view('frontend.hopdong.thechap');
    }

}
