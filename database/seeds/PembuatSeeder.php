<?php

use App\Pembuat;
use Illuminate\Database\Seeder;

class PembuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembuat= new Pembuat;
        $pembuat ->judul = 'Ayah Mengapa Aku Berbeda';
        $pembuat ->jumlah_halaman = 102;
        $pembuat ->synopsis= 'Tentang Aku Yang Mempunyai Kelainan';
        $pembuat ->tanggal_pembuat= '5 oktober';
        $pembuat ->tanggal_penerbit= 2;
        $pembuat ->status = 2;
        $pembuat ->save();
    }
}
