<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
    	// mengambil data dari table produk
    	$produk = DB::table('produk')->get();

    	// mengirim data produk ke view index
    	return view('produk.index',['produk' => $produk]);

    }

    // method untuk menampilkan view form tambah produk
    public function tambah()
    {
        // memanggil view tambah
        return view('produk.tambah');
    }

    // method untuk insert data ke table produk
    public function store(Request $request)
    {
        //if($request->hasfile('imgproduk'))

        //{foreach($request->file('imgproduk') as $file)
        //{
        //    $namafoto=$file->getClientOriginalName();
        //    $file->move(public_path().'/connectsea/', $namafoto);
        //    $data = $namafoto;
        //}}

        // insert data ke table produk
        DB::table('produk')->insert([
            'kodeproduk' => $request->kodeproduk,
            'kategoriproduk' => $request->kategoriproduk,
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'beratproduk' => $request->berat,
            'descproduk' => $request->descproduk,
            'imgproduk' => $request->imgproduk
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/produk.index');

    // method untuk hapus data produk
    public function hapus($kodeproduk)
    {
        // menghapus data produk berdasarkan kodeproduk yang dipilih
        DB::table('produk')->where('kodeproduk', $kodeproduk)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/produk');

    }
}
