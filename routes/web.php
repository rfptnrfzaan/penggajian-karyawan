<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PphController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return redirect('/login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    });

    Route::resource('karyawan', KaryawanController::class);
    Route::resource('absensi', AbsensiController::class);
    Route::post("absensi/lihat",[AbsensiController::class, 'lihat']);

    Route::get("gaji",[GajiController::class, 'index']);
    Route::post("gaji/lihat",[GajiController::class, 'lihat']);
    Route::get("gaji/detail/{tahun}/{bulan}/{id_karyawan}",[GajiController::class, 'detail']);

    Route::get("pph",[PphController::class, 'index']);
    Route::post("pph/lihat",[PphController::class, 'lihat']);
    Route::get("pph/detail/{tahun}/{bulan}/{id_karyawan}",[PphController::class, 'detail']);
});

Route::get('/reset password', function () {
    return view('login/reset');
});