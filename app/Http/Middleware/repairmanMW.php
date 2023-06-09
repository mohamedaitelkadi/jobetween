<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class repairmanMW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
     
     public function handle(Request $request, Closure $next): Response
     {
 
         if (Auth::check()) {
             if (Auth::user()->role == '2') {
                 return $next($request);
             } else {
                 return redirect('/')->with('message', 'you don`t have the acess to this page');
             }
         } else {
             return redirect('/')->with('message', 'You need to login');
         }
     }
}
