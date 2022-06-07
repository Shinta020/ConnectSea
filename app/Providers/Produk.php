<!-- <?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "kodeproduk";

    protected $fillable = [
        'nama_produk', 'harga_satuan',
    ];

    static function list_produk(){
        $data = Produk::all ();
        return $data;
    }
     static function tambah_produk($namaproduk,$harga) {
         Produk::create([
             "nama_produk" => $namaproduk,
             "harga_satuan" =>$harga,
         ]);
     }
     static function detail_produk($id_produk) {
         $data = Produk::where("id_produk",$id_produk)->first();

         return $data;
     }
} -->
