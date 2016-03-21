<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestLogMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info("Request Logged\n" .
            sprintf("~~~~\n%s~~~~", (string) $request));

        return $next($request);
    }
}