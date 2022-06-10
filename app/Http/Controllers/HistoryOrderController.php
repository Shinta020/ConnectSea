<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryOrderController extends Controller
{
    public function history()
    {
    	// mengambil data dari table history order
    	$history_order = DB::table('history_order')->get();

    	// mengirim data history order ke view history order
    	return view('pembelian.historyorder',['history_order' => $history_order]);

    }

}
