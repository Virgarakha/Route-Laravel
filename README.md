<h1>Tugas Route laravel</h1>
<p>1. Buatlah program untuk menampikan nama, jurusan,  makanan favorit Anda. Kemudian tampilkan output dari program tersebut.</p>

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/siswa/{nama}/{jurusam}/{makananfav}', function($nama,$jurusan,$makananfav){
    return "Nama : $nama <br>Jurusan : $jurusan <br>Makanan Favorit : $makananfav";
});
```
