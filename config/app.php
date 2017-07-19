<?php

return [

    /*
     | Aplikasi Debug Mode
     | ------------------------------------------------- -------------------------
     |
     | Saat aplikasi Anda dalam mode debug, pesan kesalahan terperinci dengan
     | Jejak jejak akan ditampilkan pada setiap kesalahan yang terjadi di dalam komputer Anda
     | aplikasi. Jika dinonaktifkan, halaman kesalahan generik sederhana ditampilkan.
     |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    | ------------------------------------------------- -------------------------
    | URL aplikasi
    | ------------------------------------------------- -------------------------
    |
    | URL ini digunakan oleh konsol untuk menghasilkan URL dengan benar saat menggunakan
    | Alat baris perintah Artisan Anda harus mengatur ini ke akar
    | Aplikasi Anda sehingga digunakan saat menjalankan tugas Artisan.
    |
    */

    'url' => 'http://localhost',

    /*
    | ------------------------------------------------- -------------------------
    | Aplikasi Timezone
    | ------------------------------------------------- -------------------------
    |
    | Di sini Anda dapat menentukan zona waktu default untuk aplikasi Anda, yang mana
    | Akan digunakan oleh tanggal PHP dan fungsi tanggal-waktu. Kami telah pergi
    | Ke depan dan set ke default yang masuk akal untuk Anda di luar kotak.
    |
    */

    'timezone' => 'UTC',

    /*
    | ------------------------------------------------- -------------------------
    | Konfigurasi Lokal Aplikasi
    | ------------------------------------------------- -------------------------
    |
    | Lokal aplikasi menentukan lokal default yang akan digunakan
    | Oleh penyedia layanan terjemahan. Anda bebas menentukan nilai ini
    | Ke salah satu locales yang akan didukung oleh aplikasi.
    |
    */

    'locale' => 'en',

    /*
   
    */

    'fallback_locale' => 'en',

    /*
     | ------------------------------------------------- -------------------------
    | Aplikasi Fallback Locale
    | ------------------------------------------------- -------------------------
    |
    | Lokal fallback menentukan lokal untuk digunakan saat arus
    | tidak tersedia. Anda dapat mengubah nilainya agar sesuai dengan salah satu
    | Folder bahasa yang disediakan melalui aplikasi Anda.
    |
    */

    'key' => env('APP_KEY', 'SomeRandomString'),

    'cipher' => 'AES-256-CBC',

    /*
    | ------------------------------------------------- -------------------------
    | Kunci enkripsi
    | ------------------------------------------------- -------------------------
    |
    | Kunci ini digunakan oleh layanan encoding Illuminate dan harus diset
    | Ke string acak, 32 karakter, jika tidak string terenkripsi ini
    | Tidak akan aman Silakan lakukan ini sebelum menerapkan aplikasi!
    |
    */

    'log' => env('APP_LOG', 'single'),

    /*
     | ------------------------------------------------- -------------------------
     | Penyedia layanan otomatis
     | ------------------------------------------------- -------------------------
     |
     | Penyedia layanan yang tercantum di sini akan dimuat secara otomatis di
     | Permintaan ke aplikasi anda Jangan ragu untuk menambahkan layanan Anda sendiri
     | Array ini untuk memberikan fungsionalitas diperluas ke aplikasi Anda.
     |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Routing\ControllerServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        Illuminate\Html\HtmlServiceProvider::class,
        Prettus\Repository\Providers\RepositoryServiceProvider::class,
        Bestmomo\Scafold\ScafoldServiceProvider::class,
        
        LucaDegasperi\OAuth2Server\Storage\FluentStorageServiceProvider::class,
        LucaDegasperi\OAuth2Server\OAuth2ServerServiceProvider::class,
        
        Barryvdh\Cors\ServiceProvider::class,
        
        /*
         * Application Service Providers...
         */
        DOLucasDelivery\Providers\AppServiceProvider::class,
        DOLucasDelivery\Providers\AuthServiceProvider::class,
        DOLucasDelivery\Providers\EventServiceProvider::class,
        DOLucasDelivery\Providers\RouteServiceProvider::class,
        DOLucasDelivery\Providers\RepositoryServiceProvider::class,

    ],

    /*
    | ------------------------------------------------- -------------------------
     | Kelas aliases
     | ------------------------------------------------- -------------------------
     |
     | Kumpulan alias kelas ini akan didaftarkan saat aplikasi ini
     | Dimulai Namun, jangan ragu untuk mendaftar sebanyak yang anda mau
     | Alias "malas" dimuat sehingga tidak mengganggu performa.
     |
    */

    'aliases' => [

        'App'       => Illuminate\Support\Facades\App::class,
        'Artisan'   => Illuminate\Support\Facades\Artisan::class,
        'Auth'      => Illuminate\Support\Facades\Auth::class,
        'Blade'     => Illuminate\Support\Facades\Blade::class,
        'Bus'       => Illuminate\Support\Facades\Bus::class,
        'Cache'     => Illuminate\Support\Facades\Cache::class,
        'Config'    => Illuminate\Support\Facades\Config::class,
        'Cookie'    => Illuminate\Support\Facades\Cookie::class,
        'Crypt'     => Illuminate\Support\Facades\Crypt::class,
        'DB'        => Illuminate\Support\Facades\DB::class,
        'Eloquent'  => Illuminate\Database\Eloquent\Model::class,
        'Event'     => Illuminate\Support\Facades\Event::class,
        'File'      => Illuminate\Support\Facades\File::class,
        'Gate'      => Illuminate\Support\Facades\Gate::class,
        'Hash'      => Illuminate\Support\Facades\Hash::class,
        'Input'     => Illuminate\Support\Facades\Input::class,
        'Lang'      => Illuminate\Support\Facades\Lang::class,
        'Log'       => Illuminate\Support\Facades\Log::class,
        'Mail'      => Illuminate\Support\Facades\Mail::class,
        'Password'  => Illuminate\Support\Facades\Password::class,
        'Queue'     => Illuminate\Support\Facades\Queue::class,
        'Redirect'  => Illuminate\Support\Facades\Redirect::class,
        'Redis'     => Illuminate\Support\Facades\Redis::class,
        'Request'   => Illuminate\Support\Facades\Request::class,
        'Response'  => Illuminate\Support\Facades\Response::class,
        'Route'     => Illuminate\Support\Facades\Route::class,
        'Schema'    => Illuminate\Support\Facades\Schema::class,
        'Session'   => Illuminate\Support\Facades\Session::class,
        'Storage'   => Illuminate\Support\Facades\Storage::class,
        'URL'       => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View'      => Illuminate\Support\Facades\View::class,
        'Html'      => Illuminate\Html\HtmlFacade::class,
        'Form'      => Illuminate\Html\FormFacade::class,
        
        'Authorizer' => LucaDegasperi\OAuth2Server\Facades\Authorizer::class,
    ],

];
