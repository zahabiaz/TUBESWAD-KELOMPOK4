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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');




Route::get('/absensihariini', 'AbsensiController@absensiharini');

Route::post('/inputabsensihariini', 'AbsensiController@inputabsensihariini');
// data absensi pegawai
Route::get('/absensipegawai', 'AbsensiController@absensipegawai');
// update status kehabiran
Route::get('/absensi/{id}/update', 'AbsensiController@updateabsensi');
//form bukti absensi
Route::get('/absensi/{id}/buktiabsensi', 'AbsensiController@buktiabsensi');
//upload bukti absensi
Route::post('/absensi/{id}/uploadbuktiabsensi', 'AbsensiController@uploadbuktiabsensi');

// update status kehabiran admin
Route::get('/absensi/{id}/updateadmin', 'AbsensiController@updateadminabsensi');

// data absen seluruh pegawai
Route::get('/dataabsensipegawai', 'AbsensiController@dataabsensipegawai');
// detail Absen Pegawai dashboard admin
Route::get('/detail/{id}/absenpegawai', 'AbsensiController@detailabsensipegawai');



// Menampilkan Form Cuti
Route::get('/tambahcuti', 'CutiController@formtambahcuti');
// Memasukkan data cuti ke dalam data base
Route::post('/addtambahcuti', 'CutiController@tambahcuti');
// melhat data cuti
Route::get('/historycuti', 'CutiController@historycuti');
// history absensi
Route::get('/historyabsensi', 'AbsensiController@historyabsensi');


//menampilkan data pengajuan cuti pending
Route::get('/datapengajuancuti', 'CutiController@datapengajuancuti');
//menampilkan data pengajuan cuti sukses
Route::get('/datapengajuancutisukses', 'CutiController@datapengajuancutisukses');
//menampilkan data pengajuan cuti gagal
Route::get('/datapengajuancutigagal', 'CutiController@datapengajuancutigagal');

// update status cuti sukses
Route::get('/cuti/{id}/update', 'CutiController@cutiupdate');

// update status cuti gagal
Route::get('/cuti/{id}/tolakcuti', 'CutiController@tolakcuti');


// update status cuti gagal
Route::get('/profil', 'AbsensiController@profil');


