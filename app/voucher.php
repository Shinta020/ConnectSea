<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    protected $table = "imgvoucher";

    protected $fillable = ['file','keterangan'];
}
