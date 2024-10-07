<?php

use App\Http\Controllers\data_warga;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/welcome');
});

Route::get('/login', function () {
    return view('layout/login');
});

Route::get('/register', function () {
    return view('layout/register.index');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/rt-warga', function () {
    return view('rt-warga');
});
Route::get('/data-warga', function () {
    return view('data-warga');
});

Route::get('/buat-surat', function () {
    return view('buat-surat');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');


route::get('/data-warga/50', [data_warga::class, 'rt50']);
route::get('/data-warga/51', [data_warga::class, 'rt51']);
route::get('/data-warga/52', [data_warga::class, 'rt52']);
route::get('/data-warga/53', [data_warga::class, 'rt53']);
route::get('/data-warga/54', [data_warga::class, 'rt54']);
route::get('/data-warga/55', [data_warga::class, 'rt55']);
route::get('/data-warga/56', [data_warga::class, 'rt56']);
