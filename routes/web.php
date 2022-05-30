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
Route::get('/pakan', function () {
    return view('Pembelian.pakan');

});
Route::get('/bibit', function () {
    return view('Pembelian.bibit');

});
Route::get('/privacypolicy', function () {
    return view('dataakun.privacypolicy');
});
Route::get('/help', function () {
    return view('dataakun.help');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'LoginController@logout');

//by Belva Rizki Mufidah
Route::get('/profile', 'ProfileController@profile');
Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/update','ProfileController@update');
Route::get('/profile/delete/{id}','ProfileController@delete');

//product per kategori
//by Septica Tiara Indah Permatasari
Route::get('/ikan', 'ProductIkan@ikan');
Route::get('/bibit', 'ProductBibit@bibit');
Route::get('/pakan', 'ProductPakan@pakan');

Route::get('/produk','Pembelian\UlasanProduk@displayProduk');

Route::get('/getdetailproduk/{kodeproduk}','Pembelian\UlasanProduk@getDetailProduk');

//Input Produk by Cahya
Route::get('/produk','ProdukController@index');
Route::get('/produk/tambah','ProdukController@tambah');
Route::post('/produk/store','ProdukController@store');


//route keranjang belanja
Route::get('/keranjangbelanja','Pembelian\KeranjangBelanja@cart');

// Shinta - Offer and Promo
Route::get('/ofpro', 'Pembelian\OfferandPromo@ofpro');
Route::get('/ofpro2', 'Pembelian\OfferandPromo@index');
Route::get('/ofpro2/tambah','Pembelian\OfferandPromo@tambah');
Route::post('/ofpro2/store','Pembelian\OfferandPromo@store');


