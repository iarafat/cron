<?php

namespace App\Console;

use App\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\WordOfTheDay::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('word:day')
            ->everyMinute();

        // run the command and send email to users
        /*$schedule->command('word:day')
            ->daily();*/

        // delete row from db
        /*$schedule->call(function () {
            User::where('spam_count', '>', 100)
                ->get()
                ->each()
                ->delete();
        })->hourly();*/

        // backup main file monthly
        /*$schedule->exec(
            'cp -r ' .base_path() . " " . base_path('../backups/' . date('jY'))
        )->monthly();*/

        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
