<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});
Route::get('/home', function () {
    return view('user.home');
});
Route::get('/harga', function () {
    return view('user.layanan.layanan-harga-sampah');
});
Route::get('/jemput', function () {
    return view('user.layanan.layanan-jemput-sampah');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/profil', function () {
    return view('user.profil.riwayat');
});
Route::get('/profil-set', function () {
    return view('user.profil.profil');
});
Route::get('/contact', function () {
    return view('user.reward');
});
