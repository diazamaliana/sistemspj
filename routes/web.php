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
    return view('layouts.dasbor');
});
Route::get('/staff', function () {
    return view('layouts.staff');
});

Route::get('/edit-pembuatan-sistem-informasi', function () {
    return view('data_kegiatan.edForm1');
});

Auth::routes();
Route::get('/profil', function(){
    return view('profil.master');
});

//Dasbor Admin
Route::get('/dasbor', function(){
    return view('dasbor.master');
});

Route::get('/data-pegawai', function(){
    return view('data_pegawai.master');
});

Route::get('/data-kegiatan', function(){
    return view('data_kegiatan.master');
});

Route::get('/form1', function(){
    return view('data_kegiatan.form1');
});

Route::get('/form2', function(){
    return view('data_kegiatan.form2');
});

Route::get('/dokumen', function(){
    return view('dokumen_pendukung.master');
});

Route::get('/pj-biaya', function(){
    return view('pj_biaya.master');
});



Route::get('/home', 'HomeController@index')->name('home');
