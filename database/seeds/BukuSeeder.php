<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buku = new Buku;
        $buku ->judul = 'Belajar PHP';
        $buku ->jumlah_halaman = 100;
        $buku ->penerbit = 'Gramedia Pustaka';
        $buku ->synopsis = 'ini adalah buku...';
        $buku ->status = 1;
        $buku ->save();

        $buku = new Buku;
        $buku ->judul = 'Belajar laravel';
        $buku ->jumlah_halaman = 170;
        $buku ->penerbit = 'Gramedia Pustaka';
        $buku ->synopsis = 'ini adalah tentang laravel';
        $buku ->status = 2;
        $buku ->save();

        $buku = new Buku;
        $buku ->judul = 'novel';
        $buku ->jumlah_halaman = 150;
        $buku ->penerbit = 'Gramedia Pustaka';
        $buku ->synopsis = 'ini adalah novel menarik';
        $buku ->status = 3;
        $buku ->save();

        $buku = new Buku;
        $buku ->judul = 'komedi';
        $buku ->jumlah_halaman = 380;
        $buku ->penerbit = 'Gramedia Pustaka';
        $buku ->synopsis = 'ini adalah buku komedi';
        $buku ->status = 4;
        $buku ->save();

        $buku = new Buku;
        $buku ->judul = 'komik';
        $buku ->jumlah_halaman = 50;
        $buku ->penerbit = 'Gramedia Pustaka';
        $buku ->synopsis = 'ini adalah buku komik remaja';
        $buku ->status = 5;
        $buku ->save();
    }
}
