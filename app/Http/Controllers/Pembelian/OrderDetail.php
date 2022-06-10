<?php

namespace App\Http\Controllers\Pembelian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Controller
{
    public function displayHalamanOrderDetail()
    {
    	 //mengambil data dari table user
    	$users = DB::table('users')->get();

    	 //mengirim data user ke view profile
    	return view('Pembelian.OrderDetail.orderdetail',['users' => $users]);

    }
    // method untuk edit data user
    public function displayHalamanEditAlamatPengiriman($id)
    {
	    // mengambil data user berdasarkan id yang dipilih
	    $users = DB::table('users')->where('id',$id)->get();
	    // passing data user yang didapat ke view edit.blade.php
	    return view('Pembelian.OrderDetail.edit',['users' => $users]);

    }
    // update data user
    public function simpanAlamatPengiriman(Request $alamat)
    {
        // update data user
        DB::table('users')->where('id',$alamat->id)->update([
            'name' => $alamat->nama,
            'alamat' => $alamat->alamat,
            'notelp' => $alamat->notelp,
        ]);
        // alihkan halaman ke halaman profile
        return redirect('/orderdetail');
    }
}
?>
