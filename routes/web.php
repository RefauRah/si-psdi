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



Route::get('/admin', 'DashboardController@index')->middleware('auth')->name('admin');
Route::get('/admin/create', 'DashboardController@create')->middleware('auth')->name('admin/create');
Route::post('/admin/create', 'DashboardController@store');

Route::get('/siswa','SiswaController@index')->middleware('auth')->name('siswa');
//->middleware('auth')->name('siswa');
Route::get('/siswa/create', 'SiswaController@create')->middleware('auth')->name('siswa');
Route::post('/siswa/create', 'SiswaController@store');
Route::get ('/siswa/{siswa}', 'SiswaController@show')->middleware('auth')->name('siswa');



Route::get('/siswa/show', function () {
    return view('/admin/siswa/show');
});


Route::get('/guru', 'GuruController@index')->middleware('auth')->name('guru');


Route::get('/guru/show/{id}', 'GuruController@show')->middleware('auth')->name('showGuru');

// Route::get('/guru/create', 'GuruController@create')->middleware('auth')->name('guru/create');
Route::get('/guru/create', 'GuruController@create')->middleware('auth')->name('createGuru');
Route::post('/guru/create', 'GuruController@store');
Route::get('/guru/edit/{id}', 'GuruController@edit')->middleware('auth')->name('editGuru');
Route::post('/guru/edit', 'GuruController@update');
Route::get ('/guru/cetak_pdf', 'GuruController@cetak_pdf')->middleware('auth')->name('guru/cetak_pdf');
Route::get ('/guru/cetak_profil_pdf/{id}', 'GuruController@cetak_profil_pdf')->middleware('auth')->name('guru/cetak_profil_pdf');
 
Route::get('/kelas', 'KelasController@index')->middleware('auth')->name('kelas');
Route::get('/kelas/show/{id}', 'KelasController@show')->middleware('auth')->name('showKelas');
Route::get('/kelas/create', 'KelasController@create')->middleware('auth')->name('kelas');
Route::post('/kelas/create', 'KelasController@store');

Route::get('/walikelas', 'WaliKelasController@index')->middleware('auth')->name('walikelas');
Route::get('/walikelas/create', 'WaliKelasController@create')->middleware('auth')->name('walikelas/create');
Route::post('/walikelas/create', 'WaliKelasController@store');

Route::get('/keuangan', 'KeuanganController@index')->middleware('auth')->name('keuangan');
Route::get('/keuangan/create', 'KeuanganController@create')->middleware('auth')->name('keuangan');
Route::post('/keuangan/create', 'keuanganController@store');

Route::get('/mapel', 'MapelController@index')->middleware('auth')->name('mapel');

Route::get('/mapel/create', 'MapelController@create')->middleware('auth')->name('mapel');
Route::post('/mapel/create', 'MapelController@store');

// Route::get('/absenguru', function () {
//     return view('/admin/absensi/guru');
// });

Route::get('/absenguru', 'AbsensiGuruController@index');
//Route::get('/guru/{id}', 'GuruController@show');
Route::post('/absenguru', 'AbsensiGuruController@store');

Route::get('/absenstaff', function () {
    return view('/admin/absensi/staff');
});

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

Route::get('/staff', function () {
    return view('/admin/staff/staff');
});

Route::get('/staff/create', function () {
    return view('/admin/staff/create');
});

Route::get('/absensiswa','AbsensiController@index');



Route::get('/kirimemail','AdminEmailController@index');

Auth::routes();

// Route::get('/admin-login','AdminLoginController@showLoginForm');
// Route::post('/admin-login', ['as' => 'admin-login', 'uses' => 'AdminLoginController@login']);
// Route::get('/admin-register','AdminLoginController@showRegisterPage');
// Route::post('/admin-register', 'AdminLoginController@register')->name('admin.register');

Route::get('/admin-login', 'AdminController@showLoginForm')->name('admin.loginform');
// Route::get('/admin-register', 'AdminController@showRegisterForm')->name('admin.registerform');
Route::post('/admin-login', 'AdminController@login')->name('admin.login');
// Route::post('/admin-register', 'AdminController@register')->name('admin.register');
Route::get('/admin-home', 'AdminController@index')->middleware('auth:admin')->name('admin.home');
Route::get('/admin-logout', 'AdminController@logout')->name('admin.logout');


// Route::get('/notif', function() {
//     $user = \App\SiswaModel::first();
//     $user->notify(new \App\Notifications\Daftar);
// });

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
});

Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
Route::match(['get', 'post'], '/SuperAdminOnlyPage/', 'HomeController@super_admin');
});

Route::group(['middleware' => 'App\Http\Middleware\KeuanganMiddleware'], function()
{
Route::match(['get', 'post'], '/KeuanganOnlyPage/', 'HomeController@Keuangan');
});

Route::group(['middleware' => 'App\Http\Middleware\AbsensiMiddleware'], function()
{
Route::match(['get', 'post'], '/AbsensiOnlyPage/', 'HomeController@Absensi');
});

