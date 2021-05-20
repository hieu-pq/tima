<?php

use App\Http\Controllers\frontend\HomeController;
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

Route::get('/tao-hop-dong-the-chap', function (){
    return view('frontend.hopdong.thechap');
})->name('users.thechap');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'Profile'])->name('user.profile');
});

require __DIR__.'/employee.php'; // ghep file
