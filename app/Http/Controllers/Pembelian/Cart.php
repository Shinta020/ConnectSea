<?php

//namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

namespace App\Http\Controllers\Pembelian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class Cart extends Controller
{
//    // public function index()
//     {
//     	// mengambil data dari table keranjang belanja
//     	$keranjang_belanja = DB::table('keranjang_belanja')->get();

//     	// mengirim data keranjang belanja ke view keranjang belanja
//     	return view('pembelian.keranjangbelanja',['keranjang_belanja' => $keranjang_belanja]);

//     }
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
}
