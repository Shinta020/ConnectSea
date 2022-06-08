<?php

namespace App\Http\Controllers\Pembelian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Controller
{
    public function orderdetail()
    {
    	 //mengambil data dari table user
    	$users = DB::table('users')->get();

    	 //mengirim data user ke view profile
    	return view('Pembelian.OrderDetail.orderdetail',['users' => $users]);

    }
    public function orderdetail2()
    {

        $method = DB::table('pilih_pembayaran')->get();
        //$voucher = DB::table('promo_and_voucher')->paginate(5);

    	// mengirim data voucher ke view index
    	return view('Pembelian.OrderDetail.orderdetail',['method' => $method]);

    }
    // method untuk edit data user
    public function edit($id)
    {
	    // mengambil data user berdasarkan id yang dipilih
	    $users = DB::table('users')->where('id',$id)->get();
	    // passing data user yang didapat ke view edit.blade.php
	    return view('Pembelian.OrderDetail.edit',['users' => $users]);

    }
    // update data user
    public function update(Request $request)
    {
        // update data user
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
        ]);
        // alihkan halaman ke halaman profile
        return redirect('/orderdetail');
    }
    public function pembayaran()
    {
        $metode = DB::table('pilih_pembayaran')->get();
        return view('Pembelian.OrderDetail.orderdetail',['method' => $metode]);
    }
    public function index($method)
    {
    	// mengambil data dari table offer_and_promo
    	$method = DB::table('pilih_pembayaran')->get();
        //$voucher = DB::table('promo_and_voucher')->paginate(5);

    	// mengirim data voucher ke view index
    	return view('Pembelian.OrderDetail.pembayaran.index',['method' => $method]);
    }
}
            if (isset($_POST['checkout'])) {
                $operasi = $_POST['pembayaran'];
                switch ($operasi) {
                    case 'Transfer Bank - BRI':
                        $hasil = '10002441331';
                        break;
                    case 'Transfer Bank - MANDIRI':
                        $hasil = '140002891982';
                        break;
                    case 'Transfer Bank - BCA':
                        $hasil = '2455182991772';
                        break;
                    case 'E-Wallet - DANA':
                        $hasil = '082282264640';
                        break;
                    case 'E-Wallet - GOPAY':
                        $hasil = '082282264640';
                        break;
                    case 'E-Wallet - OVO':
                        $hasil = '0822828264640';
                        break;
                }
            }
        ?>
