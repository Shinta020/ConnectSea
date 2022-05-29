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

Route::get('/home', function () {
    return view('home');
});

Route::get('/ofpro', function () {
    return view('Pembelian.ofpro');
});
Route::get('/ikan', function () {
    return view('Pembelian.ikan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'LoginController@logout');

//offer dan promo
Route::get('/ofpro', 'OdpController@ofpro');

//by Belva Rizki Mufidah
Route::get('/profile', 'ProfileController@profile');
Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/update','ProfileController@update');
Route::get('/profile/delete/{id}','ProfileController@delete');

//product ikan

Route::get('/ikan', 'ProductIkan@ikan');

//by Septica Tiara Indah Permatasari
Route::get('/produk','Pembelian\UlasanProduk@displayProduk');

Route::get('/getdetailproduk/{kodeproduk}','Pembelian\UlasanProduk@getDetailProduk');

//Input Produk by Cahya
Route::get('/produk','ProdukController@index');
Route::get('/produk/tambah','ProdukController@tambah');
Route::post('/produk/store','ProdukController@store');


//route keranjang belanja
Route::get('/keranjangbelanja','Pembelian\KeranjangBelanja@cart');


