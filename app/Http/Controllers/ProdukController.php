<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
    	// mengambil data dari table produk
    	$produk = DB::table('produk')
            ->join('users', 'produk.id_toko', '=', 'users.id')
            ->select('produk.*', 'users.name')
            ->get();

    	// mengirim data produk ke view index
    	return view('produk.index',['produk' => $produk]);

    }

    // method untuk menampilkan view form tambah produk
    public function tambah()
    {
        // memanggil view tambah
        $users = DB::table('users')->orderBy('name', 'asc')->get();

        return view('produk.tambah', ['users' => $users]);
    }

    // method untuk insert data ke table produk
    public function store(Request $request)
    {
        // insert data ke table produk
        DB::table('produk')->insert([
            //'kodeproduk' => $request->kodeproduk,
            'kategoriproduk' => $request->kategoriproduk,
            'namaproduk' => $request->namaproduk,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'beratproduk' => $request->berat,
            'descproduk' => $request->descproduk,
            'imgproduk' => $request->imgproduk,
            'id_toko' => $request->id_toko,
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/produk');

    }

    // method untuk hapus data produk
    public function hapus($kodeproduk)
    {
        // menghapus data produk berdasarkan kodeproduk yang dipilih
        DB::table('produk')->where('kodeproduk',$kodeproduk)->delete();

        // alihkan halaman ke halaman produk
        return redirect('/produk');
    }

    // method untuk edit data produk
    public function edit($kodeproduk)
    {
        // mengambil data produk berdasarkan id yang dipilih
        $produk = DB::table('produk')->where('kodeproduk',$kodeproduk)->get();
        // passing data produk yang didapat ke view edit.blade.php
        return view('produk.edit',['produk' => $produk]);

    }

    // update data produk
    public function update(Request $request)
    {
        // update data produk
        DB::table('produk')->where('kodeproduk', $request->kodeproduk)->update([
            'kategoriproduk' => $request->kategoriproduk,
            'namaproduk' => $request->namaproduk,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'beratproduk' => $request->berat,
            'descproduk' => $request->descproduk,
            'imgproduk' => $request->imgproduk
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/produk');
    }

    // menampilkan produk per toko
//    public function produktoko($id_toko)
//    {
        // menangkap data pencarian
//        $produktoko = $request->cari;

        // mengambil data dari table absen sesuai pencarian data
//        $produk = DB::table('produk')
//            ->join('users', 'produk.id_toko', '=', 'users.id')
//            ->select('produk.*', 'users.name')
//            ->where('name', 'like', "{{ $p->id }}")

            // mengirim data absen ke view index
//        return view('produk.index', ['produk' => $produk]);

//    }
}
