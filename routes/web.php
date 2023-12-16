<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/penyewaan-mobil', function () {
    return view('penyewaan-mobil');
});
Route::get('/register-users', function () {
    return view('register-users');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/daftar-mobil', function () {
    return view('daftar-mobil');
});
Route::get('/laporan-penyewaan', function () {
    return view('laporan-penyewaan');
});