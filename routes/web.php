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
    return view('Pembelian.offerpromo.ofpro');
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

//by Nur Nindya Risnina
Route::get('/privacypolicy', function () {
    return view('dataakun.privacypolicy');
});
Route::get('/help', function () {
    return view('dataakun.help');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LoginController@logout');

//Belva Rizki - Profile
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
Route::post('/produk','ProdukController@store');
Route::get('/produk/hapus/{kodeproduk}','ProdukController@hapus');
Route::get('/produk/edit/{kodeproduk}','ProdukController@edit');
Route::post('/produk/update', 'ProdukController@update');
Route::post('/produk/{id_toko}', 'ProdukController@produktoko')

//route keranjang belanja
Route::get('/keranjangbelanja','Pembelian\KeranjangBelanja@index');

//Belva Rizki - History Order
Route::get('/historyorder','HistoryOrderController@history');

// Shinta - Offer and Promo
Route::get('/ofpro', 'Pembelian\OfferandPromo@ofpro');
Route::get('/ofpro2', 'Pembelian\OfferandPromo@index');
Route::get('/ofpro2/tambah','Pembelian\OfferandPromo@tambah');
Route::post('/ofpro2/store','Pembelian\OfferandPromo@store');
Route::get('/ofpro2/detail/{id}','Pembelian\OfferandPromo@view');
Route::get('/ofpro2/hapus/{id}','Pembelian\OfferandPromo@hapus');
Route::get('/ofpro2/edit/{id}','Pembelian\OfferandPromo@edit');
Route::post('/ofpro2/update','Pembelian\OfferandPromo@update');

// Start Selling by Cahya
//route CRUD
Route::get('/startselling','StartsellingController@index');

Route::get('/coba', function () {
    return view('coba');
});

// Flash Sale by Cahya
Route::post('/flashsale','FlashsaleController@index');
