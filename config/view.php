<?php

return [

    /*
    |--------------------------------------------------------------------------
    | | Lihat Jalur Penyimpanan
     | ------------------------------------------------- -------------------------
     |
     | Sebagian besar template template template templat dari disk. Di sini Anda bisa menentukannya
     | Serangkaian jalur yang harus diperiksa untuk pandangan Anda. Tentu saja
     | Jalur pandang Laravel yang biasa telah terdaftar untuk Anda.
    */

    'paths' => [
        realpath(base_path('resources/views')),
    ],

    /*
     | ------------------------------------------------- -------------------------
     | Jalur Tampilan yang Disusun
     | ------------------------------------------------- -------------------------
     |
     | Opsi ini menentukan di mana semua template Blade yang dikompilasi akan menjadi
     | Disimpan untuk aplikasi anda Biasanya, ini ada di dalam penyimpanan
     | direktori. Namun, seperti biasa, Anda bebas mengubah nilai ini.
     |
     * /

    'compiled' => realpath(storage_path('framework/views')),

];
