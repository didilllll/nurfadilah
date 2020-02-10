<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Buku;
use App\Gaji;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;


Route::get('relasi-1', function () {
    #temukan mahasiswa dengan nim
    $mahasiswa = Mahasiswa::where('nim','=','7543218')->first();
    #tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {
    #mencari data mahasiswa dengan nim 7543218
    $mahasiswa = Mahasiswa::where('nim','=','7543218')->first();
    #tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;
});
Route::get('relasi-3', function () {
    #mencari data dosen yang bernama susan
    $dosen = Dosen::where('nama','=','nurfadilah')->first();
    #tampilkan seluruh data mahasiswa didiknya
    foreach ($dosen->mahasiswa as $temp){
        echo '<li>Nama : ' . $temp->nama .
        '<strong>' .$temp->nim . '</strong></li>';
    }
});
Route::get('relasi-4', function () {
    #mencari data dosen yang bernama susan
    $novay= Mahasiswa::where('nama','=','dilaaa')->first();
    #tampilkan seluruh hobi
    foreach ($novay->hobi as $temp){
        echo '<li>' . $temp->hobi . '</li>';
    }
});
Route::get('relasi-5', function () {
    #mencari data dosen yang bernama hujan
    $mandi_hujan = Hobi::where('hobi','=','mandi hujan')->first();
    #tampilkan seluruh hobi mahasiswa mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp){
        echo '<li>Nama : ' . $temp->nama .
        '<strong>' .$temp->nim . '</strong></li>';
    }
});

Route::get('eloquent', function (){
    $data = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent', compact('data'));
});








Route::get('tampil', function () {
    return Buku::all();
});



Route::get('contoh','BukuController@latihan');

Route::get('profil','BukuController@latihan2');

Route::get('profil2','BukuController@latihan3');

Route::get('profil3','BukuController@latihan4');

//basic
Route::get('pesan/{menu?}','BukuController@pesan');
// menggunakan optional
Route::get('pesan/{menu}/{minum?}/{harga?}','BukuController@pesan');

//crud
Route::get('get-buku','BukuuController@index');
Route::get('create-buku2','BukuuController@buat_)data');
Route::get('get-buku/{id}','BukuuController@show');
Route::get('delete-buku/{id}','BukuuController@delete');
Route::get('update-buku/{id}/{judul}','BukuuController@update');

Route::get('hitung-buku','BukuuController@hitungbuku');

//siswa
Route::get('get-siswa','SiswaController@index');
Route::get('create-siswa','SiswaController@buat_)data');
Route::get('get-siswa/{id}','SiswaController@show');
Route::get('delete-siswa/{id}','SiswaController@delete');
Route::get('update-siswa/{id}/{nama}','SiswaController@update');







Route::get('/', function () {
    return 'haii';
});
Route::get('pesan', function () {
    return 'ini adalah halaman pesan saya';
});
Route::get('komentar', function (){
    return 'ini komentar anda';
});
Route::get('like', function (){
    return 'ayo like';
});
Route::get('berita', function (){
    return 'berita hari ini';
});
Route::get('instagram', function (){
    return'ini instagram saya';
});


Route::get('variable',function (){
    $data1 = 'ini variable data 1';
    $data2 = 'ini variable data 2';
    $data3 = 'ini variable data 3';
    $data4 = 'ini variable data 4';
    $data5 = 'ini variable data 5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{mangkat}', function (){
    $jurusan1 = 'cicaheum - karang setra';
    $jurusan2= 'bandung - tegalega';
    $data = 'angkot jurusan: ';
    return $data .' '. $jurusan1.'<br>'.$jurusan2;    
});

Route::get('user/{nama}/{alamat}/{nomor}', function ($nama,$alamat,$nomor){
    return 'halo '.$nama. ' yang beralamat di ' .$alamat. 'Nomor' .$nomor;
});

Route::get('user/{nama}/{nilai?}', function ($nama,$nilai='anda tidak mempunyai nilai!!'){
    if ($nilai <= 100 && $nilai >= 50){
        echo " Grade A <br>";
    }
    if ($nilai <= 49 && $nilai >= 40){
        echo " Grade B <br>";
    }
    if ($nilai <= 39 && $nilai >= 30){
        echo " Grade C <br>";
    }
    if ($nilai <= 29 && $nilai >= 20){
        echo " Grade D <br>";
    }
    if ($nilai >=1  && $nilai <= 19){
        echo " Grade E <br>";
    }
    else{
        echo "Dan tidak mendapatkan Grade<br>";
    }
    return ' nama = ' .$nama."<br>". ' nilai anda : ' .$nilai ; 


  
});

Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//book
Route::get('book','BukuuController@index');
Route::get('book/{id}','BukuuController@show');

//gaji
Route::get('gajih','GajiController@index');
Route::get('gajih/{id}','GajiController@show');

//Belajar Blade
Route::get('/profil',function(){
    return view('profil');
});
    Route::get('/kontak',function(){
    return view('kontak');
});
Route::get('/blog',function(){
    return view('blog');
});

