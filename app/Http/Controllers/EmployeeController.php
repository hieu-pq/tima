<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\HopDong;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.taikhoan.list', [
            'employee' => Employee::where('role', 'employee')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.taikhoan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'luong', 'kinh_nghiem', 'password']);

        $data['password'] = bcrypt($data['password']);

        Employee::create($data);

        session()->flash('success', 'Tạo tài khoản thành công.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $tai_khoan)
    {
        return view('employee.taikhoan.edit', [
            'tai_khoan'=> $tai_khoan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $tai_khoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $tai_khoan)
    {
        $hopdong = HopDong::where('employee_id', $tai_khoan->id)->count();

        if($hopdong > 0){
           session()->flash('error', 'Không thể xóa. Tài khoản này đang xử lý '.$hopdong.' hợp đồng.');
        } else {
            $tai_khoan->delete();
            session()->flash('success', 'Đã xóa tài khoản '.$tai_khoan->name);
        }

        return redirect()->back();

    }
}
