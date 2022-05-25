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
    return view('offerpromo.ofpro');
});
Route::get('/ikan', function () {
    return view('productikan.ikan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'LoginController@logout');

//offer dan promo
Route::get('/ofpro', 'OdpController@ofpro');

Route::get('/profile', 'ProfileController@profile');
Route::get('/profile/edit', 'EditProfileController@edit');

Route::get('/ikan', 'ProductIkan@ikan');

//by Septica Tiara Indah Permatasari
Route::get('/produk','Pembelian\UlasanProduk@displayProduk') ;

Route::get('/getdetailproduk/{kodeproduk}','Pembelian\UlasanProduk@getDetailProduk') ;


