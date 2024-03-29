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
Route::get('/home', 'HomeController@displayHalamanUtama')->name('home');
Route::get('/logout', 'LoginController@logout');

//Belva Rizki - Chat
Route::get('/chat', 'ChatsController@displayHalamanChat');
// Route::get('messages', 'ChatsController@fetchMessages');
// Route::post('messages', 'ChatsController@sendMessage');

//Belva Rizki - Profile
Route::get('/profile', 'ProfileController@profile');
Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/update','ProfileController@update');
Route::get('/profile/delete/{id}','ProfileController@delete');

//product per kategori
//by Septica Tiara Indah Permatasari
//Route::get('/ikan', 'ProductIkan@ikan');
//Route::get('/bibit', 'ProductBibit@bibit');
//Route::get('/pakan', 'ProductPakan@pakan');
Route::get('/ikan', 'ProductIkan@productList');
Route::get('/bibit', 'ProductBibit@productList');
Route::get('/pakan', 'ProductPakan@productList');

Route::get('/produk','Pembelian\UlasanProduk@displayProduk');

Route::get('/getdetailproduk/{kodeproduk}','Pembelian\UlasanProduk@getDetailProduk');

//Input Produk by Cahya
Route::get('/produk','ProdukController@index');
Route::get('/produk/tambah','ProdukController@tambah');
Route::post('/produk','ProdukController@store');
Route::get('/produk/hapus/{kodeproduk}','ProdukController@hapus');
Route::get('/produk/edit/{kodeproduk}','ProdukController@edit');
Route::post('/produk/update', 'ProdukController@update');

//Belva Rizki - History Order
Route::get('/historyorder','HistoryOrderController@history');

// Shinta - Offer and Promo
Route::get('/ofpro', 'Pembelian\OfferandPromo@displayHalamanOfferdanPromo');
Route::get('/ofpro2', 'Pembelian\OfferandPromo@displayHalamanDaftarVoucher');
Route::get('/ofpro2/tambah','Pembelian\OfferandPromo@displayHalamanTambahVoucher');
Route::post('/ofpro2/store','Pembelian\OfferandPromo@getData');
Route::get('/ofpro2/detail/{id}','Pembelian\OfferandPromo@displayHalamanDetailVoucher');
Route::get('/ofpro2/hapus/{id}','Pembelian\OfferandPromo@hapus');
Route::get('/ofpro2/edit/{id}','Pembelian\OfferandPromo@edit');
Route::post('/ofpro2/update','Pembelian\OfferandPromo@update');

// Start Selling by Cahya
//route CRUD
Route::get('/startselling','StartsellingController@displayHalamanStartSelling');

//Flash Sale by Cahya
Route::get('/flashsale','FlashsaleController@index');
Route::get('/flashsale/tambah','FlashsaleController@tambah');
Route::post('/flashsale','FlashsaleController@store');


Route::get('/cart', 'Pembelian\Cart@cartList')->name('cart.list');;
Route::post('/cart', 'Pembelian\Cart@addToCart')->name('cart.store');
Route::post('/update-cart', 'Pembelian\Cart@updateCart')->name('cart.update');;
Route::post('/remove', 'Pembelian\Cart@removeCart')->name('cart.remove');
Route::post('/clear', 'Pembelian\Cart@clearAllCart')->name('cart.clear');
Route::post('/orderdetail', 'Pembelian\Cart@checkout');

// Route::get('/pro', [ProductIkan::class, 'productList'])->name('products.list');
//Route::get('/cart', [Pembelian\Cart::class, 'cartList'])->name('cart.list');
//Route::post('/cart', [Pembelian\Cart::class, 'addToCart'])->name('cart.store');


// Shinta - Order Detail
Route::get('/orderdetail', function () {
    return view('Pembelian.orderdetail');
});
Route::get('/orderdetail', 'Pembelian\OrderDetail@displayHalamanOrderDetail');
Route::get('/orderdetail/edit/{id}', 'Pembelian\OrderDetail@displayHalamanEditAlamatPengiriman');
Route::post('/orderdetail/update', 'Pembelian\OrderDetail@simpanAlamatPengiriman');


Route::get('/historyorder','HistoryOrderController@history');

Route::get('/flashsale','FlashsaleController@index');
