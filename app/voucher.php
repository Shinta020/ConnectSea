<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    protected $table = "promo_and_voucher";

    protected $fillable = ['file','keterangan'];
}
