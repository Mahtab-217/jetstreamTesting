<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log as FacadesLog;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        FacadesLog::info('someone visited '.$request->method(). ' ' .$request->path());
        return $next($request);
    }
}
