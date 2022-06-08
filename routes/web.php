<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

//Belva Rizki - Chat
Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

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
//Route::post('/produk/{id_toko}', 'ProdukController@produktoko')

//route keranjang belanja by Nur Nindya Risnina
Route::get('/cart','Pembelian\KeranjangBelanja@index');
Route::get('/cart/hapus/{id}', 'Pembelian\KeranjangBelanja@hapus')->where("id","[0-9]+");
Route::get('/transaksi/tambah', 'Pembelian\KeranjangBelanja@tambah_transaksi');


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

//Nina
Route::get('/flashsale', function () {
    return view('flashsale.index');
});

// Flash Sale by Cahya
//Route::post('/flashsale','FlashsaleController@index');
Route::get('/pro', [ProductIkanController::class, 'productList'])->name('products.list');
Route::get('cart', [Pembelian\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [Pembelian\CartController::class, 'addToCart'])->name('cart.store');
//Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
//Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
//Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
