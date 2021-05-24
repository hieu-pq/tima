<?php

namespace App\Http\Controllers;

use App\Models\NganSach;
use Illuminate\Http\Request;

class NganSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.ngansach.list', [
            'ngansach' => NganSach::orderBy('nam')->get()
        ]);
    }


    public function bosung()
    {
        return view('employee.ngansach.bosung', [
            'ngansach' => NganSach::where('nam', date('Y').'')->orderBy('created_at', 'desc')->first()
        ]);
    }

    public function create()
    {
        return view('employee.ngansach.create', [
            'ngansach' => NganSach::where('nam', date('Y').'')->orderBy('created_at', 'desc')->first()
            ]);
    }


    public function store(Request $request)
    {
        //
    }

    public function store_bs(Request $request)
    {
        $ngansach = NganSach::where('nam', date('Y').'')->orderBy('created_at', 'desc')->first();

        $bosung = doubleval($request->bo_sung);

        $tong = $ngansach->tong + $bosung;
        $conlai = $ngansach->con_lai + $bosung;
        $lan =  $ngansach->lan + 1;

        NganSach::create([
            'tong' => $tong,
            'bo_sung' => $bosung,
            'con_lai' => $conlai,
            'nam' => $ngansach->nam,
            'lan' => $lan,
        ]);

        session()->flash('success', 'Bổ sung ngân sách thành công. Đã đưa ngân sách này vào hoạt động!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NganSach  $nganSach
     * @return \Illuminate\Http\Response
     */
    public function show(NganSach $nganSach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NganSach  $nganSach
     * @return \Illuminate\Http\Response
     */
    public function edit(NganSach $nganSach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NganSach  $nganSach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NganSach $nganSach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NganSach  $nganSach
     * @return \Illuminate\Http\Response
     */
    public function destroy(NganSach $nganSach)
    {
        //
    }
}
