<?php

use App\Http\Controllers\Employee\Auth\EmployeeAuthController;
use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\HopDongController;
use App\Http\Controllers\KhoanVayController;
use App\Http\Controllers\LaiSuatThangController;
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

        Route::resource('lai-suat', LaiSuatThangController::class);

        Route::get('/tin-chap', [HopDongController::class, 'adminView'])->name('admin.tinchap');

    });

});
