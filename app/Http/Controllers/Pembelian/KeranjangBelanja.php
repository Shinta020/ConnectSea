<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanja extends Controller
{
    public function cart()
    {
    	// mengambil data dari table keranjang belanja
    	$keranjang_belanja = DB::table('keranjang_belanja')->get();

    	// mengirim data keranjang belanja ke view keranjang belanja
    	return view('pembelian.keranjangbelanja',['keranjang_belanja' => $keranjang_belanja]);

    }
}
