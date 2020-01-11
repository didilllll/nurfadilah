<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembuatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembuats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('judul')->unique();
            $table->string('jumlah_halaman')->default(30);
            $table->string('Synopsis')->nullable();
            $table->string('tanggal_pembuat')->nullable();
            $table->string('tanggal_penerbit')->nullable();
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
        Schema::dropIfExists('pembuats');
    }
}
