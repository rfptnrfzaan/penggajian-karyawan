<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);

Route::get('/welcome', function () {
    return view('welcome');
    
});

Route::resource('karyawan', KaryawanController::class);


?>