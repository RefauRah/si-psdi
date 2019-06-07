<?php

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
    return view('/company/base');
});

Route::get('/login', function () {
    return view('/admin/login');
});

Route::get('/home', function () {
    return view('/admin/home');
});

Route::get('/admin', function () {
    return view('/admin/admin/admin');
});

Route::get('/siswa', function () {
    return view('/admin/siswa/siswa');
});

Route::get('/guru', function () {
    return view('/admin/guru/guru');
});

Route::get('/kelas', function () {
    return view('/admin/kelas/kelas');
});

Route::get('/walikelas', function () {
    return view('/admin/wali_kelas/wali_kelas');
});

Route::get('/mapel', function () {
    return view('/admin/mapel/mapel');
});