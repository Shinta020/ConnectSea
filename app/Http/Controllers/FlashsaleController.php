<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashsaleController extends Controller
{
    public function index()
    {
    	// mengambil data dari table produk
    	$flashsale = DB::table('flashsale')
            ->join('produk', 'flashsale.idproduk', '=', 'produk.kodeproduk')
            ->select('flashsale.*', 'produk.namaproduk')
            ->get();

    	// mengirim data produk ke view index
    	return view('Pembelian.flashsale.index',['flashsale' => $flashsale]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        $produk = DB::table('produk')->orderBy('namaproduk', 'asc')->get();

        // memanggil view tambah
        return view('Penjualan.flashsale.tambah', ['produk' => $produk]);

    }

    // method untuk insert data ke table produk
    public function store(Request $request)
    {
        // insert data ke table produk
        DB::table('flashsale')->insert([
            'idproduk' => $request->idproduk,
            'hargaflashsale' => $request->hargaflashsale,
            'imgflashsale' => $request->imgflashsale,
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/flashsale');

    }
}
