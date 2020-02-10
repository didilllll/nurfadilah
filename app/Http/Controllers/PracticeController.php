<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass(){

        $nama="Dilaaaaaa";
    return view('latihann', compact('nama'));
}
    public function pass1(){
        $gaji = 2000000;
        return view('latihan1',['penghasilan'=> $gaji]);
    }
    public function status($status){
        //dd(status); => untuk mengecek isi variable
        return view('lathihan2', compact('status'));
    }
    public function loop(){
        $buku = [
            ['judul' => 'Bangkit dari Remedial','penerbit' =>
            'erlangga','harga' => 100000,'penulis' => 'Aku yang suka remedial kamu'],
            ['judul' => 'Tips MOve on dari kamu','penerbit' =>
            'erlangga','harga' => 150000,'penulis' => 'epul'],        
            ['judul' => 'Kekuatan 1/3 malam','penerbit' =>
            'erlangga','harga' => 250000,'penulis' => 'dilaaa'],
        ];
        return view('latihan3', compact('buku'));
    }
}
