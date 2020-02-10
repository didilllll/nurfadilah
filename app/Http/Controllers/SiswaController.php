<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;


class SiswaController extends Controller
{
    //
    public function index(){
        $siswa= Siswa::all();
        return $siswa;
     }
    public function show($id){
        $siswa = Siswa::find($id);
        return $siswa;
    }
    public function buat_data(){
        $siswa = Siswa::find(2);
        $siswa->nama = $nama;
        $siswa->nis = "18702002312";
        $siswa->kelas = "XI-RPL";
        $siswa->jurusan = "Rekayasa Perangkat Lunak";
        $siswa->alamat = "Jl.Nata Kusumah VI";
        $siswa->tanggal_lahir = "2002-01-07";
        return $siswa;
    }
    public function update($id,$nama,$nis){
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->nis = $nis;
        $siswa->kelas = "XI-RPL";
        $siswa->jurusan = "Rekayasa Perangkat Lunak";
        $siswa->alamat = "Jl.Nata Kusumah VI";
        $siswa->tanggal_lahir = "2002-01-07";
        $siswa->save();
        return $siswa;
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}


