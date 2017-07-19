<?php

namespace DOLucasDelivery\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Perintah Artisan yang disediakan oleh aplikasi Anda.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
    ];

    /**
    * Tentukan jadwal perintah aplikasi.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();
    }
}
