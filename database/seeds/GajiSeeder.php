<?php
use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gaji= new Gaji;
        $gaji->nip= '243671';
        $gaji->nama= 'Dilaaa';
        $gaji->agama = "Islam";
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = 'Jl.Nata Kusumah VI';
        $gaji->jabatan = "Manager";
        $gaji->jam_kerja = 6;
        $gaji->save();

        $gaji= new Gaji;
        $gaji->nip= '75496';
        $gaji->nama= 'Septiann';
        $gaji->agama = "Islam";
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'Jl.Cangkuang';
        $gaji->jabatan = "Sekretaris";
        $gaji->jam_kerja = 8;
        $gaji->save();

        $gaji= new Gaji;
        $gaji->nip= '75497';
        $gaji->nama= 'Septi';
        $gaji->agama = "Islam";
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'Jl.Cangkuang';
        $gaji->jabatan = "STAFF";
        $gaji->jam_kerja = 8;
        $gaji->save();

       
    }
}
