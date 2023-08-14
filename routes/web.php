<?php

use App\Http\Middleware\CekRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegistrasiController;

use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PesananDetailController;


use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;

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

// Route::get('/', function () {
//     return view('administrator.dashboard');
// });
// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/login', [LoginController::class, 'index'])->name('login');
//     Route::get('/lupa-password', [LoginController::class, 'lupaPassword']);
//     Route::post('/lupa-password', [LoginController::class, 'submitForgetPasswordForm'])->name('password.email');
//     Route::get('/reset-password/{token}', [LoginController::class, 'showResetPasswordForm'])->name('reset.password.get')->middleware('guest');
//     Route::post('/reset-password', [LoginController::class, 'submitResetPasswordForm'])->name('reset.password.post');
// });



Route::get('/', function () {
    return view('landing.homepage');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);


Route::group(['middleware' => 'auth'], function () {
    // yg sudah login biasa akses:
    Route::get('/logout', [LoginController::class, 'logout']);
});
