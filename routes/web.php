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
});//->middleware('auth')->name('home');


Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');

Route::get('/admin', function () {
    return view('/admin/admin/admin');
});

Route::get('/admin/create', function () {
    return view('/admin/admin/create');
});

Route::get('/siswa','SiswaController@index');
//->middleware('auth')->name('siswa');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa/create', 'SiswaController@store');
Route::get ('/siswa/{siswa}', 'SiswaController@show');



Route::get('/siswa/show', function () {
    return view('/admin/siswa/show');
});


Route::get('/guru', 'GuruController@index');
Route::get('/guru/show/{id}', 'GuruController@show')->name('showGuru');

Route::get('/guru/create', 'GuruController@create');
Route::post('/guru/create', 'GuruController@store');
Route::get ('/guru/cetak_pdf', 'GuruController@cetak_pdf');
 
Route::get('/kelas', 'KelasController@index');

Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas/create', 'KelasController@store');

Route::get('/walikelas', 'WaliKelasController@index');
Route::get('/walikelas/create', 'WaliKelasController@create');
Route::post('/walikelas/create', 'WaliKelasController@store');

Route::get('/mapel', 'MapelController@index');

Route::get('/mapel/create', 'MapelController@create');
Route::post('/mapel/create', 'MapelController@store');

// Route::get('/absenguru', function () {
//     return view('/admin/absensi/guru');
// });

Route::get('/absenguru', 'AbsensiGuruController@index');
//Route::get('/guru/{id}', 'GuruController@show');
Route::post('/absenguru', 'AbsensiGuruController@store');

Route::get('/absensiswasekolah', function () {
    return view('/admin/absensi/siswaSekolah');
});
Route::get('/absensiswapengajian', function () {
    return view('/admin/absensi/siswaPengajian');
});
Route::get('/laporansiswasekolah', function () {
    return view('/admin/absensi/laporanSiswaSekolah');
});
Route::get('/laporansiswapengajian', function () {
    return view('/admin/absensi/laporanSiswaPengajian');
});

Route::get('/absensiswa','AbsensiController@index');
