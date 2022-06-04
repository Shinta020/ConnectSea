<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StartsellingController extends Controller
{
    public function index()
    {
    	// mengambil data dari table toko
    	$users = DB::table('users')->get();

    	// mengirim data toko ke view index
    	return view('startselling',['users' => $users]);
    }
}
