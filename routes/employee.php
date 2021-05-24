<?php

use App\Http\Controllers\Employee\Auth\EmployeeAuthController;
use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\HopDongController;
use App\Http\Controllers\KhoanVayController;
use App\Http\Controllers\LaiSuatThangController;
use App\Http\Controllers\NganSachController;
use Illuminate\Support\Facades\Route;


Route::prefix('employee')->name('employee.')->group(function () {

    Route::middleware(['guest:employee'])->group(function (){
        Route::view('/login', 'employee.auth.login')->name('login'); //VIEW: admin.auth.login
        Route::post('/login', [EmployeeAuthController::class, 'login']);
    });

    Route::middleware('auth:employee')->group(function () {

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::post('logout', [EmployeeAuthController::class, 'logout'])->name('logout');
        Route::resource('khoan-vay', KhoanVayController::class);
        Route::resource('tai-khoan', \App\Http\Controllers\EmployeeController::class);

        Route::resource('lai-suat', LaiSuatThangController::class);

        Route::get('ngan-sach/bo-sung', [NganSachController::class, 'bosung'])->name('ngan-sach.bosung');
        Route::post('ngan-sach/bo-sung', [NganSachController::class, 'store_bs'])->name('ngan-sach.store_bs');
        Route::resource('ngan-sach', NganSachController::class);

        Route::get('/hop-dong', [HopDongController::class, 'adminView'])->name('admin.hopdong');

        Route::get('/hop-dong/{hopdong}/chi-tiet', [HopDongController::class, 'detail'])->name('admin.detail');

//        Route::get('/hop-dong/{hopdong}/chi-tiet', [HopDongController::class, 'duyet'])->name('admin.hopdong.duyet');
        Route::patch('/hop-dong/{hopdong}/chi-tiet', [HopDongController::class, 'duyet'])->name('admin.hopdong.duyet');

        Route::patch('/hop-dong/{hopdong}/thanh-ly', [HopDongController::class, 'thanhly'])->name('admin.hopdong.thanhly');

        Route::patch('/hopdong/{hopdong}/ky-han', [HopDongController::class, 'kyhan'])->name('admin.hopdong.kyhan');

        Route::get('/thong-ke-doanh-thu', [HopDongController::class, 'thongkedoanhthu'])->name('thongke');

        Route::get('/thong-ke-hop-dong', [HopDongController::class, 'thongkehopdong'])->name('thongkehd');

    });

});
