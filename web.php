<?php

use Illuminate\Support\Facades\Route;

Route::get('/siswa/{nama}/{jurusam}/{makananfav}', function($nama,$jurusan,$makananfav){
    return "Nama : $nama <br>Jurusan : $jurusan <br>Makanan Favorit : $makananfav";
});