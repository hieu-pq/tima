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
        $data = $request->only(['thang', 'lai_tin_chap', 'lai_the_chap']);

        Validator::make($data,
            $rules = [
                'lai_tin_chap' => 'required|numeric',
                'lai_the_chap' => 'required|numeric',
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
     * @param  \App\Models\LaiSuatThang  $lai_suat
     * @return \Illuminate\Http\Response
     */
    public function show(LaiSuatThang $lai_suat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaiSuatThang  $lai_suat
     * @return \Illuminate\Http\Response
     */
    public function edit(LaiSuatThang $lai_suat)
    {
        return view('employee.laisuatthang.edit', [
            'lai_suat' => $lai_suat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaiSuatThang  $lai_suat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaiSuatThang $lai_suat)
    {
        $data = $request->only(['thang', 'lai_the_chap', 'lai_tin_chap']);

        Validator::make($data,
            $rules = [
                'lai_the_chap' => 'required|numeric',
                'lai_tin_chap' => 'required|numeric',
                'thang' => 'required|integer|min:1|max:36',
            ],
            $messages = [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là trường số',
            ])->validate();

        $lai_suat->update($data);
        session()->flash('success', 'Cập nhật lãi suất tháng thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaiSuatThang  $lai_suat
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaiSuatThang $lai_suat)
    {
        $lai_suat->delete();
        session()->flash('success', 'Đã xóa lãi suất tháng');
        return redirect()->back();
    }
}
