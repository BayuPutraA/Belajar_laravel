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
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat belajar laravel dengan semangat dan rajin";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

//route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//Route CRUD
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');

Route::get('/input', 'MangatsngodingController@input');
Route::post('/proses', 'MangatsngodingController@proses');

Route::get('/karyawan', 'KaryawanController@index');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/enkripsi', 'BayuController@enkripsi');
Route::get('/data/', 'BayuController@data');
Route::get('/data/{data_rahasia}', 'BayuController@data_proses');
Route::get('/hash', 'BayuController@hash');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

Route::get('/session/tampil', 'TesController@tampilkanSession');
Route::get('/session/buat', 'TesController@buatSession');
Route::get('/session/hapus', 'TesController@hapusSession');

Route::get('/pesan', 'NotifController@index');
Route::get('/pesan/sukses', 'NotifController@sukses');
Route::get('/pesan/peringatan', 'NotifController@peringatan');
Route::get('/pesan/gagal', 'NotifController@gagal');

Route::get('/ngoding', 'NgodingController@index');
Route::get('/ngoding/{nama}', 'NgodingController@index');

Route::get('/kirimemail', 'NgodingEmailController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
