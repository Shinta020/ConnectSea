<?php

namespace App\Http\Controllers\Pembelian;

use App\voucher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OfferandPromo extends Controller
{
    public function ofpro()
    {
        $voucher = DB::table('promo_and_voucher')->get();
        return view('Pembelian.offerpromo.ofpro',['voucher' => $voucher]);

    }

    public function index()
    {
    	// mengambil data dari table offer_and_promo
    	$voucher = DB::table('promo_and_voucher')->get();
        //$voucher = DB::table('promo_and_voucher')->paginate(5);

    	// mengirim data voucher ke view index
    	return view('Pembelian.offerpromo.index',['voucher' => $voucher]);

    }
        // method untuk menampilkan view form tambah voucher
    public function tambah()
    {
        // memanggil view tambah
        return view('Pembelian.offerpromo.tambah');

    }
    // method untuk insert data ke table promo_and_voucher
    public function store(Request $request)
    {

    //DB::table('')->insert() ;
	// insert data ke table promo_and_voucher
	DB::table('promo_and_voucher')->insert([
		'kodevoucher' => $request->kode,
		'desc' => $request->deskripsi,
		'masaberlaku' => $request->exp,
		'imgvoucher' => $request->img
	]);
	// alihkan halaman ke halaman offer and promo
	return redirect('/ofpro');

    }
}
