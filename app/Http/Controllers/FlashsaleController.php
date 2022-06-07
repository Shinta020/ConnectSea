<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlashsaleController extends Controller
{
    public function index()
    {
    	// mengambil data dari table produk
    	$produk = DB::table('produk')
            ->join('users', 'produk.id_toko', '=', 'users.id')
            ->select('produk.*', 'users.name')
            ->get();

    	// mengirim data produk ke view index
    	return view('flashsale.index',['produk' => $produk]);

    }
}
