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

// Tampilan Awal
Route::get('/', function () {
    return view('/company/base');
});

// Login
Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/register', 'AuthController@getRegister')->middleware('guest')->name('register');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

// Home
Route::get('/home', function () {
    return view('/admin/home');
});
//->middleware('auth')->name('home');

// Logout
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');

//Admin
Route::get('/admin', function () {
    return view('/admin/admin/admin');
});

Route::get('/admin/create', function () {
    return view('/admin/admin/create');
});

// Siswa
Route::get('/siswa','SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa/create', 'SiswaController@store');

Route::get('/siswa/show', function () {
    return view('/admin/siswa/show');
});

// Guru
Route::get('/guru/show', function () {
    return view('/admin/guru/show');
});

Route::get('/guru', 'GuruController@index');
//Route::get('/guru/{id}', 'GuruController@show');
Route::get('/guru/create', 'GuruController@create');
Route::post('/guru/create', 'GuruController@store');

// Kelas
Route::get('/kelas', 'KelasController@index');

Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas/create', 'KelasController@store');

// Wali Kelas
Route::get('/walikelas', function () {
    return view('/admin/wali_kelas/wali_kelas');
});
Route::get('/walikelas/create', function () {
    return view('/admin/wali_kelas/create');
});
Route::get('/walikelas/show', function () {
    return view('/admin/wali_kelas/show');
});

// Mata Pelajaran
Route::get('/mapel', 'MapelController@index');

Route::get('/mapel/create', 'MapelController@create');
Route::post('/mapel/create', 'MapelController@store');

// Absen Guru
Route::get('/absenguru', 'AbsensiGuruController@index');
//Route::get('/guru/{id}', 'GuruController@show');
Route::post('/absenguru', 'AbsensiGuruController@store');

// Absen Siswa Sekolah
Route::get('/absensiswasekolah', function () {
    return view('/admin/absensi/siswaSekolah');
});

// Absen Siswa Pengajian
Route::get('/absensiswapengajian', function () {
    return view('/admin/absensi/siswaPengajian');
});

// Laporan Absensi
Route::get('/laporansiswasekolah', function () {
    return view('/admin/absensi/laporanSiswaSekolah');
});
Route::get('/laporansiswapengajian', function () {
    return view('/admin/absensi/laporanSiswaPengajian');
});

Route::get('/absensiswa','AbsensiController@index');