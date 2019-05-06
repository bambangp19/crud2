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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/tambah','HomeController@Tambah')->name('tambah');
Route::post('/save', 'HomeController@Input_data')->name('save');
route::get('/ubah/{id}','HomeController@Tampil_ubah');
route::post('/ubah-data','HomeController@Input_ubah');
route::get('/hapus/{id}','HomeController@Delete');
