<h1>Tugas 1 Route laravel</h1>
<p>1. Buatlah program untuk menampikan nama, jurusan,  makanan favorit Anda. Kemudian tampilkan output dari program tersebut.</p>

```
<?php

use Illuminate\Support\Facades\Route;

Route::get('/siswa/{nama}/{jurusam}/{makananfav}', function($nama,$jurusan,$makananfav){
    return "Nama : $nama <br>Jurusan : $jurusan <br>Makanan Favorit : $makananfav";
});
```
