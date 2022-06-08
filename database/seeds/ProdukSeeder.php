<?php

namespace Database\Seeders;

use App\Http\Controllers\ProductIkan;
use Illuminate\Database\Seeder;

use App\Models\Produk;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'kodeproduk' => '',
            'kategoriproduk'=> 'Hasil Laut',
            'namaproduk'=> 'Kakap Merah',
            'qty' => '20',
            'harga' => '50.000',
            'beratproduk'=> '2',
            'descproduk'=> 'enak',
            'imgproduk'=> 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80',
        ]);
        Produk::create([
            'kodeproduk' => '',
            'kategoriproduk'=> 'Hasil Laut',
            'namaproduk'=> 'Tuna',
            'qty' => '20',
            'harga' => '50.000',
            'beratproduk'=> '2',
            'descproduk'=> 'enak',
            'imgproduk'=> 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80',
        ]);
    }
}
