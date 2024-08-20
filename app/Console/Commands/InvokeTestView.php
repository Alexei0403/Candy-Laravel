<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InvokeTestView extends Command
{
    protected $signature = 'invoke:testview';
    protected $description = 'Invoke the test view page at 10:00 AM daily';

    public function handle()
    {
        // Get the current time in the server's timezone
        $currentTime = now();
        \Log::info("Command invoked at: {$currentTime->format('Y-m-d H:i:s')}");
        // Check if the current time is 10:00 AM
        if ($currentTime->format('H:i') === '01:37') {
            // Use Laravel's route function to invoke the test view page
            $response = $this->get(route('test-view')); // Replace 'test-view' with the actual route name of your test view page
            
            // Output the response (optional)
            $this->info($response->getContent());
            \Log::info($response->getContent());
        }
    }
}
