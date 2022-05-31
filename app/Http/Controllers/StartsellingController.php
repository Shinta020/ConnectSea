<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StartsellingController extends Controller
{
    public function index()
    {
    	// mengambil data dari table toko
    	$toko = DB::table('toko')->get();

    	// mengirim data toko ke view index
    	return view('startselling.index',['toko' => $toko]);

    }
}
