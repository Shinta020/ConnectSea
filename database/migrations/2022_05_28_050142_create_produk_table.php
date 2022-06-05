<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('kodeproduk');
            $table->string('kategoriproduk');
            $table->string('namaproduk');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('beratproduk');
            $table->string('descproduk');
            $table->string('imgproduk');
            $table->timestamps();
           // $table->string('namatokoproduk')->unsigned();
        });

//        Schema::table('produk', function (Blueprint $table) {
//            $table->foreign('namatokoproduk')->references('namatoko')->on('toko')->onDelete('cascade')->onUpdate('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
