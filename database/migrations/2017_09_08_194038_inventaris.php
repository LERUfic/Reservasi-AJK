<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_ajk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barang');
            $table->integer('jumlah_total');
            $table->integer('jumlah_dipinjam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('inventaris_ajk');
    }
}
