<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeranjangBelanjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang_belanja', function (Blueprint $table) {
            $table->bigIncrements('idkeranjang');
            $table->integer('kodeproduk');
            $table->integer('akunid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keranjang_belanja');
    }
}
