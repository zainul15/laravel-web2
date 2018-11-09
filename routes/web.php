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
Route::get('/index', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/dashbord', function () {
    return view('dashbord');
});
Route::resource('mahasiswa','Mahasiswa');
Route::resource('user','User');
Route::resource('file','File'); //kanan nama controller //kiri view
Route::resource('halaman','contoh');
Route::get('/contoh/tambah', 'contoh@tambah');