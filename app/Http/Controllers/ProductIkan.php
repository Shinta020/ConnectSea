<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Produk;


class ProductIkan extends Controller
{
    public function ikan(){
        $produk = DB::table('produk')->get();
		return view('Pembelian.ikan', ['produk' => $produk]);

	}


// /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

//     /**
//      * Show the application dashboard.
//      *
//      * @return \Illuminate\Contracts\Support\Renderable
//      */
//     public function index()
//     {
//         $produk = Produk::paginate(20);
//         return view('productikan', compact('produk'));
//     }

   // function index(){
    //   $produk = ProductIkan::list-produk();
    //    return view("produk") ->with("produk" ,$produk) ;
    //}

    //function do_tambah_cart($id_produk) {
      //  $cart = session("cart");
        //$produk = ProductIkan::detail($kodepro);
        //$cart["id_produk"] = [
          //  "namaproduk" => $produk ->namaproduk,
           // "hargaproduk" => $produk ->harga,
            //"qty" => 1
        //];

        //session(["cart" => $cart]);
        //return redirect("/cart");
    //}
}
