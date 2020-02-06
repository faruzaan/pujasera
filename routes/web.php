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
Route::auth();

Route::group(['middleware'=>'auth'],function(){
	Route::get('/', 'ContentController@index');

	Route::get('akun', 'AkunController@index');
	Route::get('akun/add', 'AkunController@create');
	Route::post('akun/add', 'AkunController@store');
	Route::get('akun/{id}/edit','AkunController@edit');
	Route::patch('akun/{id}/edit','AkunController@update');
	Route::delete('akun/{id}/delete','AkunController@destroy');

	Route::get('transaksi','TransaksiController@index');

	Route::get('toko','TokoController@index');
	Route::get('toko/add','TokoController@create');
	Route::post('toko/add', 'TokoController@store');
	Route::get('toko/{id}/edit','TokoController@edit');
	Route::patch('toko/{id}/edit','TokoController@update');
	Route::delete('toko/{id}/delete','TokoController@destroy');

	Route::get('item','ItemController@index');
	Route::get('item/add','ItemController@create');
	Route::post('item/add','ItemController@store');
	Route::get('item/{id}/edit','ItemController@edit');
	Route::patch('item/{id}/edit','ItemController@update');
	Route::delete('item/{id}/delete','ItemController@destroy');

	Route::get('pemesanan','PemesananController@index');
	Route::get('pemesanan/add','PemesananController@create');

	Route::get('test','TestControler@index');
	Route::get('test','TestControler@input')->name('test.input');
});
