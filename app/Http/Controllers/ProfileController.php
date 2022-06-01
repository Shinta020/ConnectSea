<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    // public function profile() {
    //     $user = array('title' => 'User Profil');
    //     return view('profile', $user);
    // }

    // public function setting() {
    //     $user = array('title' => 'Edit Profil');
    //     return view('editprofile', $user);
    // }

    public function profile()
    {
    	// mengambil data dari table user
    	$users = DB::table('users')->get();

    	// mengirim data user ke view profile
    	return view('dataakun.profile',['users' => $users]);

    }

    // method untuk edit data user
    public function edit($id)
    {
	    // mengambil data user berdasarkan id yang dipilih
	    $users = DB::table('users')->where('id',$id)->get();
	    // passing data user yang didapat ke view edit.blade.php
	    return view('dataakun.editprofile',['users' => $users]);

    }

    // update data user
    public function update(Request $request)
    {
        // update data user
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman profile
        return redirect('/profile');
    }

        // method untuk hapus data profile
    public function delete($id)
    {
        // menghapus data user berdasarkan id yang dipilih
        DB::table('users')->where('id',$id)->delete();

        // alihkan halaman ke halaman user
        return redirect('/profile');
    }
}
