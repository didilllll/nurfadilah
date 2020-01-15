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
Route::get('update-buku/{id}','BukuuController@update');

Route::get('hitung-buku','Bukuontroller@hitungbuku');

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
