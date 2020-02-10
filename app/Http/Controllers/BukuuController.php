<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuuController extends Controller
{
    //
    public function index(){
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
     }
    public function show($id){
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }
    public function hitungbuku(){
        $buku = Buku::count();
        return $buku;
    }
    public function buat_data(){
        $buku = Buku::find(2);
        $buku ->judul = "Belajar membaca";
        $buku->jumlah_halaman = 200;
        $buku->penerbit = 'Granmedia pustaka';
        $buku->synopsis = 'membaca akan memudahkan membaca';
        $buku->status = 2;
        $buku->save();
        return $buku;
    }
    public function update($id,$judul){
        $buku = Buku::find($id);
        $buku = new Buku;
        $buku ->judul = $judul;
        $buku->jumlah_halaman = 2000;
        $buku->penerbit = 'Loream Ipsum';
        $buku->synopsis = 'CV Loream Ipsum';
        $buku->status = false;
        $buku->save();
        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}
