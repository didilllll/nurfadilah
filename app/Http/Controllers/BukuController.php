<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function latihan() {
        return 'ini contoh controller';
    }
    public function latihan2(){
        $a = 'Mahmud';
        $b = 'Zulkarnaen';

        return 'Nama saya Adalah '.$a.' '.$b;
    }

    //Pasing data from controller to view
    public function latihan3(){
        $a = 'Dadadng Mambo';
        return view('test',compact('a'));
    }
    public function latihan4(){
        $a = 'Icip Nirin';
        return view('test2',['nama' => $a]);
    }
    public function Biodata(){
        $nama = 'Siti Nurfadilah';
        $agama ='Islam';
        $umur = '18 tahun ';
        $jengkel = 'Perempuan ';
        $alamat = 'Jl.Nata Kusumah VI ';
        $sekolah = 'SMK ASSALAAM BANDUNG ';
        $kelas = 'XI- RPL 3 ';
        $jurusan = 'RPL ';
        $hobi = 'Nonton Iflix ';
        return view('biodata',['A' => $nama,'B' => $agama,'C' => $umur,
        'D' => $jengkel, 'E'=> $alamat,'F' => $sekolah,
        'G' => $kelas,'H' => $jurusan,'I' => $hobi]);
    }

   
    public function pesan($a = null,$b=null,$c=null){
     if(isset($a)){
         $a = "Anda memesan $a";
     }
     if(isset($b)){
        $b = " & $b";
    }
    if(isset($c)){
        if(($c) >= 25000){
         $c = "Mendapatkan ukuran large";
    
    }
    elseif(($c)<= 250000 && ($c) >= 15000){
        $c = "Mendapatkan ukuran medium";
    }
    elseif(($c) <= 15000 && ($c) >= 10000){
        $c = "Mendapatkan ukuran small";
    }
    else{
        $c = "harga anda tidak valid";
    }
}
   
    if(!isset($a)){
    $c = "Anda belum memsan sesuatu";
}
   return view('pesan',compact('a','b','c'));
   }


 

    //Route



}
