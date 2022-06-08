<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodeproduk',
        'kategoriproduk',
        'namaproduk',
        'qty',
        'harga',
        'beratproduk',
        'descproduk',
        'imgproduk',
    ];
}
