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

Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/register', 'AuthController@getRegister')->middleware('guest')->name('register');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/home', function () {
    return view('/admin/home');
})->middleware('auth')->name('home');

Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');

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