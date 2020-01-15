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
	Route::get('/akun', 'AkunController@index');
	Route::get('/akun/add', 'AkunController@create');
	Route::post('/akun/add', 'AkunController@store');

	Route::get('akun/{id}/edit','AkunController@edit');
	Route::patch('akun/{id}/edit','AkunController@update');

	Route::delete('akun/{id}/delete','AkunController@destroy');

	Route::get('/transaksi','TransaksiController@index');
});
