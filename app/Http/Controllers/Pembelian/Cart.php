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
        //$cartItems = DB::table('produk')->get();
        //$cartItems = DB::table('produk')->get();
        // dd($cartItems);
        return view('pembelian.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'kodeproduk' => $request->kodeproduk,
            'kategoriproduk' => $request->kategoriproduk,
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'quantity' => $request->quantity,
            'imgproduk' => $request->imgproduk,
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->kodeproduk,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
    \Cart::remove($request->id);
    //     //DB::table('produk')->where('kodeproduk',$kodeproduk)->delete();

    session()->flash('success', 'Item Cart Remove Successfully !');

    return redirect()->route('cart.list');
    }


    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function checkout(Request $request)
    {$cartItems = \Cart::getContent();
        //$cartItems = DB::table('produk')->get();
        //$cartItems = DB::table('produk')->get();
        // dd($cartItems);
        return view('Pembelian.Orderdetail.orderdetail', compact('cartItems'));
}


}

