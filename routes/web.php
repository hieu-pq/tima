<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\HopDongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/vay-tien-online', [HomeController::class, 'vay_online'])->name('vay_online');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [UserController::class, 'Profile'])->name('user.profile');
    Route::patch('/profile/{user}/update', [UserController::class, 'updateProfile'])->name('user.update');

    Route::get('/lich-su', [UserController::class, 'lichsu'])->name('user.lichsu');
    Route::get('/lich-su/{hopdong}', [UserController::class, 'detail'])->name('user.lichsu.detail');

    Route::get('/vay-tin-chap', [HopDongController::class, 'vayTinChap']);
    Route::get('/vay-the-chap', [HopDongController::class, 'vayTheChap'] );
    Route::post('/vay-tin-chap', [HopDongController::class, 'vayTinChapCreate'])->name('tin-chap.create');
    Route::post('/vay-the-chap', [HopDongController::class, 'vayTheChapCreate'])->name('the-chap.create');
});

require __DIR__.'/employee.php'; // ghep file
