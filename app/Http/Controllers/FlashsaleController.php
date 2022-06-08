<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashsaleController extends Controller
{
    public function index()
    {
    	// mengambil data dari table flashsale
    	$flashsale = DB::table('flashsale')->get();
        //$voucher = DB::table('promo_and_voucher')->paginate(5);

    	// mengirim data voucher ke view index
    	return view('flashsale.index',['flashsale' => $flashsale]);

    }
}
