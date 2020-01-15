<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bukuu;

class BukuuController extends Controller
{
    //
    public function index(){
        $buku = Bukuu::all();
        return $buku;
     }
    public function show(){
        $buku = Bukuu::find($id);
        return $buku;
    }
    public function hitungbuku(){
        $buku = Bukuu::count();
        return $buku;
    }
    public function buat_data(){
        $buku = Bukuu::find(2);
        $buku ->judul = "Belajar membaca";
        $buku->jumlah_halaman = 200;
        $buku->penerbit = 'Granmedia pustaka';
        $buku->synopsis = 'membaca akan memudahkan membaca';
        $buku->status = 2;
        $buku->save();
        return $buku;
    }
    public function update($id){
        $buku = Bukuu::find($id);
        $buku = new Bukuu;
        $buku ->judul = "Buku update";
        $buku->jumlah_halaman = 2000;
        $buku->penerbit = 'Loream Ipsum';
        $buku->synopsis = 'CV Loream Ipsum';
        $buku->status = false;
        $buku->save();
        return $buku;
    }
    public function delete($id){
        $buku = Bukuu::find($id);
        $buku->delete();
        return $buku;
    }
}
