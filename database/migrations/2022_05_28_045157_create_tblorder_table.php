<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblorder', function (Blueprint $table) {
            $table->bigIncrements('orderid');
            $table->integer('qtyproduk');
            $table->integer('totharga');
            $table->integer('akunid');
            $table->integer('kodeproduk');
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
        Schema::dropIfExists('tblorder');
    }
}
