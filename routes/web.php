<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
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
    Route::post("absensi/rekap",[AbsensiController::class, 'rekap']);
});

Route::get('/gaji', function () {
    return view('gaji/gaji');
});

Route::get('/pph', function () {
    return view('perhitungan/pph');
});

Route::get('/data_gaji', function () {
    return view('gaji/data_gaji');
});

