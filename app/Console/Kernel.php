<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('invoke:testview')->dailyAt('01:37');
    }

    /**
     * Register the commands for the application.
     */
    protected $commands = [
        \App\Console\Commands\InvokeTestView::class,
    ];
    
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
    protected $routeMiddleware = [
        // Other middleware entries...
        'checkTime' => \App\Http\Middleware\CheckTimeForRedirect::class,
    ];
}
