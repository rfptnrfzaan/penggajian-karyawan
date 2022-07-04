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
});


Route::get('/absensi', function () {
    return view('karyawan/absensi');
});

Route::get('/gaji', function () {
    return view('karyawan/gaji');
});

Route::get('/pph', function () {
    return view('karyawan/pph');
});

Route::get('/data_absensi', function () {
    
});

Route::get('/data_gaji', function () {
    return view('karyawan/data_gaji');
});
?>
