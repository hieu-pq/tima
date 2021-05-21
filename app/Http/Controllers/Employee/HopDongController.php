<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\HopDong;
use Illuminate\Http\Request;

class HopDongController extends Controller
{
    public function adminView(){
        return view('employee.hopdong.admin-hopdong',[
            'tinchap' => HopDong::where('kieu_hd', 'tín chấp')->get(),
            'thechap' => HopDong::where('kieu_hd', '!=', 'tín chấp')->get(),
        ]);
    }
}
