<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      $user=Auth::user();
      if($user->user_type!=="teacher"){
        return redirect('/');
      }
      //  $user= Auth::user();
      // if($user->user_type !=="student"){
      //   return redirect('/');
      // }
        return $next($request);
    }
}
