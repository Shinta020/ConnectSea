<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkspedisiPengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekspedisi_pengiriman', function (Blueprint $table) {
            $table->bigIncrements('noresi');
            $table->string('namaekspedisi');
            $table->integer('ongkir');
            $table->integer('orderid');
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
        Schema::dropIfExists('ekspedisi_pengiriman');
    }
}
