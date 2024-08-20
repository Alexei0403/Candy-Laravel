<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class CheckTimeForRedirect
{
    public function handle($request, Closure $next)
    {
        $currentTime = Carbon::now();
        $redirectTime = Carbon::createFromTime(14, 30, 0); // Set the redirect time to 14:30

        if ($currentTime->equalTo($redirectTime)) {
            // Redirect to another page if the current time matches the redirect time
            return redirect()->route('your.route.name');
        }

        return $next($request);
    }
}
