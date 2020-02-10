<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Wali;
use App\Mahasiswa;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        
        # Membuat data dosen
        $dosen = Dosen::create(array(
            'nama' => 'nurfadilah',
            'nipd' => '1234567892'
            
            ));
            $this->command->info('Data dosen telah diisi!.');
        
            # membuat mahasiswa
         $novay = Mahasiswa::create(array(
                'nama' => 'Septian',
                'nim' => '872125312',
                'id_dosen' => $dosen->id
            ));
        $novay = Mahasiswa::create(array(
            'nama' => 'dilaaa',
            'nim' => '7543218',
            'id_dosen' => $dosen->id
        ));
        $nay = Mahasiswa::create(array(
            'nama' => 'mute',
            'nim' => '4253456',
            'id_dosen' => $dosen->id
        ));
        $nuy = Mahasiswa::create(array(
            'nama' => 'susan',
            'nim' => '5478142',
            'id_dosen' => $dosen->id
        ));
        $this->command->info('data dan mahasiswa telah di isi');
        # membuat wali
        Wali::create(array(
            'nama' => 'mutmut',
            'id_mahasiswa' => $novay->id
        ));
         Wali::create(array(
            'nama' => 'fii',
            'id_mahasiswa' => $nay->id
        ));
        Wali::create(array(
            'nama' => 'fii',
            'id_mahasiswa' => $nuy->id
        ));
        # informasi ketika semua wali telah diisi
        $this->command->info('data dan mahasiswa dan wali telah di isi');
    
        # Membuat Data Tabel Hobi
        $mandi_hujan = Hobi::create(array('hobi'=>'Mandi Hujan'));
        $baca_buku = Hobi::create(array('hobi'=>'Baca Buku'));

        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $nay->hobi()->attach($mandi_hujan->id);
        $nuy->hobi()->attach($baca_buku->id);
        $this->command->info('Mahasiswa beserta Hobi telah diisi');
    }
}
