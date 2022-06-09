<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductBibit extends Controller
{
    public function productList(){
        $produk = DB::table('produk')->get();
		return view('Pembelian.bibit', ['produk' => $produk]);
	}
}
