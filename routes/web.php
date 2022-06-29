<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
    
});

Route::get('/welcome', function () {
    return view('welcome');
    
});

Route::get('/form', function () {
    return view('karyawan/form');
    
});
?>