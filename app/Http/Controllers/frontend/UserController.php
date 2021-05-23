<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\HopDong;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Profile() {
        return view('frontend.user.profile');
    }

    public function updateProfile(Request $request, User $user){
        $data = $request->only(['dia_chi', 'name']);

        $user->update($data);
        session()->flash('success', 'Đã cập nhật thông tin');

        return redirect()->back();
    }

    public function lichsu()
    {
        return view('frontend.user.lichsu');
    }

    public function detail(HopDong $hopdong){
        $employee = null;
        if($hopdong->employee_id){
            $employee = Employee::find($hopdong->employee_id);
        }

        return view('frontend.user.lichsu_detail', [
            'hopdong' => $hopdong,
            'employee' => $employee
        ]);
    }

}
