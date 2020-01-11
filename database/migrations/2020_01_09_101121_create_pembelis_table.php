<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembelis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barang')->default(30);
            $table->String('judul')->unique();
            $table->string('Synopsis')->nullable();
            $table->string('tanggal_pembelian')->nullable();
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
        Schema::dropIfExists('pembelis');
    }
}
