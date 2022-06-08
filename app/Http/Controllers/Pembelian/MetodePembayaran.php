<?php

namespace App\Http\Controllers\Pembelian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MetodePembayaran extends Controller
{
    public function pembayaran()
    {
        $method = DB::table('pilih_pembayaran')->get();
        return view('Pembelian.OrderDetail.orderdetail',['method' => $method]);
    }
    public function index()
    {
    	// mengambil data dari table offer_and_promo
    	$method = DB::table('pilih_pembayaran')->get();
        //$voucher = DB::table('promo_and_voucher')->paginate(5);

    	// mengirim data voucher ke view index
    	return view('Pembelian.OrderDetail.pembayaran.index',['method' => $method]);
    }

}
