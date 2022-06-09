<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductIkan extends Controller
{
    public function productList(){
        $produk = DB::table('produk')->get();
		return view('Pembelian.ikan', ['produk' => $produk]);

	}

}
