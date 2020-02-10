<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = new Siswa;
        $siswa->nama = "Nurfadilah";
        $siswa->nis = "18702002312";
        $siswa->kelas = "XI-RPL";
        $siswa->jurusan = "Rekayasa Perangkat Lunak";
        $siswa->alamat = "Jl.Nata Kusumah VI";
        $siswa->tanggal_lahir = "2002-01-07";
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = "mutiara";
        $siswa->nis = "189653";
        $siswa->kelas = "XI-RPL";
        $siswa->jurusan = "Rekayasa Perangkat Lunak";
        $siswa->alamat = "Jl.Nata Kusumah VI";
        $siswa->tanggal_lahir = "2002-01-07";
        $siswa->save();

       
    }
}
