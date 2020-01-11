<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenjualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Menjuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jumlah_barang')->default(30);
            $table->String('judul')->unique();
            $table->string('Synopsis')->nullable();
            $table->string('tanggal_menjual')->nullable();
            $table->string('harga')->nullable();
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
        Schema::dropIfExists('menjuals');
    }
}
