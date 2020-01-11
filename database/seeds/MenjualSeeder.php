<?php

use App\Menjual;
use Illuminate\Database\Seeder;

class MenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menjual = new Menjual;
        $menjual ->jumlah_barang = '10';
        $menjual ->judul = 'sweet17';
        $menjual ->synopsis = 'Ini cerita buku kami...';
        $menjual ->tanggal_menjual= '10 januari';
        $menjual->harga = 30000;
        $menjual->status = 2;
        $menjual ->save();
    }
}
