<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPakan extends Controller
{
    public function pakan(){
		return view('Pembelian.pakan');
	}
}
