<?php

namespace App\Http\Controllers;

use App\Models\LaiSuatThang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaiSuatThangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.laisuatthang.list', [
            'items' => LaiSuatThang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.laisuatthang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['thang', 'lai_suat_thang']);

        Validator::make($data,
            $rules = [
                'lai_suat_thang' => 'required|numeric',
                'thang' => 'required|integer|min:1|max:36',
            ],
            $messages = [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là trường số',
            ])->validate();

        LaiSuatThang::create($data);
        session()->flash('success', 'Tạo lãi suất tháng thành công');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaiSuatThang  $laiSuatThang
     * @return \Illuminate\Http\Response
     */
    public function show(LaiSuatThang $laiSuatThang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaiSuatThang  $laiSuatThang
     * @return \Illuminate\Http\Response
     */
    public function edit(LaiSuatThang $laiSuatThang)
    {
        dd($laiSuatThang);
        return view('employee.laisuatthang.edit', [
            'laiSuatThang' => $laiSuatThang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaiSuatThang  $laiSuatThang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaiSuatThang $laiSuatThang)
    {
        $data = $request->only(['thang', 'lai_suat_thang']);

        Validator::make($data,
            $rules = [
                'lai_suat_thang' => 'required|numeric',
                'thang' => 'required|integer|min:1|max:36',
            ],
            $messages = [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là trường số',
            ])->validate();

        $laiSuatThang->update($data);
        session()->flash('success', 'Cập nhật lãi suất tháng thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaiSuatThang  $laiSuatThang
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaiSuatThang $laiSuatThang)
    {
        dd($laiSuatThang);
        $laiSuatThang->delete();
        session()->flash('success', 'Đã xóa lãi suất tháng');
        return redirect()->back();
    }
}
