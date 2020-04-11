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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'auth'],function(){


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/delete/{id}', 'daftarMakananController@delete')->name('daftarMakanan.delete');
Route::get('/edit/{id}', 'daftarMakananController@edit')->name('daftarMakanan.edit');
Route::get('/addmenu', 'daftarMakananController@addmakanan')->name('daftarMakanan.add');
Route::get('/makanan', 'daftarMakananController@index')->name('daftarMakanan.index');
Route::get('/keranjang', 'keranjangController@index')->name('keranjang.index');
Route::get('/keranjang/edit/{id}', 'keranjangController@edit')->name('keranjang.edit');
Route::get('/keranjang/delete/{id}', 'keranjangController@delete')->name('keranjang.delete');
Route::get('/admin', 'adminController@index')->name('admin.index');
Route::get('/historitransaksi', 'adminController@historitransaksiview')->name('historitransaksi.index');
Route::get('/historitransaksi/{id}', 'adminController@infokeranjang')->name('historitransaksi.info');
Route::get('/laporan', 'adminController@laporanview')->name('laporan.index');
Route::get('/success', 'transaksiController@terimakasih')->name('terimakasih.index');

// POST

Route::post('/masukankeranjang', 'keranjangController@store')->name('keranjang.store');		
Route::post('/processing', 'transaksiController@store')->name('transaksi.store');
Route::post('/adding', 'daftarMakananController@store')->name('daftarMakanan.store');
Route::post('/update/{id}', 'daftarMakananController@update')->name('daftarMakanan.update');
Route::post('/keranjang/update/{id}', 'keranjangController@update')->name('keranjang.update');
});