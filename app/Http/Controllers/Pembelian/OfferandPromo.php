<?php

namespace App\Http\Controllers\Pembelian;

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

    // method untuk view detail voucher
    public function view($voucher)
    {

	// mengambil data voucher berdasarkan id yang dipilih
	$voucher = DB::table('promo_and_voucher')->where('id',$voucher)->get();
	// passing data voucher yang didapat ke view edit.blade.php
	return view('Pembelian.offerpromo.detail',['voucher' => $voucher]);

    }

    // method untuk hapus voucher
    public function hapus($voucher)
    {
	// menghapus voucher berdasarkan id yang dipilih
	DB::table('promo_and_voucher')->where('id',$voucher)->delete();

	// alihkan halaman ke halaman admin voucher
	return redirect('/ofpro2');
    }

    // method untuk edit voucher
    public function edit($id)
    {

	// mengambil data voucher berdasarkan id yang dipilih
	$voucher = DB::table('promo_and_voucher')->where('id',$id)->get();
	// passing data voucher yang didapat ke view edit.blade.php
	return view('Pembelian.offerpromo.edit',['voucher' => $voucher]);

    }

    // update data voucher
    public function update(Request $request)
    {
	// update data voucher
	DB::table('promo_and_voucher')->where('id',$request->id)->update([
		'kodevoucher' => $request->kode,
        'desc' => $request->deskripsi,
        'masaberlaku' => $request->exp,
        'imgvoucher' => $request->img
	]);

	// alihkan halaman ke halaman admin voucher
	return redirect('/ofpro2');
    }
}
