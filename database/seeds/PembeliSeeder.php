<?php

use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembeli= new Pembeli;
        $pembeli ->barang = 11;
        $pembeli ->judul = 'Surat Kecil Untuk Tuhan';
        $pembeli ->synopsis = 'sadending';
        $pembeli ->tanggal_pembelian= '9 februari';
        $pembeli ->harga= 25000;
        $pembeli ->status = 3;
        $pembeli ->save();

    }
}
