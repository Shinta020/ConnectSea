<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
//use App\Produk;


class ProductIkan extends Controller
{
    public function ikan(){
        $produk = DB::table('produk')->get();
		return view('Pembelian.ikan', ['produk' => $produk]);

	}
    public function productList()
    {
        $products = Produk::all();

        return view('produk', compact('produk'));
    }
}
