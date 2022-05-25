<?php

namespace App\Http\Controllers\Pembelian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UlasanProduk extends Controller
{
    //by Nur Nindya Risnina
public function displayProduk()
{
    return view('productikan.ikan') ;
}

    //by Shinta Amalia
//public function getDetailProduk(String $namaproduk ,String $harga ,String $deskripsi) //id nya ?
public function getDetailProduk($kodeproduk)
{
    $produk = DB::table('produk')->where('kodeproduk',$kodeproduk)->get();
    $ulasan = UlasanProduk::validasiKetersediaanUlasan($kodeproduk) ;
    if ($ulasan->isEmpty()) {
        $jumlahulasan = 0 ;
    }
    return view('productikan.detail',["produk" =>$produk,"ulasan"=>$ulasan,"jumlahulasan" =>$jumlahulasan]) ;
}

    //Septica Tiara Indah Permatasari
public function validasiKetersediaanUlasan($kodeproduk)
{
    $ulasan = DB::table('ulasan')->where('kodeproduk',$kodeproduk)->get();
    return $ulasan ;
}




}
