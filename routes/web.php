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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'FeedbackController@index'); //Route Menampilkan Halaman Pengisian Feedback
Route::get('makasih', 'FeedbackController@makasih'); //Route Menampilkan Halaman Terima Kasih
Route::post('feedback/add', 'FeedbackController@store'); //Route Untuk Menyimpan Data

Route::auth();

Route::group(['middleware'=>'auth'],function(){
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('pegawai','PegawaiController@index');
	Route::get('pegawai/add', 'PegawaiController@create');
	Route::post('pegawai/add', 'PegawaiController@store');
	Route::get('pegawai/{id}/edit','PegawaiController@edit');
	Route::patch('pegawai/{id}/edit','PegawaiController@update');
	Route::delete('pegawai/{id}/delete','PegawaiController@destroy');

	Route::get('pemilikgerai','PemilikGeraiController@index');
	Route::get('pemilikgerai/add', 'PemilikGeraiController@create');
	Route::post('pemilikgerai/add', 'PemilikGeraiController@store');
	Route::get('pemilikgerai/{id}/edit','PemilikGeraiController@edit');
	Route::patch('pemilikgerai/{id}/edit','PemilikGeraiController@update');
	Route::delete('pemilikgerai/{id}/delete','PemilikGeraiController@destroy');

	Route::get('gerai','GeraiController@index');
	Route::get('gerai/add', 'GeraiController@create');
	Route::post('gerai/add', 'GeraiController@store');
	Route::get('gerai/{id}/edit','GeraiController@edit');
	Route::patch('gerai/{id}/edit','GeraiController@update');
	Route::delete('gerai/{id}/delete','GeraiController@destroy');

	Route::get('menu','MenuController@index');
	Route::get('menu/add', 'MenuController@create');
	Route::post('menu/add', 'MenuController@store');
	Route::get('menu/{id}/edit','MenuController@edit');
	Route::patch('menu/{id}/edit','MenuController@update');
	Route::delete('menu/{id}/delete','MenuController@destroy');

	Route::get('penjualan','PenjualanController@index');
	// Route::get('penjualan/add', 'PenjualanController@create');
	Route::post('penjualan/add', 'PenjualanController@store');
	Route::get('penjualan/{id}/edit','PenjualanController@edit');
	Route::patch('penjualan/{id}/edit','PenjualanController@update');
	Route::delete('penjualan/{id}/delete','PenjualanController@destroy');
	Route::get('penjualan/gerai','PenjualanController@gerai');
	Route::get('penjualan/{id}/pilih','PenjualanController@pilihmenu');

	Route::get('feedback','FeedbackController@index2'); //Route Menampilkan halaman tabel feedback
	Route::get('feedback/{id}/edit','FeedbackController@edit'); //Route Menampilkan edit data feedback dengan data dari database
	Route::patch('feedback/{id}/edit','FeedbackController@update'); //Route Mengubah Data Feedback
	Route::delete('feedback/{id}/delete','FeedbackController@destroy'); //Route Menghapus Data Feedback
});
