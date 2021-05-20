<?php

namespace App\Http\Controllers;

use App\Models\KhoanVay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KhoanVayController extends Controller
{

    public function index()
    {
        return view('employee.khoanvay.list', [
            'khoanvay' => KhoanVay::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.khoanvay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['gia_tri', 'lai_suat', 'thoi_han']);

        Validator::make($data,
            $rules = [
                'gia_tri'=> 'required|integer',
                'lai_suat' => 'required|numeric',
                'thoi_han' => 'required|integer|min:3|max:12',
            ],
            $messages = [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là trường số',
                'numeric ' =>':attribute phải là trường số',
            ])->validate();

        KhoanVay::create($data);
        session()->flash('success', 'Tạo khoản vay thành công');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KhoanVay  $khoanVay
     * @return \Illuminate\Http\Response
     */
    public function show(KhoanVay $khoanVay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KhoanVay  $khoanVay
     * @return \Illuminate\Http\Response
     */
    public function edit(KhoanVay $khoanVay)
    {
        return view('employee.khoanvay.edit', [
            'khoanvay' => $khoanVay
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KhoanVay  $khoanVay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KhoanVay $khoanVay)
    {
        $data = $request->only(['gia_tri', 'lai_suat', 'thoi_han']);

        Validator::make($data,
            $rules = [
                'gia_tri'=> 'required|integer',
                'lai_suat' => 'required|numeric',
                'thoi_han' => 'required|integer|min:3|max:12',
            ],
            $messages = [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là trường số',
                'numeric ' =>':attribute phải là trường số',
            ])->validate();

        $khoanVay->update($data);
        session()->flash('success', 'Cập nhật khoản vay thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KhoanVay  $khoanVay
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhoanVay $khoanVay)
    {
        $khoanVay->delete();
        session()->flash('success', 'Đã xóa khoản vay');
        return redirect()->back();
    }
}
